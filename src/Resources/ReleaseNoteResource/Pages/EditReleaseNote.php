<?php

namespace Nicepants\FilamentReleaseNotes\Resources\ReleaseNoteResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Nicepants\FilamentReleaseNotes\Resources\ReleaseNoteResource;

class EditReleaseNote extends EditRecord
{
    protected static string $resource = ReleaseNoteResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
