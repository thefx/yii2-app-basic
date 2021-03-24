<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {

//        return $this->redirect(['/admin/blocks/block/index']);

        return $this->render('index', [

        ]);
    }
}
