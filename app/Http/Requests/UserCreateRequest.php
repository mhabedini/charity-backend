<?php

namespace App\Http\Requests;

use App\Enums\Religion;
use Illuminate\Foundation\Http\FormRequest;


/**
 * Class UserCreateRequest
 * @property mixed password
 * @package App\Http\Requests
 */
class UserCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'father_name' => 'nullable|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'gender' => 'required|string',
            'is_sadat' => 'required|boolean',
            'religion' => 'required|in:' . Religion::implode(','),
            'national_code' => 'required|numeric|unique:users',
            'birth_date' => 'nullable|date',
            'phone' => 'nullable|string',
            'mobile' => 'required|string',
            'marital_status' => 'nullable|required|string',
            'education' => 'nullable|string',
            'job' => 'nullable|string',
            'citizenship' => 'nullable|exists:countries,id',
            'representative' => 'nullable|string',
        ];
    }
}
