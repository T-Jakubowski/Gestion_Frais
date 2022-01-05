<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function show(){
        $roles = Role::All();
        return view('Role', ['roles' => $roles]);
    }
}