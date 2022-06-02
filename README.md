1.环境

* [php 8.16](https://www.php.net/)
* [composer 2.3.6](https://getcomposer.org/)
* [Laravel](http://laravel.p2hp.com/)

2.安装参考

* [Laravel 怎么安装](https://www.php.cn/phpkj/laravel/482104.html)
* [Laravel-Backpack Demo - issues reuire backpack pro](https://github.com/Laravel-Backpack/demo/issues/383)

3.文档

* [Laravel docs](https://laravel.com/docs/9.x/eloquent-relationships)
* [Bluprint docs](https://blueprint.laravelshift.com/docs/model-relationships/)
* [Backpack docs](https://backpackforlaravel.com/docs/4.0/installation)

4.如何创建一个backpack的laravel项目

4.1 Create a Laravel project and add backpack/crud dependence

```powershell
laravel new yourprojectname
cd yourprojectname
composer require backpack/crud
```

4.2 modify .env file with your database config

4.3 testing 

```php
php artisan backpack:install
```

it will generate some basic table and a admin dashboard page 

```php
-- 启动服务 查看是否生成正常
php artisan serve
```



4.4 add blueprint dependence

```
-- 模型生成工具
composer require --dev laravel-shift/blueprint
```

4.5 add backpack/generators dependence

```php
-- crud cli生成工具
composer require --dev backpack/generators
```

4.6 init git project 

```pow
git init
git add .
git commit -m 'init project'
```

its worth to do it , you can have a clean and working project with rollback this project in anytime 

4.7 add draft.yml

this file contains your database model

4.8  生成相关crud 代码 after add  draft.yml

```powershell
php artisan blueprint:build
php artisan backpack:build
```

4.9 generate table 

```power
php artisan key:generate
php artisan migrate
php artisan db:seed
```

4.10 test


```php
php artisan serve
```

