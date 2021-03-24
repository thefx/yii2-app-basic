<?php

namespace app\modules\admin\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class BackendAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $depends = [
        'app\modules\admin\assets\AdminLteAsset',
    ];
}
