<?php

namespace Nicepants\FilamentReleaseNotes;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Concerns\EvaluatesClosures;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Nicepants\FilamentReleaseNotes\Widgets\ReleaseNotesWidget;

class ReleaseNotesPlugin implements Plugin
{
    use EvaluatesClosures;

    /**
     * @var bool|\Closure
     */
    public mixed $canManage = true;

    /**
     * @var array<string, class-string>
     */
    protected array $models = [];

    /**
     * @var array<string, class-string>
     */
    protected array $resources = [];

    public static function make(): static
    {
        $instance = new static;

        $config = config('filament-release-notes');

        $instance->canManage($config['can_manage']);
        $instance->overrideModels($config['models']);
        $instance->overrideResources($config['resources']);

        return $instance;
    }

    public static function get(): static
    {
        return filament(FilamentReleaseNotesServiceProvider::$name);
    }

    public function getId(): string
    {
        return FilamentReleaseNotesServiceProvider::$name;
    }

    public function register(Panel $panel): void
    {
        $panel
            ->widgets([ReleaseNotesWidget::make()])
            ->resources($this->resources);
    }

    public function boot(Panel $panel): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::GLOBAL_SEARCH_BEFORE,
            fn (): View => view('filament-release-notes::version-badge'),
        );
    }

    public function canManage(bool | \Closure $condition = true): static
    {
        $this->canManage = $condition;

        return $this;
    }

    public function getCanManage(): bool
    {
        return (bool) $this->evaluate($this->canManage);
    }

    /**
     * @param  array<string,class-string|null>  $overrides
     */
    public function overrideResources(array $overrides): self
    {
        $resources = array_merge($this->resources, $overrides);
        $this->resources = Arr::whereNotNull($resources);

        return $this;
    }

    /**
     * @param  array<string,class-string>  $overrides
     */
    public function overrideModels(array $overrides): self
    {
        $models = array_merge($this->models, $overrides);
        $this->models = Arr::whereNotNull($models);

        return $this;
    }

    public function getModel(string $model): string
    {
        return $this->models[$model];
    }
}
