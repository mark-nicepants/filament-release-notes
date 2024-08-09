@php
    use Filament\Support\Facades\FilamentAsset;use Nicepants\FilamentReleaseNotes\Models\ReleaseNote;use Nicepants\FilamentReleaseNotes\Pages\ViewReleaseNotesPage;
@endphp

@php $latestVersion = ReleaseNote::latest()?->version; @endphp
@php $versions = ReleaseNote::model()->all()->pluck('version')->toArray(); @endphp

@if($latestVersion)
    <div
        x-load-css="[@js(FilamentAsset::getStyleHref('release-notes', package: 'mark-nicepants/filament-release-notes'))]"
        class="filament-release-notes">
        <x-filament::button
            size="xs"
            color="gray"
            id="version-button"
            href="{{ ViewReleaseNotesPage::getUrl() }}"
            tag="a"
        >
            v{{ $latestVersion }}
        </x-filament::button>
    </div>
@endif
