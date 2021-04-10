<?php

namespace app\modules\backend;
use yii\base\Module;
use yii\filters\AccessControl;
use yii\web\View;

class Backend extends Module
{
    public $controllerNamespace = 'app\modules\backend\controllers';
    public $layout = 'main';

    public function init()
    {
        parent::init();
        $this->setLayoutPath('@app/modules/backend/layouts');

        \Yii::$app->assetManager->appendTimestamp = true;
        \Yii::$app->assetManager->bundles = [
            'yii\web\JqueryAsset' => [
//                'js' => [
//                    '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
//                ],
                'jsOptions' => [
                    'position' =>  View::POS_HEAD,
                ],
            ],
            'yii\bootstrap\BootstrapAsset' => [
                'css' => [],
            ],
//            'yii\bootstrap\BootstrapPluginAsset' => [
//                'js' => [],
////                'css' => [], // ??
//            ],
//            \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapThemeAsset'] = [
//                'css' => []
//            ],
        ];
    }

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                ],
            ],
        ];
    }

}
