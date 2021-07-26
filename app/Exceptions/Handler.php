<?php

namespace App\Exceptions;

use App\Helpers\Api\ApiError;
use App\Models\SystemLog;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        if (!$exception instanceof ValidationException) {
            SystemLog::error(sprintf(
                "[%s]: %d - %s\n%s:%d\n[%s] %s",
                get_class($exception),
                $exception->getCode(),
                $exception->getMessage(),
                $exception->getFile(),
                $exception->getLine(),
                request()->getMethod(),
                request()->getUri()
            ));
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\JsonResponse
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        // isAPI() means return exception messages as Json to clients
        // isLocal() means show Laravel Error Handler for developers
        // ModelNotFound Exception means we need to return as JSON

        if ($this->isAPI($request) && (!isLocal() || $exception instanceof ModelNotFoundException)) {
            return $this->getJSON($exception);
        }

        return parent::render($request, $exception);
    }

    /**
     * Checks whether current request is an API request or not.
     *
     * @param  Request  $request
     * @return boolean
     */
    private function isAPI(Request $request)
    {
        return strpos($request->getUri(), config('app.api_url_matcher')) != false;
    }

    /**
     * Returns JSON error based on exception type.
     *
     * @param  Exception  $exception
     * @return \Illuminate\Http\JsonResponse
     */
    private function getJSON(Exception $exception)
    {
        switch (true) {
            case $exception instanceof BadRequestException:
            case $exception instanceof BadRequestHttpException:
                return api()->abort(Response::HTTP_BAD_REQUEST);
            case $exception instanceof AuthenticationException:
            case $exception instanceof UnauthorizedException:
            case $exception instanceof UnauthorizedHttpException:
                return api()->abort(Response::HTTP_UNAUTHORIZED);
            case $exception instanceof AccessDeniedHttpException:
                return api()->abort(Response::HTTP_FORBIDDEN);
            case $exception instanceof NotFoundHttpException:
            case $exception instanceof ModelNotFoundException:
            case $exception instanceof RouteNotFoundException:
                return api()->abort(Response::HTTP_NOT_FOUND);
            case $exception instanceof MethodNotAllowedException:
            case $exception instanceof MethodNotAllowedHttpException:
                return api()->abort(Response::HTTP_METHOD_NOT_ALLOWED);
            case $exception instanceof MaintenanceModeException:
                return api()->abort(Response::HTTP_SERVICE_UNAVAILABLE);
            case $exception instanceof ValidationException:
                return api()->validationError($this->generateValidationMessages($exception));
            case $exception instanceof ClientException:
            case $exception instanceof UnprocessableEntityHttpException:
                return api()->abort($exception->getCode(), $exception->getMessage());
            default:
                return api()->abort(Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function generateValidationMessages(ValidationException $exception)
    {
        $errors = array();
        foreach ($exception->errors() as $messages) {
            foreach ($messages as $message) {
                $errors[] = ApiError::make($message);
            }
        }
        return $errors;
    }
}
