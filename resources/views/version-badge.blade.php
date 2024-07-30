@php
    use Filament\Support\Facades\FilamentAsset;use Nicepants\FilamentReleaseNotes\Models\ReleaseNote;use Nicepants\FilamentReleaseNotes\Pages\ViewReleaseNotesPage;
@endphp

@php $latestVersion = ReleaseNote::latest()?->version; @endphp
@php $versions = ReleaseNote::model()->all()->pluck('version')->toArray(); @endphp

{{--<script type="module">--}}

{{--const unseenVersions = @json($versions)--}}
{{--    .map(version => {--}}
{{--        return localStorage.getItem(`filament-release-notes-${version}`) ?? false;--}}
{{--    })--}}
{{--    .filter(version => !version).length;--}}

{{--// noinspection CssUnresolvedCustomProperty--}}
{{--const html = `--}}
{{--    <div class="fi-btn-badge-ctn absolute start-full top-0 z-[1] w-max -translate-x-1/2 -translate-y-1/2 rounded-md bg-white dark:bg-gray-900 rtl:translate-x-1/2">--}}
{{--        <span style="--c-50:var(--primary-50);--c-400:var(--primary-400);--c-600:var(--primary-600);" class="fi-badge flex items-center justify-center gap-x-1 rounded-md text-xs font-medium ring-1 ring-inset px-0.5 min-w-[theme(spacing.4)] tracking-tighter fi-color-custom bg-custom-50 text-custom-600 ring-custom-600/10 dark:bg-custom-400/10 dark:text-custom-400 dark:ring-custom-400/30 fi-color-primary">--}}
{{--            <span class="grid">--}}
{{--                <span class="truncate">${unseenVersions}</span>--}}
{{--            </span>--}}
{{--        </span>--}}
{{--    </div>`;--}}

{{--// append html to id="version-button" (within the button)--}}
{{--document.getElementById('version-button').insertAdjacentHTML('beforeend', html);--}}

{{--</script>--}}

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
