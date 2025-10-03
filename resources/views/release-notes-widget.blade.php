@php
    use Nicepants\FilamentReleaseNotes\Models\ReleaseNote;
    use Nicepants\FilamentReleaseNotes\Pages\ViewReleaseNotesPage;
@endphp

@php $latestReleaseNote = ReleaseNote::latest(); @endphp

<x-filament-widgets::widget class="fi-filament-info-widget" :style="$latestReleaseNote === null ? 'display: none;' : ''">
    @if($latestReleaseNote !== null)
        <x-filament::section>
            <div style="flex: 1 1 0%;">
                <h2 class="fi-account-widget-heading">
                    Check out the release notes
                </h2>

                <p class="fi-account-widget-user-name">
                    Latest version released {{ $latestReleaseNote->created_at->diffForHumans() }}
                </p>
            </div>

            <div>
                <x-filament::button
                    color="gray"
                    icon="heroicon-m-sparkles"
                    href="{{ ViewReleaseNotesPage::getUrl() }}"
                    tag="a"
                >
                    v{{ $latestReleaseNote->version }}
                </x-filament::button>
            </div>
        </x-filament::section>
    @endif
</x-filament-widgets::widget>
