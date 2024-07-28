<?php

namespace Nicepants\FilamentReleaseNotes;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\Facades\Gate;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentReleaseNotesServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-release-notes';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_release_notes_table');
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('release-notes', __DIR__ . '/../resources/dist/release-notes.css')->loadedOnRequest(),
        ], 'mark-nicepants/filament-release-notes');
    }
}
