<?php

namespace App\Services;

use App\Models\User;

class UserService {

    public function getUsers() {
        $users = User::with('roles')
            ->get()
            ->toArray();

        return $users;
    }
}