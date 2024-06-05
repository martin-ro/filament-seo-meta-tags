<?php

namespace MartinRo\FilamentSeoMetaTags;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentSeoMetaTagsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-seo-meta-tags';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasMigration('create_seo_meta_tags_table')
            ->runsMigrations()
            ->hasConfigFile()
            ->hasCommands([
                Commands\PublishMiddleware::class,
            ]);
    }
}
