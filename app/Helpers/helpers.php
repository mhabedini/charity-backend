<?php

use Carbon\Carbon;

require_once 'constants.php';
require_once 'api.php';

/**
 * if is in local environment
 * @return bool
 */
function isLocal()
{
    return app()->isLocal();
}


/**
 * @return bool true if environment is running in 'local' or 'testing'
 */
function isLocalOrTesting(): bool
{
    return isLocal() || app()->runningUnitTests();
}


/**
 * Generates file name based on MD5 hash of file contents.
 *
 * @param  \Illuminate\Http\UploadedFile  $file
 * @return string
 */
function genFileName($file)
{
    if (!$file) {
        return '';
    }

    return time().md5_file($file->getRealPath());
}

/**
 * Generates file name based on MD5 by time.
 *
 * @return string
 */
function generateFileName()
{
    return time().md5(time());
}

function getFileType($fileType)
{
    return FILE_TYPE[$fileType];
}


/**
 * Converts Georgian date to Jalali date.
 *
 * @param  DateTime  $georgian
 * @param  string  $format
 * @return string
 */
function g2j($georgian, $format = 'EEEE Y/M/d - H:m')
{
    $date = new IntlDateFormatter('fa_IR@calendar=persian', IntlDateFormatter::FULL, IntlDateFormatter::FULL,
        'Asia/Tehran', IntlDateFormatter::TRADITIONAL, $format);
    return $date->format($georgian);
}

/**
 * Converts unix timestamp to Carbon date.
 *
 * @param  int  $unixTime
 * @return Carbon
 */
function unixToCarbon($unixTime)
{
    return Carbon::createFromTimestamp($unixTime);
}

/**
 * Returns cache age for given key.
 *
 * @param  string  $key
 * @return int
 */
function getCacheAge($key)
{
    $parts = array_slice(str_split($hash = sha1($key), 2), 0, 2);
    $path = config('cache.stores.file.path').'/'.implode('/', $parts).'/'.$hash;
    if (file_exists($path)) {
        return filemtime($path);
    }

    return 0;
}


/**
 * ًConverts english numbers to persian numbers.
 *
 * @param  mixed  $englishNumber
 * @return string
 */
function persianNumber($englishNumber)
{
    return str_replace(['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
        ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'], $englishNumber);
}



/**
 * Returns difference of two numbers in percents.
 *
 * @param  int|float  $a
 * @param  int|float  $b
 * @return float
 */
function diffPercent($a, $b)
{
    return ($a - $b) / $a * 100;
}

/**
 * @param $value mixed check if value is null or empty
 * @return bool
 */
function isNullOrEmpty($value)
{
    return is_null($value) || empty($value);
}

/**
 * @param $value mixed check if value is null or blank
 * @return bool
 */
function isNullOrBlank($value)
{
    return is_null($value) || blank($value);
}

/**
 * @param $value mixed check if value is null or zero
 * @return bool
 */
function whenNullOrZero($value)
{
    return is_null($value) || $value === 0;
}


/**
 * @param $prefix
 * @param $path
 * @return string
 */
function generateUrlForFile($prefix, $path)
{
    if (isNullOrEmpty($path)) {
        return null;
    }
    return Storage::disk('public')->url($prefix.'/'.$path);
}

/**
 * @param  \Illuminate\Http\Request  $request
 * @param  mixed  ...$values
 * @return bool
 */
function hasHeader(\Illuminate\Http\Request $request, ...$values)
{
    foreach ($values as $value) {
        if (!$request->headers->has($value)) {
            return false;
        }
    }
    return true;
}
