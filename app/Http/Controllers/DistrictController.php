<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
        $cityId = $request->input('city_id');

        $districts = Cache::remember('districts'.$cityId ?: '', now()->addDay(), function () use ($cityId, $request) {
            return District::when($request->filled('city_id'), function ($query) use ($cityId) {
                $query->where('city_id', $cityId);
            })->get()->map(function ($item) {
                return [
                    'label' => $item->name,
                    'value' => $item->id,
                ];
            });
        });

        return api()->data($districts)->get();
    }
}
