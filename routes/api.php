<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/religions', 'ReligionController@index');
Route::post('/auth/login', 'AuthController@login');

Route::middleware(['auth:api', 'role:admin'])->group(function () {
    Route::post('/auth/logout', 'AuthController@logout');

    Route::get('/user', 'UserController@profile');
    Route::get('/users', 'UserController@index');
    Route::post('/users', 'UserController@store');
    Route::post('/users/{user}', 'UserController@update');
    Route::get('/users/{user}', 'UserController@show');

    Route::get('/charity-departments', 'CharityDepartmentController@index');
    Route::post('/charity-departments', 'CharityDepartmentController@store');
    Route::post('/charity-departments/{charityDepartment}', 'CharityDepartmentController@update');
    Route::get('/charity-departments/{charityDepartment}', 'CharityDepartmentController@show');

    Route::get('/households', 'HouseholdController@index');
    Route::post('/households', 'HouseholdController@store');
    Route::patch('/households/{household}', 'HouseholdController@update');
    Route::get('/households/{household}', 'HouseholdController@show');

    Route::get('/family-members', 'FamilyController@index');
    Route::post('/family-members', 'FamilyController@store');
    Route::post('/family-members/{family}', 'FamilyController@update');
    Route::get('/family-members/{family}', 'FamilyController@show');
});
