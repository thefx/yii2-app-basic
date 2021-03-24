<?php

namespace app\modules\admin\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class BackendAsset extends AssetBundle
{
//    public $sourcePath = '@app/modules/admin/assets/Backend/assets';
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
//        'css/helper.css',
//        'css/admin-lte-style.css',
    ];

    public $depends = [
        'app\modules\admin\assets\AdminLteAsset',
//        'yii\web\YiiAsset', // yii.js, jquery.js
    ];
//
//    public $jsOptions = [
//        'position' =>  View::POS_END,
//    ];

//    public function init()
//    {
//        parent::init();
//        \Yii::$app->assetManager->bundles['yii\\web\\JqueryAsset'] = [
//            'jsOptions' => [
//                'position' =>  View::POS_HEAD,
//            ],
//        ];
////        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
////            'css' => []
////        ];
////        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapThemeAsset'] = [
////            'css' => []
////        ];
//    }
}
