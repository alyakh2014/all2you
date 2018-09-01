<?php
/**
 * Created by PhpStorm.
 * User: A.Khudenko
 * Date: 31.08.2018
 * Time: 06:32
 */

namespace app\controllers;
use app\controllers\AppController;
use app\models\Category;
use app\models\Product;
use Yii;

class CategoryController extends AppController
{
    public function actionIndex(){
        $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
        return $this->render('index', compact('hits'));
    }
}