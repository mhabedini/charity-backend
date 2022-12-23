<?php

namespace App\Http\Controllers;

use App\Enums\EducationStatus;

class EducationController extends Controller
{
    public function index()
    {
        return api()->data(EducationStatus::pair())->get();
    }
}
