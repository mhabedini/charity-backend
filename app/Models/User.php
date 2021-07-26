<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/**
 * @property-read int $id
 *
 * @property-read Role[] $roles
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereVersionName($value)
 *
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'gender',
        'is_sadat',
        'national_code',
        'birth_date',
        'phone',
        'mobile',
        'marital_status',
        'job',
        'citizenship',
        'representative',
        'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth_date' => 'date',
        'marital_status' => 'boolean',
        'active' => 'boolean',
        'is_sadat' => 'boolean'
    ];

    public function hasRoles(array $role): bool
    {
        return $this->roles()->whereIn('slug', $role)->count();
    }

    public function isAdmin(): bool
    {
        return $this->roles()->where('slug', 'admin')->count();
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    public function createApiToken(): string
    {
        return $this->createToken(config('app.name'))->accessToken;
    }
}
