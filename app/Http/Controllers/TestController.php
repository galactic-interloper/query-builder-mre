<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller {
    public function index(Request $request) {
        /**
         * Runs just fine
        */
        $users = User::with('roles')->get();

        /**
         * Throws an ErrorException
         * "Object of class App\Enums\Roles could not be converted to int"
         *
         * Stack trace points to
         * vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php:1164
        */
        $roles = Role::with('users')->get();

        return compact('users', 'roles');
    }


    public function issueB(Request $request) {
        $permissions = Permission::with('role')->get();

        return $permissions;
    }
}
