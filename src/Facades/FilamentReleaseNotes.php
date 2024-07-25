<?php

namespace Nicepants\FilamentReleaseNotes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nicepants\FilamentReleaseNotes\FilamentReleaseNotes
 */
class FilamentReleaseNotes extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Nicepants\FilamentReleaseNotes\FilamentReleaseNotes::class;
    }
}
