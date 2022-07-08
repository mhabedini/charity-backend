<?php

namespace App\Http\Controllers;

use App\Enums\Religion;

class ReligionController extends Controller
{
    public function index()
    {
        return api()->data(Religion::pair())->get();
    }
}
