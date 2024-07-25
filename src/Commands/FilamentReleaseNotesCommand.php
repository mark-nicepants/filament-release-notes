<?php

namespace Nicepants\FilamentReleaseNotes\Commands;

use Illuminate\Console\Command;

class FilamentReleaseNotesCommand extends Command
{
    public $signature = 'filament-release-notes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
