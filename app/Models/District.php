<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\District whereVersionName($value)
 *
 * @mixin \Eloquent
 */
class District extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'name'];
}
