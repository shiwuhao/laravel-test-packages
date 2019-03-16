<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Shiwuhao\Rbac\Traits\RoleTrait;

/**
 * App\Role
 *
 * @property int $id
 * @property string $name 角色唯一标识
 * @property string $display_name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    use RoleTrait;
}
