<?php

namespace App\Helpers\Api;

use App\Models\SystemLog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ApiHelper
{
    /**
     * @param $data mixed be passed in 'data' section
     * @return ApiDataBuilder to be chained as Builder accessor
     */
    public function data($data)
    {
        return (new ApiDataBuilder())->data($data);
    }

    /**
     * Get ApiHeader object to check for request headers
     *
     * @return ApiHeader
     */
    public function header()
    {
        return (new ApiHeader());
    }

    /**
     * Build success json response
     *
     * @return JsonResponse
     */
    public function success()
    {
        return response()->json(['success' => true]);
    }

    /**
     * Abort api request with HTTP_BAD_REQUEST status code
     *
     * @param $errors array (of type ApiError) errors of validation rule
     * @return JsonResponse
     */
    public function validationError(array $errors)
    {
        $errorJson = array();
        foreach ($errors as $error) {
            if ($error instanceof ApiError) {
                $errorJson[] = $error->toJson();
            } else {
                return $this->abort(Response::HTTP_INTERNAL_SERVER_ERROR, 'Validation error must be of type ApiError');
            }
        }
        return response()->json(['success' => false, 'error' => $errorJson], Response::HTTP_BAD_REQUEST);
    }

    /**
     * Abort api request and return error response
     *
     * @param $code mixed Http code
     * @param mixed|null $message
     * @return JsonResponse
     */
    public function abort($code, $message = null)
    {
        $errorMessage = $message ?: (array_key_exists($code, API_ERROR_MESSAGE) ? API_ERROR_MESSAGE[$code]
            : 'No message found for error');
        $uri = request()->getUri();
        $log = sprintf("[Helpers.ApiHelper.abort] Code: %d. Message: %s\n(%s)", $code, $errorMessage, $uri);
        SystemLog::debug($log);
        $errorImage = array_key_exists($code, API_ERRORS_IMAGE) ? API_ERRORS_IMAGE[$code] : '/img/errors/error.png';
        $error = ApiError::make($errorMessage, $code, url($errorImage));
        $data = ['success' => false, 'error' => [$error->toJson()]];
        if (in_array($code, HTTP_ERRORS)) {
            return response()->json($data, $code);
        } else {
            return response()->json($data, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }
}
