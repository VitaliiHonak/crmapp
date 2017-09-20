#!usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 20.09.17
 * Time: 18:55
 */
define('YII_DEBUG',true);

require (__DIR__.'/vendor/autoload.php');
require (__DIR__.'/vendor/yiisoft/yii2/Yii.php');

$config =require (__DIR__.'/config/console.php');

$application = new yii\console\Application($config);
$exitCode = $application->run();
exit($exitCode);