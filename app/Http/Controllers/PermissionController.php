<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PermissionService;

class PermissionController extends Controller
{
    private $permissionService;

    public function __construct(PermissionService $permissionService) {
        $this->permissionService = $permissionService;
    }

    public function index() {

        $permissions = $this->permissionService->getPermissions();

        return view('permission/list', [
            'permissions' => $permissions,
        ]);
    }
}
