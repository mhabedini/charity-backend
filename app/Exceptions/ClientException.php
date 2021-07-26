<?php

namespace App\Exceptions;

use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

abstract class ClientException extends HttpException
{
    /**
     * @param string|null $message
     * @param Throwable|null $previous
     * @param array $headers
     * @param int $code
     * @return void
     */
    public function __construct($message = 'خطای کلاینت', Throwable $previous = null, array $headers = [], $code = 100)
    {
        parent::__construct(Response::HTTP_UNPROCESSABLE_ENTITY, $message, $previous, $headers, $code);
    }
}
