<?php

declare(strict_types=1);

/*
 * This file is part of kodekeep/laravel-package-development.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\PackageDevelopment\Concerns;

trait PublishesMigrations
{
    protected function publishMigrations(array $migrations): void
    {
        $migrations = collect($migrations)->mapWithKeys(function ($migration) {
            return [
                __DIR__.'/../../database/migrations/'.$migration.'.stub' => $this->getMigrationPath($migration),
            ];
        });

        $this->publishes($migrations->toArray(), 'migrations');
    }

    protected function getMigrationPath(string $file): string
    {
        $timestamp = date('Y_m_d_His');

        return $this->app->databasePath("/migrations/{$timestamp}_{$file}.php");
    }
}
