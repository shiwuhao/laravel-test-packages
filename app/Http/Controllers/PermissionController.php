<?php

namespace App\Http\Controllers;


class PermissionController extends Controller
{
    public function index()
    {
        $permission = new Permission();
        $permission->name = 'post.create';
        $permission->display_name = '文章创建';
        $permission->save();

        return $permission;
    }
}
