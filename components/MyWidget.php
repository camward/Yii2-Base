<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.12.16
 * Time: 20:21
 */

namespace app\components;

use yii\base\Widget;

class MyWidget extends Widget
{
    public $name;

    public function init(){
        parent::init();
        // if($this->name === null) $this->name = "Guest";
        ob_start();
    }

    public function run(){
        $content = ob_get_clean();
        $content = mb_strtoupper($content);
        return $this->render("my", compact("content"));
        // return $this->render("my", ["name" => $this->name]);
    }
}