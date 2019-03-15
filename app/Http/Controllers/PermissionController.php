<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shiwuhao\Rbac\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        echo Permission::class;
    }
}
