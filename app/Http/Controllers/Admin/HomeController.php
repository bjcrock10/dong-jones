<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;
use App\Admin;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = collect();
        $data->usersCount      = User::count();
        $data->adminCount      = Admin::count();
        $data->roleCount       = Role::count();
        $data->permissionCount = Permission::count();

        $data->roles = Role::all();
        $data->permissions = Permission::all();
        return view('admin.home', compact('data'));
    }
}
