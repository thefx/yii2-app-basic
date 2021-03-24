<?php

namespace app\modules\admin\widgets\input\switcher;

use yii\widgets\InputWidget;

class SwitchInput extends InputWidget
{
    public function run()
    {
        return $this->render('index', [
            'model' => $this->model,
            'attributeName' => $this->attribute
        ]);
    }
}
