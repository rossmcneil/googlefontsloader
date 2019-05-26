<?php

namespace RossMcNeil\GoogleFontsLoader\Facades;

use Illuminate\Support\Facades\Facade;

class GoogleFontsLoader extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'googlefontsloader';
    }
}
