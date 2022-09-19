<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 TEST API</h1>
    <br>
</p>

Тестовое Rest API с фильтрацией, сортировкой и авторизацией по ключу.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)

Проектные директории
-------------------

      modules/api             модуль api
      migrations/             директории с миграциями


PHP
------------

PHP >= 5.6.0.


Установка
------------

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

После настройки подключения к БД, необходимо запустить миграции. Будет создано 25 тестовых записей в БД.

~~~
yii migrate
~~~

Путь по умолчанию

~~~
http://test.local/web/
~~~