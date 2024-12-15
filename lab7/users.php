<?php
declare(strict_types=1);

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

spl_autoload_register(function ($class): void {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file))
        require $file;
});

// HTML-заголовок и стили
echo "<!DOCTYPE html>
<html lang='ru'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>User Info</title>
    
</head>
<body>";

$user1 = new User("Ника", "hika57", "password_one");
$user2 = new User("Аня", "ahya88", "password_two");
$user3 = new User("Соня", "sonya790", "password_three");

echo $user1->showInfo();
echo $user2->showInfo();
echo $user3->showInfo();

$user = new SuperUser("Admin", "mega_admin", "password_four", "administrator");
echo $user->showInfo();

unset($user1);
unset($user2);
unset($user3);
unset($user);

echo "</body></html>";