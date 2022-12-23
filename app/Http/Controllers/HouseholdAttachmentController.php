<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseholdAttachmentCreateRequest;
use App\Models\Household;
use App\Models\HouseholdAttachment;
use Illuminate\Support\Facades\Storage;

class HouseholdAttachmentController extends Controller
{
    public function show(string $fileName)
    {
        return Storage::response("households/$fileName");
    }

    public function store(HouseholdAttachmentCreateRequest $request, Household $household)
    {
        $file = $request->file('file')->store('households');
        $householdAttachment = HouseholdAttachment::create([
            'path' => $file,
            'household_id' => $household->id,
        ]);
        return api()->data($householdAttachment)->get();
    }
}
