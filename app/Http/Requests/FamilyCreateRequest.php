<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


/**
 * Class UserCreateRequest
 * @property mixed password
 * @package App\Http\Requests
 */
class FamilyCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'nullable|email|unique:users',
            'gender' => 'required|string',
            'national_code' => 'required|numeric|unique:users',
            'birth_date' => 'nullable|date',
            'phone' => 'nullable|string',
            'is_sadat' => 'required|boolean',
            'household_id' => 'nullable|exists:households,id',
            'mobile' => 'nullable|string',
            'marital_status' => 'nullable|required|boolean',
            'job' => 'nullable|string',
            'citizenship' => 'nullable|exists:countries,id',
            'representative' => 'nullable|string',
        ];
    }
}
