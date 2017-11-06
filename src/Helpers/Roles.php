<?php

namespace Bonnier\RoleProvider\Helpers;

class Roles
{
    const ROLE_USERS = 'users';
    const ROLE_SUBSCRIBERS = 'subscribers';

    const ROLE_NAMES = [
        self::ROLE_USERS => [
            'da' => 'Brugere',
            'sv' => 'Users',
            'nb' => 'Users',
            'fi' => 'Users',
            'nl' => 'Users'
        ],
        self::ROLE_SUBSCRIBERS => [
            'da' => 'Abonnenter',
            'sv' => 'Subscribers',
            'nb' => 'Subscribers',
            'fi' => 'Subscribers',
            'nl' => 'Subscribers'
        ],
    ];

    /**
     * @return array
     */
    public static function getAll()
    {
        return [
            static::ROLE_USERS,
            static::ROLE_SUBSCRIBERS,
        ];
    }

    /**
     * Get the translated name of a role,
     * based on the locale given here.
     *
     * @param string $role
     * @param string $locale
     * @return string|null
     */
    public static function getName($role, $locale)
    {
        if(!key_exists($role, static::ROLE_NAMES)) {
            return null;
        }

        return static::ROLE_NAMES[$role][$locale];
    }
}
