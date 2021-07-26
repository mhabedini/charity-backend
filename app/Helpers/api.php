<?php

use App\Helpers\Api\ApiError;
use App\Helpers\Api\ApiHelper;

/**
 * Instantiates a ApiHelperV1.
 *
 * @return ApiHelper
 */
function api()
{
    return new ApiHelper();
}

/**
 * Validates request and returns possible input errors.
 *
 * @param array $rules
 * @return array
 */
function validateAPI($rules)
{
    $errors = [];
    $validator = validator(request()->all(), $rules);
    if ($validator->fails()) {
        foreach ($validator->errors()->getMessages() as $messages) {
            foreach ($messages as $m) {
                $errors[] = ApiError::make($m);
            }
        }
    }

    return $errors;
}

/**
 * Returns authenticated user from Auth-Token request header.
 *
 * @return \Illuminate\Contracts\Auth\Authenticatable
 */
function user(): ?\Illuminate\Contracts\Auth\Authenticatable
{
    $user = Auth::guard('api')->user();
    if (!$user) {
        $user = Auth::guard('web')->user();
    }
    return $user ?: null;
}

/**
 * Returns data for pagination in JSON response.
 *
 * @param \Illuminate\Pagination\LengthAwarePaginator $paginator
 * @return array
 */
function apiPagination($paginator)
{
    return [
        'current_page' => $paginator->currentPage(),
        'current_page_items' => $paginator->count(),
        'per_page' => $paginator->perPage(),
        'full_url' => url()->current() . '?' . http_build_query(request()->except('page')),
        'total_pages' => $paginator->lastPage(),
        'has_more_page' => $paginator->hasMorePages(),
        'total' => $paginator->total(),
    ];
}
