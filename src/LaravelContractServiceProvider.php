<?php

namespace CleaniqueCoders\LaravelContract;

use CleaniqueCoders\LaravelContract\Commands\LaravelContractCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelContractServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-contract')
            ->hasCommand(LaravelContractCommand::class);
    }
}
