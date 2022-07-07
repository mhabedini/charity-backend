<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseholdCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\Household;
use App\Models\User;
use Illuminate\Http\Request;

class HouseholdController extends Controller
{
    public function index(Request $request)
    {
        $households = Household::with('user', 'charityDepartment')->paginate($request->input('per_page'));
        return api()->data($households->items())
            ->paginator($households)
            ->get();
    }

    public function store(HouseholdCreateRequest $request)
    {
        $user = User::create($request->except('charity_department_id'));
        $household = Household::create([
            'user_id' => $user->id,
            'charity_department_id' => $request->input('charity_department_id')
        ]);
        $household = Household::with('user', 'charityDepartment')->find($household->id);
        return api()->data($household)->get();
    }

    public function update(UserEditRequest $request, Household $household)
    {
        $household->user()->update($request->validated());
        return api()->data($household->load('user'))->get();
    }

    public function show(Household $household)
    {
        $household = Household::with(
            'user',
            'charityDepartment',
            'families.user'
        )->find($household->id);

        return api()->data($household)->get();
    }
}
