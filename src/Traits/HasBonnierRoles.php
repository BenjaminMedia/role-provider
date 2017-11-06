<?php


namespace Bonnier\RoleProvider\Traits;


use Spatie\Permission\Traits\HasRoles;

trait HasBonnierRoles
{
    use HasRoles;

    public function getBonnierRoles()
    {
        $roles = ['users'];
        if($this->subscription_number) {
            $roles[] = 'subscribers';
        }

        return $roles;
    }
}