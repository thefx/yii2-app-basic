<?php

namespace app\modules\frontend\controllers;

use thefx\blocks\models\blocks\BlockItem;
use thefx\pages\models\Page;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `main` module
 */
class PagesController extends Controller
{
//    public $layout = 'inner_product';

    public function actionView($slug)
    {
        $model = $this->getModelBySlug($slug);

        return $this->render('view', ['model' => $model]);
    }

    /**
     * @param $slug
     * @return BlockItem|null
     * @throws NotFoundHttpException
     */
    protected function getModelBySlug($slug)
    {
        $model = Page::find()
            ->where(['path' => $slug])
            ->one();

        if ($model !== null) {
            return $model;
        }
        throw new NotFoundHttpException('Материал не найден');
    }
}
