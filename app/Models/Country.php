<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereVersionName($value)
 *
 * @mixin \Eloquent
 */
class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
}
