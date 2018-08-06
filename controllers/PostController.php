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
        if(Yii::$app->request->isAjax){
            //debug($_POST);
            Yii::$app->request->post();
            return 'test';
        }
        return $this->render('test');
    }

    public function actionShow(){
       // $this->layout = 'basic';
        return $this->render('show');
    }
}