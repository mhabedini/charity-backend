<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property-read int $id
 *
 ** @property-read User $user
 ** @property-read CharityDepartment $charityDepartment
 ** @property-read Family[] $families
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Household extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function charityDepartment()
    {
        return $this->belongsTo(CharityDepartment::class);
    }

    public function families()
    {
        return $this->hasMany(Family::class);
    }
}
