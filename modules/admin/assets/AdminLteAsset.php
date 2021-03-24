<?php

namespace app\modules\admin\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte';

    public $css = [
        'plugins/fontawesome-free/css/all.min.css',
//        '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
//        'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'dist/css/adminlte.min.css',
        'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
//        'plugins/daterangepicker/daterangepicker.css',
//        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'
    ];

    public $js = [
//        'plugins/moment/moment.min.js',
//        'plugins/daterangepicker/daterangepicker.js',
//        'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
//        'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'dist/js/adminlte.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset', // yii.js, jquery.js
    ];

//    public function init()
//    {
//        parent::init();
////        \Yii::$app->assetManager->bundles['yii\\web\\JqueryAsset'] = [
////            'jsOptions' => [
////                'position' =>  View::POS_HEAD,
////            ],
////        ];
////        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
////            'css' => []
////        ];
////        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapThemeAsset'] = [
////            'css' => []
////        ];
//    }
}
