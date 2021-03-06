<?php

namespace App\Events\User;


use Spatie\Permission\Models\Role;

class RoleDeleted
{
    private $role;

    /**
     * RoleDeleted constructor.
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function getName()
    {
        return $this->role->name;
    }
}