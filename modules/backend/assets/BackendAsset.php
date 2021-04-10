<?php

namespace app\modules\backend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class BackendAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/theme.css'
    ];

    public $depends = [
        'app\modules\backend\assets\AdminLteAsset',
    ];
}
