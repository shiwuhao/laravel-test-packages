<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Shiwuhao\Rbac\Traits\PermissionTrait;

/**
 * App\Permission
 *
 * @property int $id
 * @property int $pid
 * @property string $name 节点唯一标识
 * @property string $display_name 节点显示名称
 * @property string $description 节点描述
 * @property string $action
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permission[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends Model
{
    use PermissionTrait;
}
