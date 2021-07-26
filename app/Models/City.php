<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereVersionName($value)
 *
 * @mixin \Eloquent
 */
class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['state_id', 'name'];
}
