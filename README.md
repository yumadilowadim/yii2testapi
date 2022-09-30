<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 TEST API</h1>
    <br>
</p>

Тестовое Rest API с фильтрацией, сортировкой и авторизацией по ключу.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)

- [x] API
- [x] Widgets
- [x] Migrations
- [x] Console Apps `commands/readme.txt`
- [ ] Tests
- [ ] Queue
- [ ] Schedule

Проектные директории
-------------------

      modules/api             модуль api
      migrations/             директории с миграциями



Установка
------------

### Git clone

~~~
https://github.com/yumadilowadim/yii2testapi.git
~~~

### Composer

~~~
composer install
~~~

После установки зависимостей необходимо настроить подключение к БД. 
Файл конфигурации находится по пути `config/db.php`

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=testapi',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
];
```

После настройки подключения к БД, необходимо запустить миграции. Будет создана таблица и 25 тестовых записей.

~~~
yii migrate
~~~

Путь по умолчанию

~~~
http://test.local/web/
~~~

Доступ к API (с тестовым ключом авторизации):

~~~
http://test.local/web/api/cars?access-token=RbN_098uIu_po00NXZz
~~~
