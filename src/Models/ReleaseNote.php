<?php

namespace Nicepants\FilamentReleaseNotes\Models;

use Illuminate\Database\Eloquent\Model;
use Nicepants\FilamentReleaseNotes\FilamentReleaseNotesPlugin;

class ReleaseNote extends Model
{
    protected $table = 'release_notes';

    public static function model(): Model
    {
        $class = FilamentReleaseNotesPlugin::get()->model('ReleaseNote');

        return new $class;
    }

    public static function latest(): ?Model
    {
        return static::model()->query()->latest()->first();
    }

    public function getConnectionName(): ?string
    {
        $connection = FilamentReleaseNotesPlugin::get()->connection;

        return $connection ?: parent::getConnectionName();
    }
}
