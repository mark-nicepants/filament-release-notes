<?php

return [
    'models' => [
        'ReleaseNote' => \Nicepants\FilamentReleaseNotes\Models\ReleaseNote::class,
    ],
    'resources' => [
        'ReleaseNoteResource' => \Nicepants\FilamentReleaseNotes\Resources\ReleaseNoteResource::class,
    ],

    'can_manage' => true,
];
