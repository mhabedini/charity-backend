<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddressCreateRequest;
use App\Models\Address;
use App\Models\User;

class AddressController extends Controller
{
    public function store(UserAddressCreateRequest $request, User $user)
    {
        $address = Address::create($request->validated() + ['user_id' => $user->id]);
        return api()->data($address)->get();
    }
}
