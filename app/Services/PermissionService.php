<?php

namespace App\Services;

use Spatie\Permission\Models\Permission;

class PermissionService {

    public function getPermissions() {
        $permissions = Permission::all();

        return $permissions;
    }
}