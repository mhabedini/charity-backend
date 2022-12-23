<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Household
 *
 * @property-read int $id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Household whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $user_id
 * @property string|null $description
 * @property int|null $charity_department_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read int|null $families_count
 * @method static \Illuminate\Database\Query\Builder|Household onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Household whereCharityDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Household whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Household whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Household whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Household withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Household withoutTrashed()
 * @property string|null $housing_situation
 * @property string|null $supervisor_status
 * @property-read \App\Models\CharityDepartment|null $charityDepartment
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Family[] $families
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Household whereHousingSituation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Household whereSupervisorStatus($value)
 */
class Household extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attachments()
    {
        return $this->hasMany(HouseholdAttachment::class);
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
