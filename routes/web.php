<?php

use App\Http\Controllers\HouseholdAttachmentController;

Route::get('storage/households/{fileName}', [HouseholdAttachmentController::class, 'show']);
