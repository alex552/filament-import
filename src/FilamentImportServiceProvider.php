<?php

namespace Konnco\FilamentImport;

use Filament\FilamentServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentImportServiceProvider extends FilamentServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-import')
            ->hasConfigFile()
            ->hasTranslations();
    }
}
