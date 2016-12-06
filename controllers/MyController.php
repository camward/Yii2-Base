<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.12.16
 * Time: 22:00
 */

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex($id = 24)
    {
        $hello = "Hello";
        $names = ["Alex", "Nico", "Johny"];
        // return $this->render("index", ['hello' => $hello, 'names' => $names, 'id' => $id]);
        return $this->render("index", compact('hello', 'names', 'id'));
    }
}