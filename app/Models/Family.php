<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property-read int $id
 *
 * @property-read User $user
 * @property-read User $household
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Family whereVersionName($value)
 *
 * @mixin \Eloquent
 */
class Family extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'household_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function household()
    {
        return $this->belongsTo(Household::class);
    }
}
