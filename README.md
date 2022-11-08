
## Crear usuario

> php artisan tinker

```php
$user = new App\Models\User();
$user->password = Hash::make('the-password-of-choice');
$user->email = 'the-email@example.com';
$user->name = 'My Name';
$user->save();
```
