<?php

namespace Epmnzava\Blog;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\Blog\Skeleton\SkeletonClass
 */
class BlogFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'blog';
    }
}
