<?php
/**
 * Created by PhpStorm.
 * User: Hudenko
 * Date: 19.07.2018
 * Time: 15:53
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo "<pre>".print_r($arr, true)."</pre>";
    }
}

