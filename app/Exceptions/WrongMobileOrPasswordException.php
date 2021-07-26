<?php

namespace App\Exceptions;

use Throwable;

class WrongMobileOrPasswordException extends ClientException
{
    /**
     * @param  string|null  $message
     * @param  Throwable|null  $previous
     * @param  array  $headers
     * @param  int  $code
     * @return void
     */
    public function __construct(
        $message = 'موبایل و یا گذرواژه نامعتبر است.',
        Throwable $previous = null,
        array $headers = [],
        $code = 1023
    ) {
        parent::__construct($message, $previous, $headers, $code);
    }
}
