
## Crear usuario

> php artisan tinker

```php
$user = new App\Models\User();
$user->password = Hash::make('abc123');
$user->email = 'admin@correo.com';
$user->name = 'admin';
$user->save();
```
