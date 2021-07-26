<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyCreateRequest;
use App\Models\Family;
use App\Models\User;

class FamilyController extends Controller
{
    public function store(FamilyCreateRequest $request)
    {
        $user = User::create($request->except('household_id'));
        $family = Family::create([
            'user_id' => $user->id,
            'household_id' => $request->input('household_id')
        ]);
        $family = Family::with('user', 'household')->find($family->id);
        return api()->data($family)->get();
    }
}
