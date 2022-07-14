<?php

namespace App\Http\Requests;

use App\Enums\Religion;
use Illuminate\Foundation\Http\FormRequest;


/**
 * Class UserCreateRequest
 * @property mixed password
 * @package App\Http\Requests
 */
class HouseholdCreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user' => 'array|required',
            'user.first_name' => 'required|string',
            'user.last_name' => 'required|string',
            'user.father_name' => 'nullable|string',
            'user.email' => 'nullable|email|unique:users,email',
            'user.gender' => 'required|string',
            'user.national_code' => 'required|numeric|unique:users,national_code',
            'user.birth_date' => 'nullable|date',
            'user.religion' => 'required|in:' . Religion::implode(','),
            'user.phone' => 'nullable|string',
            'user.is_sadat' => 'required|boolean',
            'user.mobile' => 'nullable|string',
            'user.marital_status' => 'nullable|required|string',
            'user.job' => 'nullable|string',
            'user.citizenship' => 'nullable|exists:countries,id',
            'user.representative' => 'nullable|string',
            'user.representative_mobile' => 'nullable|string',
            'housing_situation' => 'nullable|string',
            'charity_department_id' => 'nullable|exists:charity_departments,id',
            'supervisor_status' => 'nullable|string',
            'description' => 'nullable|string',
        ];
    }
}
