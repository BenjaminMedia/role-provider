<?php

namespace Bonnier\RoleProvider\Traits;

use Bonnier\RoleProvider\Helpers\Roles;
use Spatie\Permission\Traits\HasRoles;

trait HasBonnierRoles
{
    use HasRoles;

    /**
     * @return array
     */
    public function getBonnierRoles()
    {
        $roles = [Roles::ROLE_USERS];
        if($this->subscription_number) {
            $roles[] = Roles::ROLE_SUBSCRIBERS;
        }

        return $roles;
    }
}
