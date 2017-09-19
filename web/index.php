<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 18.09.17
 * Time: 20:54
 */

//phpinfo();

define('YII_DEBUG',true);
require (dirname(__DIR__).'/vendor/yiisoft/yii2/Yii.php');
ini_set('display_errors',true);
$config=require (dirname(__DIR__).'/config/web.php');
(new yii\web\Application($config))->run();