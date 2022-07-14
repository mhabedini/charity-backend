<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\JsonResponse;

class CountryController extends Controller
{
    public function index(): JsonResponse
    {
        return api()->data(Country::all())->get();
    }
}
