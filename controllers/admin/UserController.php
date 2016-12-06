<?php

/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.12.16
 * Time: 22:27
 */

namespace app\controllers\admin;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render("index");
    }
}