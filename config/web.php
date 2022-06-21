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
$container = require __DIR__ . '/container.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
//    'language' => 'ru-RU',
//    'timeZone' => 'Europe/Moscow',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@thefx/user' => '@app/extensions/user',
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\backend\Backend',
        ],
        'frontend' => [
            'class' => 'app\modules\frontend\Frontend',
        ],
        'blocks' => [
            'class' => 'thefx\blocks\Module',
            'layoutPath' => '@app/modules/backend/layouts',
            'layout' => 'main',
            'layoutPure' => 'pure',
            'rootUsers' => [1],
        ],
        'pages' => [
            'class' => 'thefx\pages\Module',
            'layout' => 'main',
            'layoutPure' => 'pure',
            'layoutPath' => '@app/modules/backend/layouts',
        ],
        'user' => [
            'class' => 'thefx\user\Module',
        ],
    ],
    'components' => [
        'assetManager' => [
            'appendTimestamp' => true,
            'linkAssets' => true,
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'thefx\user\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/login'],
//            'identityCookie' => ['name' => '_identity', 'httpOnly' => true],
        ],
        'errorHandler' => [
            'errorAction' => 'frontend/site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
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
    'as access pages' => [
        'class' => 'yii\filters\AccessControl',
        'only' => ['pages/*', 'blocks/*'],
        'rules' => [
            [
                'allow' => true,
                'roles' => ['@'],
            ],
        ],
    ],
    'params' => $params,
    'container' => $container,
];

return $config;
