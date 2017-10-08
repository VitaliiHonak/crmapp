<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 08.10.17
 * Time: 19:39
 */

use yii\helpers\Html;

echo Html::beginForm(['/customers'],'get');
echo Html::label('Phone number to search:','phone_number');
echo Html::textInput('phone_number');
echo Html::submitButton('Search');
echo Html::endForm();

