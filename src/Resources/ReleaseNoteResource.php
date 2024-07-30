<?php

namespace Nicepants\FilamentReleaseNotes\Resources;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Nicepants\FilamentReleaseNotes\FilamentReleaseNotesPlugin;
use Nicepants\FilamentReleaseNotes\Models\ReleaseNote;
use Nicepants\FilamentReleaseNotes\Resources\ReleaseNoteResource\Pages;

class ReleaseNoteResource extends Resource
{
    public static function getModel(): string
    {
        return FilamentReleaseNotesPlugin::get()->model('ReleaseNote');
    }

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function shouldRegisterNavigation(): bool
    {
        return FilamentReleaseNotesPlugin::get()->getCanManage();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Information')->schema([
                    TextInput::make('created_at')
                        ->formatStateUsing(fn($state) => \Carbon\Carbon::parse($state)->format('Y-m-d H:i:s'))
                        ->default(now()->format('Y-m-d H:i:s')),

                    TextInput::make('version')
                        ->prefix('v')
                        ->default(ReleaseNote::latest()?->version ?? '1.0.0')
                        ->helperText('The version number of the release. Example: "v1.0.0".')
                        ->rules(fn(): \Closure => function ($attribute, $value, $fail) {
                            if (!preg_match('/^\d+\.\d+\.\d+$/', $value)) {
                                $fail('The version must be in the format "vX.Y.Z".');
                            }
                        }),
                ])->columnSpan(1),

                Section::make('Release note markdown')->schema([
                    MarkdownEditor::make('notes')
                        ->label('')
                        ->default('### New Features' . PHP_EOL . PHP_EOL . '- Feature 1' . PHP_EOL . '- Feature 2' . PHP_EOL . PHP_EOL . '### Bugfixes' . PHP_EOL . PHP_EOL . '- Bug fix 1' . PHP_EOL . '- Bug fix 2')
                        ->required(),
                ])->columnSpan(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->datetime()
                    ->timezone(FilamentReleaseNotesPlugin::get()->getTimezone())
                    ->sortable(),

                Tables\Columns\TextColumn::make('version')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('notes')
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()
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
