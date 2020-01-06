<?php

namespace Digifactory\LaravelPushDevelopmentData;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Digifactory\LaravelPushDevelopmentData\Skeleton\SkeletonClass
 */
class LaravelPushDevelopmentDataFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-push-development-data';
    }
}
