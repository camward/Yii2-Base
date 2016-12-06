<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.12.16
 * Time: 22:46
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    // метод доступен в controllers
    public function debug($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}

// метод доступен в views
function debug($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}