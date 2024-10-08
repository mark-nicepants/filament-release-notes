<?php

namespace Nicepants\FilamentReleaseNotes\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nicepants\FilamentReleaseNotes\FilamentReleaseNotesServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nicepants\\FilamentReleaseNotes\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentReleaseNotesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-release-notes_table.php.stub';
        $migration->up();
        */
    }
}
