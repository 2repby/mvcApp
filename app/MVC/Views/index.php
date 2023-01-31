<!DOCTYPE html>
<html>
    <head>
        <title>Разработка MVC-фреймворка на PHP</title>
    </head>
    <body>
        <h1>Спискок пользователей:</h1>
        <ul>
    <? foreach ($users as $user): ?>
        <li>
            <?=$user->username?>
        </li>
    <?endforeach; ?>
        </ul>
    </body>
</html>