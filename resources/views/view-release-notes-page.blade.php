@php use Carbon\Carbon;use Filament\Support\Facades\FilamentAsset;use Filament\Support\Markdown; @endphp

<x-filament-panels::page>

    <div
        x-load-css="[@js(FilamentAsset::getStyleHref('release-notes', package: 'mark-nicepants/filament-release-notes'))]">

        @foreach($notes as $version)
            <x-filament::section class="mb-4">
                <x-slot name="heading">
                    <!-- Create flex container for the section heading -->
                    <div class="flex items-center justify-between">
                        <!-- Add the section heading to the left of the flex container -->
                        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">
                            v{{ $version["version"] }}
                        </h2>
                        <!-- Add the date of the release, to the right of the section heading -->
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            Released {{ Carbon::parse($version["created_at"])->format('F j, Y') }}
                        </p>
                    </div>
                </x-slot>


                <div class="prose dark:prose-invert">
                    {{ Markdown::block($version["notes"]) }}
                </div>

            </x-filament::section>
        @endforeach

        <x-filament::pagination :paginator="$notes"/>

    </div>
</x-filament-panels::page>
