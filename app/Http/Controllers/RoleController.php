<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RoleService;

class RoleController extends Controller
{
    private $roleService;

    public function __construct(RoleService $roleService) {
        $this->roleService = $roleService;
    }

    public function index() {

        $roles = $this->roleService->getRoles();

        return view('role/list', [
            'roles' => $roles,
        ]);
    }
}
