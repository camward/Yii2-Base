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
    public function actionTest(){
        $names = ["Alex", "Nico", "Johny"];

        echo "<br /><br /><br />";
        $this->debug($names);

        return $this->render("test");
    }
}