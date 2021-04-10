<?php

namespace app\modules\frontend\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    public $layout = 'main';

    /**
     * Renders the index view for the module
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {
        return $this->render('index', []);
    }
}
