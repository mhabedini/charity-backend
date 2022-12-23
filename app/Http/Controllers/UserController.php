<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\UnauthorizedException;

class UserController extends Controller
{
    public function profile()
    {
        $user = user();
        if (!$user) {
            throw new UnauthorizedException();
        }
        return api()->data($user)->get();
    }

    public function index(Request $request)
    {
        $users = User::paginate($request->input('per_page'));
        return api()->data($users->items())
            ->paginator($users)
            ->get();
    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create($this->userRequestWithHashedPassword($request));
        return api()->data($user)->get();
    }

    public function update(UserEditRequest $request, User $user)
    {
        $user->update($this->userRequestWithHashedPassword($request));
        return $user;
    }

    public function show(User $user)
    {
        return api()->data($user)->get();
    }

    private function userRequestWithHashedPassword(Request $request)
    {
        if ($request->has('password') && $request->input('password') != null) {
            return $request->safe()->except('password') + ['password' => Hash::make($request->input('password'))];
        }
        return $request->safe()->except('password');
    }
}
