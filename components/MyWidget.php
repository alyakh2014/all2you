<?php
/**
 * Created by PhpStorm.
 * User: Hudenko
 * Date: 20.08.2018
 * Time: 16:41
 */
namespace app\components;
use yii\base\Widget;

class MyWidget extends Widget
{
    public function run(){
        return '<h1>Привет, мир!</h1>';
    }
}