<?php
namespace Extensions\Ian\Changelog;

use Spatie\Permission\Models\Permission;

class InstallController {
    public function install(): void {
        \Artisan::call("migrate --path=extensions/ian/changelog/Database/Migrations");
    }

    public function uninstall(): void {
        \Artisan::call("migrate:rollback --path=extensions/ian/changelog/Database/Migrations");

    }
}
