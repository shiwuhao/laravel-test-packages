<?php

namespace App\Http\Controllers;


use App\Category;
use App\Permission;
use App\Role;
use App\User;

class RoleController extends Controller
{
    public function index()
    {
        factory(User::class, 2)->create();
        $user1 = User::find(1);
        $user2 = User::find(2);

        $cateory1 = new Category();
        $cateory1->name = '分类1';
        $cateory1->save();

        $cateory2 = new Category();
        $cateory2->name = '分类2';
        $cateory2->save();

        $role1 = new Role();
        $role1->name = 'Administrator';
        $role1->display_name = '管理员';
        $role1->save();

        $role2 = new Role();
        $role2->name = 'Editor';
        $role2->display_name = '编辑员';
        $role2->save();

        $permission1 = new Permission();
        $permission1->name = 'post.index';
        $permission1->display_name = '文章记录';
        $permission1->save();

        $permission2 = new Permission();
        $permission2->name = 'post.create';
        $permission2->display_name = '文章创建';
        $permission2->save();

        $role1->attachPermissions([$permission1->id, $permission2->id]);
        $role2->attachPermissions($permission1);

        $role1->attachPermissionModels(Category::class, [$cateory1->id, $cateory2->id]);
        $role2->attachPermissionModels(Category::class, $cateory1);

        $user1->attachRoles([$role1->id, $role2->id]);
        $user2->attachRoles($role2);

        dump('user1:hasPermission:post.index', $user1->hasPermission('post.index'));
        dump('user2:hasPermission:post.create', $user1->hasPermission('post.create'));

        dump('user1:hasRole:Administrator', $user1->hasRole('Administrator'));
        dump('user2:hasRole:Administrator', $user2->hasRole('Administrator'));

        dump("user1:hasPermissionModel:{$cateory1->id}", $user1->hasPermissionModel(Category::class, $cateory1->id));
        dump("user2:hasPermissionModel:{$cateory2->id}", $user1->hasPermissionModel(Category::class, $cateory2->id));
    }
}
