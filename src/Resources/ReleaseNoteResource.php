<?php

namespace Nicepants\FilamentReleaseNotes\Resources;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Nicepants\FilamentReleaseNotes\Models\ReleaseNote;
use Nicepants\FilamentReleaseNotes\ReleaseNotesPlugin;
use Nicepants\FilamentReleaseNotes\Resources\ReleaseNoteResource\Pages;

class ReleaseNoteResource extends Resource
{
    protected static ?string $model = ReleaseNote::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function shouldRegisterNavigation(): bool
    {
        return ReleaseNotesPlugin::get()->getCanManage();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

            ])
            ->filters([
                //
            ])
            ->actions([

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReleaseNotes::route('/'),
            'create' => Pages\CreateReleaseNote::route('/create'),
            'edit' => Pages\EditReleaseNote::route('/{record}/edit'),
        ];
    }
}
