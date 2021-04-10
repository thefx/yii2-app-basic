<?php

namespace app\modules\frontend;

use yii\base\Module;

class Frontend extends Module
{
    public $controllerNamespace = 'app\modules\frontend\controllers';
    public $layout = 'main';

    public function init()
    {
        parent::init();
        $this->setLayoutPath('@app/modules/frontend/layouts');
        // custom initialization code goes here
    }
}
