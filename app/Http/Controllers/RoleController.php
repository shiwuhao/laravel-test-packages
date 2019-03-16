<?php

namespace App\Http\Controllers;


use App\Permission;
use App\Role;
use App\User;

class RoleController extends Controller
{
    public function index()
    {
//        $role = new Role();
//        $role->name = 'Administrator';
//        $role->display_name = '管理员';
//        $role->save();
//
//        $permission1 = new Permission();
//        $permission1->name = 'post.create1';
//        $permission1->display_name = '文章创建1';
//        $permission1->save();
//
//        $permission2 = new Permission();
//        $permission2->name = 'post.create2';
//        $permission2->display_name = '文章创建2';
//        $permission2->save();

//        $permissions = collect([2]);
//
//        $role = Role::find(20);
//
//        $role->syncPermissions($permissions);

//        return $role;


//        $user = User::find(1);
//        $user->attachRoles(19);

        $user = User::find(1);

        dd($user->hasPermission('post.create|post.edit1', false));
//        dd($user->hasRole('Administrator|guest', true));


        return $user->permissions()->get()->pluck('permissions')->collapse()->pluck('name')->unique();
    }
}
