<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


/**
 * Class UserCreateRequest
 * @property mixed password
 * @package App\Http\Requests
 */
class HouseholdEditRequest extends FormRequest
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
            'email' => 'nullable|email|unique:users,email,' . request()->input('id'),
            'gender' => 'required|string',
            'national_code' => 'required|numeric|unique:users,national_code,' . request()->input('id'),
            'birth_date' => 'nullable|date',
            'phone' => 'nullable|string',
            'is_sadat' => 'required|boolean',
            'charity_department_id' => 'nullable|exists:charity_departments,id',
            'mobile' => 'required|string',
            'marital_status' => 'nullable|required|boolean',
            'job' => 'nullable|string',
            'citizenship' => 'nullable|exists:countries,id',
            'representative' => 'nullable|string',
        ];
    }
}
