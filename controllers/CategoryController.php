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
        $this->render('index');
    }
}