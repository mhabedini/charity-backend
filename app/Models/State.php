<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereVersionName($value)
 *
 * @mixin \Eloquent
 */
class State extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['country_id', 'name'];
}
