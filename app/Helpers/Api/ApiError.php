<?php


namespace App\Helpers\Api;

use Illuminate\Http\Response;

class ApiError
{
    public $code;
    public $message;
    public $image;

    public function __construct($message = null, $code = Response::HTTP_BAD_REQUEST, $image = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->image = $image;
    }

    public function toJson()
    {
        return [
            'code' => $this->code,
            'message' => $this->message,
            'image' => $this->image
        ];
    }

    public static function make($message = null, $code = Response::HTTP_BAD_REQUEST, $image = null)
    {
        return new ApiError($message, $code, $image);
    }
}
