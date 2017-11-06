# Bonnier Role Provider

- `composer require bonnier/role-provider`
- The user model should use the `HasBonnierRoles` instead of Spatie's `HasRoles`

```php
<?php

namespace App;

use Bonnier\RoleProvider\Traits\HasBonnierRoles;

class User
{
    use HasBonnierRoles;
    ...
```