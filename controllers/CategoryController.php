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
        $this->setMeta('E-Shopper!');
        $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
        return $this->render('index', compact('hits'));
    }

    public function actionView($id){
       $id = Yii::$app->request->get('id');
       $products = Product::find()->where(['category_id'=>$id])->all();
       $category = Category::findOne($id);
       $this->setMeta("E-shopper | ".$category->name, $category->description, $category->keywords);
       return $this->render('view', compact('products','category'));
    }
}