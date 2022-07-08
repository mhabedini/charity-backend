<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Address
 *
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
 * @mixin \Eloquent
 * @property int $id
 * @property int $state_id
 * @property int $city_id
 * @property int $district_id
 * @property string $address
 * @property string $postal_code
 * @property string $lat_long
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLatLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 */
class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'country_id', 'state_id', 'city_id', 'district_id', 'address', 'postal_code', 'lat_long', 'type', 'default'
    ];
}
