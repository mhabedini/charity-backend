<?php

namespace App\Http\Controllers;

use App\Enums\MaritalStatus;

class MaritalStatusController extends Controller
{
    public function index()
    {
        return api()->data(MaritalStatus::pair())->get();
    }
}
