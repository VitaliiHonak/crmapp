<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 07.10.17
 * Time: 22:21
 */

echo \yii\widgets\DetailView::widget(
    [
        'model'=>$model,
        'attributes'=>[
            ['attribute'=>'name'],
            ['attribute'=>'birth_date', 'value'=>$model->birth_date->format('Y-m-d')],
            'notes:text',
            ['label'=>'Phone number', 'attribute'=>'phones.0.number']
        ]
    ]
);