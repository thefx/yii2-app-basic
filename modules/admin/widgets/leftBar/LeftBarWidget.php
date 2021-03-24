<?php

namespace app\modules\admin\widgets\leftBar;

use thefx\blocks\models\blocks\Block;
use yii\bootstrap\Widget;

class LeftBarWidget extends Widget
{
    public function run()
    {
        $blocks = Block::find()->all();

        return $this->render('index', [
            'blocks' => $blocks,
        ]);
    }
}
