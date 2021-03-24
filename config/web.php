<?php
$params = array_merge(
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
$db = array_merge(
    require __DIR__ . '/db.php',
    require __DIR__ . '/db-local.php'
);
$urlManager = require __DIR__ . '/url_manager.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', \thefx\user\Bootstrap::class],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@thefx/user' => '@app/extensions/user',
    ],
    'modules' => [
//        'blocks' => [
//            'class' => 'thefx\blocks\Module',
//            'layoutPath' => '@app/modules/admin/layouts',
//            'layout' => 'page',
//            'layoutPure' => 'pure',
//            'rootUsers' => [1],
//        ],
        'user' => [
            'class' => 'thefx\user\Module',
//            'register' => true,
//            'layout' => '@app/views/layouts/window.php'
        ],
        'admin' => [
            'class' => 'app\modules\admin\Admin',
        ],
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity', 'httpOnly' => true],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => $urlManager,
    ],
    'params' => $params,
];

return $config;
