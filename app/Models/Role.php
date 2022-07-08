<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Role
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereVersionName($value)
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereTitle($value)
 */
class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug'
    ];
}
