<?php

namespace Dgironella\GoogleTranslate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dgironella\GoogleTranslate\GoogleTranslate
 */
class GoogleTranslateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-google-translate';
    }
}
