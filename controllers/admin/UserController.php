<?php
namespace app\controllers\admin;
use yii\web\Controller;
/**
 * Created by PhpStorm.
 * User: A.Khudenko
 * Date: 05.08.2018
 * Time: 09:04
 */
class UserController extends Controller{
    public function actionIndex(){
        return $this->render('index');
    }


}