<?php

namespace Nicepants\FilamentReleaseNotes\Policies;

use Nicepants\FilamentReleaseNotes\ReleaseNotesPlugin;

class ReleaseNotePolicy
{
    public function viewAny(): bool
    {
        return ReleaseNotesPlugin::get()->getCanManage();
    }
}
