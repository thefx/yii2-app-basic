<?php

namespace app\modules\admin;
use yii\base\Module;
use yii\filters\AccessControl;

class Admin extends Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layout = 'main';

    public function init()
    {
        parent::init();
        $this->setLayoutPath('@app/modules/admin/layouts');
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
