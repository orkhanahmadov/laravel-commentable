<?php

namespace Orkhanahmadov\LaravelCommentable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Orkhanahmadov\LaravelCommentable\Skeleton\SkeletonClass
 */
class LaravelCommentableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-commentable';
    }
}
