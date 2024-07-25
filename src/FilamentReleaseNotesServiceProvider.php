<?php

namespace Mark Mooibroek\FilamentReleaseNotes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mark Mooibroek\FilamentReleaseNotes\Commands\FilamentReleaseNotesCommand;

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
