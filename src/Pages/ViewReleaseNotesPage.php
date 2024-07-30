<?php

namespace Nicepants\FilamentReleaseNotes\Pages;

use Filament\Pages\Page;
use Nicepants\FilamentReleaseNotes\Models\ReleaseNote;

class ViewReleaseNotesPage extends Page
{
    protected static string $view = 'filament-release-notes::view-release-notes-page';

    protected static ?string $title = 'Release Notes';

    protected static bool $shouldRegisterNavigation = false;

    protected function getViewData(): array
    {
        return ['notes' => ReleaseNote::model()
            ->query()
            ->latest()
            ->paginate(),
        ];
    }
}
