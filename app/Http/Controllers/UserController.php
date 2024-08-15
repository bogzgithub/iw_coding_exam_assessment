<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function index() {
        
        $users = $this->userService->getUsers();

        return view('user/list', [
            'users' => $users,
        ]);
    }
}
