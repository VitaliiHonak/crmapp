<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 07.10.17
 * Time: 19:39
 */

echo \yii\widgets\ListView::widget(
    [
        'options'=>[
            'class'=>'list-view',
            'id'=>'search_results'
        ],
        'itemView'=>'_customer',
        'dataProvider'=>$records
    ]
);