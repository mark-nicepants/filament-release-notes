@php
    use Filament\Support\Facades\FilamentAsset;use Nicepants\FilamentReleaseNotes\Models\ReleaseNote;
@endphp

@php $latestVersion = ReleaseNote::latest()?->version; @endphp

@if($latestVersion)
    <div
        x-load-css="[@js(FilamentAsset::getStyleHref('release-notes', package: 'mark-nicepants/filament-release-notes'))]"
        class="filament-release-notes">
        <x-filament::button size="xs" color="gray">
            {{ $latestVersion }}
        </x-filament::button>
    </div>
@endif
