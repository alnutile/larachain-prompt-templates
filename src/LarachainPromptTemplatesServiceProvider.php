<?php

namespace Sundance\LarachainPromptTemplates;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sundance\LarachainPromptTemplates\Commands\LarachainPromptTemplatesCommand;

class LarachainPromptTemplatesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larachain-prompt-templates')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larachain-prompt-templates_table')
            ->hasCommand(LarachainPromptTemplatesCommand::class);
    }
}
