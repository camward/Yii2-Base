<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.12.16
 * Time: 11:10
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName(){
        return 'products';
    }
}