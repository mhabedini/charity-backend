<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseholdCreateRequest;
use App\Http\Requests\HouseholdEditRequest;
use App\Models\Household;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
        $user = User::create($request->validated());
        $household = Household::create([
            'user_id' => $user->id,
            'charity_department_id' => $request->input('charity_department_id')
        ]);
        $household = Household::with('user', 'charityDepartment')->find($household->id);
        return api()->data($household)->get();
    }

    public function update(HouseholdEditRequest $request, Household $household)
    {
        $household->user()->update(Arr::except($request->validated(), 'charity_department_id'));
        return api()->data($household->load('user'))->get();
    }

    public function show(Household $household)
    {
        $household->load(
            'user',
            'charityDepartment',
            'families.user'
        );

        return api()->data($household)->get();
    }
}
