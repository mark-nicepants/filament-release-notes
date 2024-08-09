@php
    use Nicepants\FilamentReleaseNotes\Models\ReleaseNote;use Nicepants\FilamentReleaseNotes\Pages\ViewReleaseNotesPage;
@endphp

@php $latestReleaseNote = ReleaseNote::latest(); @endphp

@if($latestReleaseNote !== null)
    <x-filament-widgets::widget class="fi-filament-info-widget">
        <x-filament::section>
            <div class="flex items-center gap-x-3">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        Check out the release notes
                    </h3>

                    <p class="text-xs text-gray-500 dark:text-gray-400">
                        Latest version released {{ $latestReleaseNote->created_at->diffForHumans() }}
                    </p>
                </div>

                <div class="flex flex-col items-end gap-y-1">
                    <x-filament::button
                        color="gray"
                        icon="heroicon-m-sparkles"
                        href="{{ ViewReleaseNotesPage::getUrl() }}"
                        tag="a"
                        class="text-center"
                    >
                    <span class="dark:text-white text-black">
                        v{{ $latestReleaseNote->version }}
                    </span>
                    </x-filament::button>
                </div>
            </div>
        </x-filament::section>
    </x-filament-widgets::widget>
@endif
