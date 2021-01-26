<?php

namespace Minhajul\ExportGmailContacts;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Minhajul\ExportGmailContacts\Commands\ExportGmailContactsCommand;

class ExportGmailContactsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('export-gmail-contacts')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_export_gmail_contacts_table')
            ->hasCommand(ExportGmailContactsCommand::class);
    }
}
