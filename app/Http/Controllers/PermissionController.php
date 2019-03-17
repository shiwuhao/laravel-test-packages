<?php

namespace App\Http\Controllers;


use App\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $this->authorize();

        $permission = new Permission();
        $permission->name = 'post.create';
        $permission->display_name = '文章创建';
        $permission->save();

        return $permission;
    }
}
