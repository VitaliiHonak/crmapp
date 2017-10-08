<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 22.09.17
 * Time: 20:53
 */

use app\models\customers\CustomerRecord;
use app\models\customers\PhoneRecord;
use yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(
    ['id'=>'add-customer-form',]
);

echo $form->errorSummary([$customer,$phone]);
echo $form->field($customer,'name');
echo $form->field($customer,'birth_date');
echo $form->field($customer,'notes');

echo $form->field($phone,'number');

echo Html::submitButton("Submit", ['class'=>'btn btn-primary']);
ActiveForm::end();



