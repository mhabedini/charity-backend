<?php

namespace App\Http\Controllers;

use App\Http\Requests\CharityDepartmentRequest;
use App\Models\CharityDepartment;
use Illuminate\Http\Request;

class CharityDepartmentController extends Controller
{

    public function index(Request $request)
    {
        $charityDepartments = CharityDepartment::paginate($request->input('per_page'));
        return api()->data($charityDepartments->items())
            ->paginator($charityDepartments)
            ->get();
    }

    public function store(CharityDepartmentRequest $request)
    {
        $charityDepartment = CharityDepartment::create($request->all());
        return api()->data($charityDepartment)->get();
    }

    public function update(CharityDepartmentRequest $request, CharityDepartment $charityDepartment)
    {
        $charityDepartment->update($request->all());
    }

    public function show(CharityDepartment $charityDepartment)
    {
        return api()->data($charityDepartment)->get();
    }
}
