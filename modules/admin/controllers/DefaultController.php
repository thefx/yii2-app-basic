<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {

//        return $this->redirect(['/admin/blocks/block/index']);

        \Yii::$app->session->setFlash('success', "Your message to display");

        return $this->render('index', [

        ]);
    }
}
