<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyCreateRequest;
use App\Models\Family;
use App\Models\User;

class FamilyController extends Controller
{
    public function store(FamilyCreateRequest $request)
    {
        $user = User::create($request->safe()->except('household_id'));
        $family = Family::create([
            'user_id' => $user->id,
            'household_id' => $request->input('household_id')
        ])->load(['user', 'household']);
        return api()->data($family)->get();
    }
}
