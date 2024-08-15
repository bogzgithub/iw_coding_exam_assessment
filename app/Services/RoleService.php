<?php

namespace App\Services;

use Spatie\Permission\Models\Role;

class RoleService {

    public function getRoles() {
        $roles = Role::all();

        return $roles;
    }
}