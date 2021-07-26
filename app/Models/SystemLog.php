<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SystemLog
 *
 * @property int $id
 * @property string $level
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemLog whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemLog whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SystemLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SystemLog extends Model
{
    public const LEVEL_FATAL = 'FATAL';
    public const LEVEL_ERROR = 'ERROR';
    public const LEVEL_WARNING = 'WARNING';
    public const LEVEL_DEBUG = 'DEBUG';
    public const LEVEL_INFO = 'INFO';
    public const LEVEL_SUCCESS = 'SUCCESS';
    /**
     * Mass assignables.
     *
     * @var array
     */
    protected $fillable = ['level', 'message'];

    public static function fatal($message)
    {
        self::log(self::LEVEL_FATAL, $message);
    }

    public static function log($level, $message)
    {
        SystemLog::create(['level' => $level, 'message' => $message]);
    }

    public static function error($message)
    {
        self::log(self::LEVEL_ERROR, $message);
    }

    public static function warning($message)
    {
        self::log(self::LEVEL_WARNING, $message);
    }

    public static function debug($message)
    {
        self::log(self::LEVEL_DEBUG, $message);
    }

    public static function info($message)
    {
        self::log(self::LEVEL_INFO, $message);
    }

    public static function success($message)
    {
        self::log(self::LEVEL_SUCCESS, $message);
    }
}
