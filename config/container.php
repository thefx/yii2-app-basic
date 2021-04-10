<?php

return [
    'definitions' => [
        \yii\widgets\LinkPager::class => \yii\bootstrap4\LinkPager::class,
        'yii\bootstrap4\LinkPager' => [
            'options' => ['tag' => 'div', 'class' => 'products-view__pagination'],
            'listOptions' => ['class' => 'pagination justify-content-center'],
            'nextPageLabel' => '→',
            'prevPageLabel' => '←',
        ],
        \yii\grid\ActionColumn::class => \app\components\grid\ActionColumn::class,
        \yii\grid\GridView::class => [
            'layout' => "{items}\n{pager}\n{summary}",
            'tableOptions' => [
                'class' => 'table table-bordered table-head-fixed-'
            ],
            'options' => [],
        ],
        \yii\widgets\DetailView::class => [
            'options' => [
                'class' => 'table table-bordered detail-view'
            ],
        ],
        \yii\jui\DatePicker::class => [
            'clientOptions' => [
                'defaultDate' => date('Y-m-d')
            ],
            'dateFormat' => 'yyyy-MM-dd',
            'language' => 'ru',
            'options' => [
                'class' => 'form-control'
            ]
        ],
    ],
    'singletons' => [
        // Dependency Injection Container singletons configuration
    ]
];