<x-filament-widgets::widget class="fi-filament-info-widget">
    <x-filament::section>
        <div class="flex items-center gap-x-3">
            <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    New version released
                </h3>

                <p class="text-xs text-gray-500 dark:text-gray-400">
                    4 days ago
                </p>
            </div>

            <div class="flex flex-col items-end gap-y-1">
                <x-filament::button color="gray">
                    <span class="text-lg dark:text-white text-black">
                        v1.0.1
                    </span>
                    <br/>
                    <span class="text-xs text-gray-500 dark:text-gray-400">
                    View release notes
                    </span>
                </x-filament::button>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
