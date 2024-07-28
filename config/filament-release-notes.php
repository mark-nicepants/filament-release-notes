<?php

use Nicepants\FilamentReleaseNotes\Models\ReleaseNote;
use Nicepants\FilamentReleaseNotes\Policies\ReleaseNotePolicy;
use Nicepants\FilamentReleaseNotes\Resources\ReleaseNoteResource;

return [
    'models' => [
        'ReleaseNote' => ReleaseNote::class,
    ],
    'policies' => [
        'ReleaseNote' => ReleaseNotePolicy::class,
    ],
    'resources' => [
        'ReleaseNoteResource' => ReleaseNoteResource::class,
    ],
    'can_manage' => true,
];
