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
    public $name;

    public function init(){
        parent::init();
        if($this->name === null){
            $this->name = 'Guest';
        }
    }

    public function run(){
        return $this->render('my', ['name'=>$this->name]);
    }
}