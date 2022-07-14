<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseholdCreateRequest;
use App\Http\Requests\HouseholdEditRequest;
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
        $user = User::create($request->input('user'));
        $household = Household::create([
            'user_id' => $user->id,
            'charity_department_id' => $request->input('charity_department_id'),
            'description' => $request->input('description'),
            'housing_situation' => $request->input('housing_situation'),
        ]);
        $household = $household->load('user', 'charityDepartment');
        return api()->data($household)->get();
    }

    public function update(HouseholdEditRequest $request, Household $household)
    {
        $household->user()->update($request->input('user'));
        $household->update($request->only(['charity_department_id', 'description', 'housing_situation']));
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
