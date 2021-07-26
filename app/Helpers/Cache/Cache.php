<?php

namespace App\Helpers\Cache;

use App\Models\SystemLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache as LaravelCache;

abstract class Cache
{


    /**
     * @var string cache will be saved with this key parameter
     */
    private $cacheKey;

    /**
     * @var string cache time to live in milliseconds
     */
    private $ttl;


    public function __construct($cacheKey, $ttl)
    {
        $this->cacheKey = $cacheKey;
        $this->ttl = $ttl;
    }

    /**
     * Generate cache for specified cache with given cache key
     *
     * @return mixed
     */
    abstract public function generate();

    /**
     * Return the cache with given key or generate that cache if there isn't any, then return it
     *
     * @return mixed
     */
    public function get()
    {
        $CacheKeyName = $this->cacheKey;
        if (whenNullOrZero($this->ttl())) {
            return LaravelCache::rememberForever(
                $CacheKeyName,
                function () use ($CacheKeyName) {
                    SystemLog::info('[helpers.Cache.get] ' . $CacheKeyName . ' cache not found. Generating now...');
                    return $this->generate();
                }
            );
        }

        return LaravelCache::remember(
            $CacheKeyName,
            $this->ttl(),
            function () use ($CacheKeyName) {
                SystemLog::info(
                    '[helpers.Cache.get] ' . $CacheKeyName . ' cache not found. Generating now...'
                );
                return $this->generate();
            }
        );
    }

    /**
     * Returns cache time to live.
     *
     * @return \Carbon\Carbon
     */
    public function ttl(): ?Carbon
    {
        $ttl = (int)$this->ttl;
        if ($ttl === 0) {
            return null;
        }

        return Carbon::now()->addMinutes($ttl);
    }


    /**
     * Re-generates cache and store.
     *
     * @return void
     */
    public function reload(): void
    {
        $this->delete();
        if (whenNullOrZero($this->ttl())) {
            LaravelCache::forever($this->cacheKey, $this->generate());
            return;
        }

        LaravelCache::put($this->cacheKey, $this->generate(), $this->ttl());
    }

    /**
     * Deletes cache.
     *
     * @return void
     */
    public function delete(): void
    {
        LaravelCache::forget($this->cacheKey);
    }
}
