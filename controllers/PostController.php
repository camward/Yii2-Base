<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.12.16
 * Time: 22:50
 */

namespace app\controllers;

class PostController extends AppController
{

    public $layout = "basic"; // шаблон только для контроллера Post

    public function actionTest(){
        $names = ["Alex", "Nico", "Johny"];

        echo "<br /><br /><br />";
        $this->debug($names);

        return $this->render("test");
    }

    public function actionIndex(){
        return $this->render("index");
    }

    public function actionShow(){
        // $this->layout = "basic"; // шаблон только для определенных страниц
        return $this->render("show");
    }
}