<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StateController extends Controller
{
    public function index(Request $request)
    {
        $countryId = $request->input('country_id');

        $states = Cache::remember('states'.$countryId ?: '', now()->addDay(), function () use ($countryId, $request) {
            return State::when($request->filled('country_id'), function ($query) use ($countryId) {
                $query->where('country_id', $countryId);
            })->get()->map(function ($item) {
                return [
                    'label' => $item->name,
                    'value' => $item->id,
                ];
            });
        });

        return api()->data($states)->get();
    }
}
