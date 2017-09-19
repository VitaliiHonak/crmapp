<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 18.09.17
 * Time: 20:32
 */

namespace app\controllers;
use \yii\web\Controller;

class SiteController extends Controller{
    public function actionIndex()
    {
        return 'Our CRM';
    }
}