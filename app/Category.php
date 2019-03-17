<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Shiwuhao\Rbac\Traits\ModelPermissionTrait;

class Category extends Model
{
    use ModelPermissionTrait;
}
