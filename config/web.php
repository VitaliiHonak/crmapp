<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 18.09.17
 * Time: 20:21
 */

return [
    'id'=>'crmapp',
    'basePath'=>realpath(__DIR__."/../"),
    'components'=>[
        'db'=>require (__DIR__.'/db.php'),
        'request'=>[
            'cookieValidationKey'=>'1111',
        ],
    ]
];