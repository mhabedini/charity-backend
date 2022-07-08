<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\State
 *
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
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Query\Builder|State onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Query\Builder|State withTrashed()
 * @method static \Illuminate\Database\Query\Builder|State withoutTrashed()
 */
class State extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['country_id', 'name'];
}
