<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 20.09.17
 * Time: 19:02
 */

return [
    'id' => 'crmapp-console',
    'basePath'=> dirname(__DIR__),
    'components'=>[
        'db'=>require (__DIR__.'/db.php'),
    ],
];