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
        if($this->subscription_number && substr($this->subscription_number, -5) !== config('services.magazine_subscription')) {
            $roles[] = Roles::ROLE_SUBSCRIBERS;
        }

        return $roles;
    }
}
