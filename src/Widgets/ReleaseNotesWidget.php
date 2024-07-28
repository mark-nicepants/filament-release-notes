<?php

namespace Nicepants\FilamentReleaseNotes\Widgets;

use Filament\Widgets\Widget;

class ReleaseNotesWidget extends Widget
{
    protected static ?int $sort = -2;

    protected static bool $isLazy = false;

    /**
     * @var view-string
     */
    protected static string $view = 'filament-release-notes::release-notes-widget';
}
