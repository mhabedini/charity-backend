<?php

namespace App\Http\Requests;

use App\Enums\Religion;
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
            'user' => 'nullable|array',
            'user.first_name' => 'required|string',
            'user.last_name' => 'required|string',
            'user.father_name' => 'nullable|string',
            'user.email' => 'nullable|email|unique:users,email,' . request()->input('user_id'),
            'user.gender' => 'required|string',
            'user.religion' => 'required|in:' . Religion::implode(','),
            'user.national_code' => 'required|numeric|unique:users,national_code,' . request()->input('user_id'),
            'user.birth_date' => 'nullable|date',
            'user.phone' => 'nullable|string',
            'user.is_sadat' => 'required|boolean',
            'user.mobile' => 'required|string',
            'user.marital_status' => 'nullable|required|string',
            'user.job' => 'nullable|string',
            'user.citizenship' => 'nullable|exists:countries,id',
            'user.representative' => 'nullable|string',
            'charity_department_id' => 'nullable|exists:charity_departments,id',
            'description' => 'nullable|string',
        ];
    }
}
