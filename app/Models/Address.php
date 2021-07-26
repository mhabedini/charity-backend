<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereVersionName($value)
 *
 * @mixin \Eloquent
 */
class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'country_id', 'state_id', 'city_id', 'district_id', 'address', 'postal_code', 'lat_long', 'type', 'default'
    ];
}
