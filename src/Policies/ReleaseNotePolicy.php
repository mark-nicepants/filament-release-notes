<?php

namespace Nicepants\FilamentReleaseNotes\Policies;

use Nicepants\FilamentReleaseNotes\FilamentReleaseNotesPlugin;

class ReleaseNotePolicy
{
    public function viewAny(): bool
    {
        return FilamentReleaseNotesPlugin::get()->getCanManage();
    }
}
