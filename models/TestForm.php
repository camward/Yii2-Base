<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.12.16
 * Time: 22:40
 */

namespace app\models;

use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Сообщение'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required', 'message' => 'Поле обязательно'],
            ['text', 'required'],
            ['text', 'trim'],
            ['email', 'email'],
            ['name', 'string', 'min'=>2, 'tooShort' => 'Мало символов'],
            ['text', 'string', 'length' => [2,999]],
            ['name', 'myRule']
        ];
    }

    // свой валидатор (сработает на серверной стороне)
    public function myRule($attrs){
        if(!in_array($this->$attrs, ['alex', 'nico', 'mary'])){
            $this->addError($attrs, 'Wrong!');
        }
    }
}