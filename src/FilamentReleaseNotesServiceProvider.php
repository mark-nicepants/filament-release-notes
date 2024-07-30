<?php

namespace Nicepants\FilamentReleaseNotes;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
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
            ->hasRoute('web')
            ->hasMigration('create_filament_release_notes_table');
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('release-notes', __DIR__ . '/../resources/dist/release-notes.css')->loadedOnRequest(),
            Js::make('release-notes', __DIR__ . '/../resources/dist/release-notes.js')->module()->defer(),
        ], 'mark-nicepants/filament-release-notes');
    }
}
