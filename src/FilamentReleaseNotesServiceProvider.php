<?php

namespace Nicepants\FilamentReleaseNotes;

use Nicepants\FilamentReleaseNotes\Commands\FilamentReleaseNotesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentReleaseNotesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-release-notes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_release_notes_table')
            ->hasCommand(FilamentReleaseNotesCommand::class);
    }
}
