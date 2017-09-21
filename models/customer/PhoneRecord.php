<?php
/**
 * Created by PhpStorm.
 * User: vitalii
 * Date: 20.09.17
 * Time: 22:06
 */

namespace app\models\customer;
use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'phone';
    }

    public function rules()
    {
        return [
            ['customer_id','number'],
            ['number','string'],
            [['customer_id','number'],'required']
        ];
    }
}