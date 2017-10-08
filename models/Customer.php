<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 19.09.17
 * Time: 22:12
 */

namespace app\models\customers;

class Customer{
    public $name;
    public $birth_date;
    public $notes='';
    public $phones=[];

    public function __construct($name, $birth_date)
    {
        $this->name=$name;
        $this->birth_date=$birth_date;
    }
}