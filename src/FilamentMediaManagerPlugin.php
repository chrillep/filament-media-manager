<?php

namespace TomatoPHP\FilamentMediaManager;

use Filament\Contracts\Plugin;
use Filament\Panel;
use TomatoPHP\FilamentArtisan\Pages\Artisan;
use TomatoPHP\FilamentMediaManager\Pages\FoldersPage;
use TomatoPHP\FilamentMediaManager\Resources\FolderResource;
use TomatoPHP\FilamentMediaManager\Resources\MediaResource;


class FilamentMediaManagerPlugin implements Plugin
{
    public ?bool $allowSubFolders = false;

    public function getId(): string
    {
        return 'filament-media-manager';
    }

    public function allowSubFolders(bool $condation = true): static
    {
        $this->allowSubFolders = $condation;
        return $this;
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            FolderResource::class,
            MediaResource::class
        ]);

    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}
