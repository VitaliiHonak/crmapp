<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 19.09.17
 * Time: 21:58
 */

namespace app\controllers;
use \yii\web\Controller;

class CustomersController extends Controller{

    public function actionIndex()
    {
        $records = $this ->findRecordsByQuery();
        return $this->render('index',compact('records'));
    }
}
