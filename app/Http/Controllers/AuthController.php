<?php

namespace App\Http\Controllers;

use App\Exceptions\WrongMobileOrPasswordException;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class AuthController extends Controller
{
    private const USER_BANNED_MESSAGE = "You are banned and don't have access to use app anymore";

    public function login(UserLoginRequest $request)
    {
        // find and authenticate user.
        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            throw new WrongMobileOrPasswordException();
        }

        if (!Hash::check($request->input('password'), $user->password)) {
            throw new WrongMobileOrPasswordException();
        }


        if (!$user->active) {
            throw new AccessDeniedHttpException(self::USER_BANNED_MESSAGE);
        }

        $token = $user->createApiToken();

        return api()->data(['auth_token' => $token])->get();
    }

    public function logout()
    {
        $user = user();
        $user->token()->revoke();
        return api()->success();
    }
}
