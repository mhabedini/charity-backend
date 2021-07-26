<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CharityDepartment whereVersionName($value)
 *
 * @mixin \Eloquent
 */
class CharityDepartment extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
}
