<?php
/**
 * Created by PhpStorm.
 * User: Hudenko
 * Date: 19.07.2018
 * Time: 15:55
 */

namespace app\controllers;
use Yii;

class PostController extends AppController
{

    public $layout = 'basic';

    public function beforeAction($action){
      //debug($action);
       if($action->id == 'show'){
           $this->enableCsrfValidation = false;
       }
       return parent::beforeAction($action);
    }

    public function actionIndex(){
        //$names = ['Ivanov', 'Petrov', 'Sidorov'];
        //$this->debug(Yii::$app);
        $this->view->title = "Все статьи";
        if(Yii::$app->request->isAjax){
            //debug($_POST);
            Yii::$app->request->post();
            return 'test';
        }
        return $this->render('test');
    }

    public function actionShow(){
       // $this->layout = 'basic';
        $this->view->title = "Одна статья";
        $this->view->registerMetaTag(["name" => 'keywords', 'content'=>'Ключевики']);
        $this->view->registerMetaTag(["name"=>'description', 'content'=>'Описание страницы']);
        return $this->render('show');
    }
}