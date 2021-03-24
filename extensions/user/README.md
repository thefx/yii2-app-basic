
Installation
------------

Either run

```
composer require thefx/yii2-blocks:dev-master
```

or add

```
"thefx/yii2-blocks": "dev-master"
```

Apply Migrations

```
php yii migrate --migrationPath=@thefx/user/migrations
```

config

```
'modules' => [
    'user' => [
        'class' => 'thefx\user\Module',
    ],
],
'components' => [
    'user' => [
        'identityClass' => 'thefx\user\models\User',
        'enableAutoLogin' => true,
        'loginUrl' => ['/login'],
    ],
]
```

Go to

```
mysite.ru/signup
mysite.ru/login
mysite.ru/logout
```

Configure
---


Rbac (optional)

```
php yii migrate --migrationPath=@app/vendor/yiisoft/yii2/rbac/migrations
```