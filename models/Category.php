<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.12.16
 * Time: 23:03
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    // по умолчанию yii обращается к таблице с названием модели
    // если название таблицы и модели разные, то нужно задать таблицу через метод:

    public static function tableName(){
        return 'categories';
    }


    // связь "один ко многим". parent из Product = id из Category
    public function getProducts23(){
        return $this->hasMany(Product::className(), ['parent' => 'id']);
    }
}