<?php

namespace app\modules\frontend\assets\Theme;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ThemeAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [

    ];

    public $js = [

    ];

    public $depends = [
//        'yii\bootstrap\BootstrapAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\JqueryAsset', // yii.js, jquery.js
    ];
}
