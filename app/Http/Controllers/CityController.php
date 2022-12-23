<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CityController extends Controller
{

    public function index(Request $request)
    {
        $stateId = $request->input('state_id');

        $cities = Cache::remember('cities'.$stateId ?: '', now()->addDay(), function () use ($stateId, $request) {
            return City::when($request->filled('state_id'), function ($query) use ($stateId) {
                $query->where('state_id', $stateId);
            })->get()->map(function ($item) {
                return [
                    'label' => $item->name,
                    'value' => $item->id,
                ];
            });
        });

        return api()->data($cities)->get();
    }
}
