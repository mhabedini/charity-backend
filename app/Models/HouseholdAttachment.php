<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\HouseholdAttachment
 *
 * @property int $id
 * @property int $household_id
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HouseholdAttachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HouseholdAttachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HouseholdAttachment query()
 * @method static \Illuminate\Database\Eloquent\Builder|HouseholdAttachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HouseholdAttachment whereHouseholdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HouseholdAttachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HouseholdAttachment wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HouseholdAttachment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class HouseholdAttachment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function path(): Attribute
    {
        return Attribute::get(fn($value, $attributes) => config('app.url').'/storage/'.$value);
    }
}
