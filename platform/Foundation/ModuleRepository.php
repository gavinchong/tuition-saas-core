<?php

declare(strict_types=1);

namespace Platform\Foundation;

use Illuminate\Support\Facades\File;

class ModuleRepository
{
    public function all(): array
    {
        $modulesPath = base_path('modules');

        $directories = File::directories($modulesPath);

        $modules = [];

        foreach ($directories as $dir) {

            $manifestPath = $dir . '/module.json';

            if (!File::exists($manifestPath)) {
                continue;
            }

            $manifest = json_decode(File::get($manifestPath), true);

            $modules[] = new Module(
                name: $manifest['name'],
                path: $dir,
                manifest: $manifest
            );
        }

        return $modules;
    }
}
