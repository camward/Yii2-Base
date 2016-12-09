<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.12.16
 * Time: 22:50
 */

namespace app\controllers;

use app\models\Category;
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
        if($model->load(Yii::$app->request->post())){
            if($model->validate()){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }
            else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }


        $this->view->title = "Все статьи";
        return $this->render("index", compact('model'));
    }

    public function actionShow(){
        // $this->layout = "basic"; // шаблон только для определенных страниц
        $this->view->title = "Детальный просомтр";
        $this->view->registerMetaTag(['name'=>'keywords', 'content'=>'ключевые слова']);
        $this->view->registerMetaTag(['name'=>'description', 'content'=>'описание страницы']);

        // $cats = Category::find()->all(); // все
        // $cats = Category::find()->orderBy(['title'=>SORT_DESC])->all(); // все с сортировкой
        // $cats = Category::find()->asArray()->all(); // вывыдит массив, а не объект
        // $cats = Category::find()->where('parent=691')->all(); // условие WHERE как строка
        // $cats = Category::find()->where(['parent' => 691])->all(); // условие WHERE как массив
        // $cats = Category::find()->where(['like', 'title', 'pp'])->all(); // условие WHERE с использованием LIKE
        // $cats = Category::find()->where('parent=691')->limit(1)->all(); // условие WHERE с использованием LIMIT
        // $cats = Category::find()->where('parent=691')->limit(1)->one(); // one всегда выводит 1-у запись, но выбирает все! чтобы не было избыточности добавляем  limit(1)
        // $cats = Category::find()->where('parent=691')->count(); // условие WHERE с использованием COUNT

        // свой запрос
        $query = "SELECT * FROM categories WHERE title LIKE :search";
        $cats = Category::findBySql($query, [':search' => '%pp%'])->all();

        return $this->render("show", compact('cats'));
    }
}