<?php

namespace Nicepants\FilamentReleaseNotes\Resources\ReleaseNoteResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Nicepants\FilamentReleaseNotes\Resources\ReleaseNoteResource;

class ListReleaseNotes extends ListRecords
{
    protected static string $resource = ReleaseNoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
