<?php

namespace Nicepants\FilamentReleaseNotes\Models;

use Illuminate\Database\Eloquent\Model;
use Nicepants\FilamentReleaseNotes\ReleaseNotesPlugin;

class ReleaseNote extends Model
{
    protected $table = 'release_notes';

    public function getConnectionName(): ?string
    {
        $connection = ReleaseNotesPlugin::get()->connection;
        return $connection ?: parent::getConnectionName();
    }

}
