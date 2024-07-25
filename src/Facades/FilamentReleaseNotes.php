<?php

namespace Mark Mooibroek\FilamentReleaseNotes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mark Mooibroek\FilamentReleaseNotes\FilamentReleaseNotes
 */
class FilamentReleaseNotes extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Mark Mooibroek\FilamentReleaseNotes\FilamentReleaseNotes::class;
    }
}
