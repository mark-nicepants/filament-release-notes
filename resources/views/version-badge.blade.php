@php use Filament\Support\Facades\FilamentAsset; @endphp

<div
    x-load-css="[@js(FilamentAsset::getStyleHref('release-notes', package: 'mark-nicepants/filament-release-notes'))]"
    class="filament-release-notes">
    <x-filament::button size="xs" color="gray">
        v1.0.1
    </x-filament::button>
</div>
