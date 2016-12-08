<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.12.16
 * Time: 22:50
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;

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

        if(Yii::$app->request->isAjax){
            debug(Yii::$app->request->post());
            return 'test';
        }


        $model = new TestForm();


        $this->view->title = "Все статьи";
        return $this->render("index", compact('model'));
    }

    public function actionShow(){
        // $this->layout = "basic"; // шаблон только для определенных страниц
        $this->view->title = "Детальный просомтр";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);
        return $this->render("show");
    }
}