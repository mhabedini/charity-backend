<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserRole
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereDeepLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereDeepLinkPackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereIsForced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereIsSpecific($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole wherePlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereVersionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserRole whereVersionName($value)
 * @mixin \Eloquent
 * @property int $id
 * @property int $role_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserRole whereUserId($value)
 */
class UserRole extends Model
{
    use HasFactory;

    protected $table = 'user_role';

    protected $fillable = [
        'user_id',
        'role_id'
    ];
}
