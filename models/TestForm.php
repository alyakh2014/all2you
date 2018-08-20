<?php
/**
 * Created by PhpStorm.
 * User: A.Khudenko
 * Date: 12.08.2018
 * Time: 16:56
 */

namespace app\models;
use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels(){
        return[
            'name'=>'Ваше имя',
            'email'=>'Ваш E-mail',
            'text'=>'Ваше сообщение'
        ];
    }

    public function rules(){
        return[
            [['name', 'email'],'required'],// 'message'=> 'Поле обязательно'],
            ['email','email'],
           // ['name', 'string', 'min'=>3, 'tooShort'=> 'Wrong'],
            //['name', 'string', 'max'=>10 , 'tooLong' ],
            ['name', 'string', 'length'=>[2,6]],
            ['name', 'myRule'],
            ['text', 'trim']
        ];
    }

    public function myRule($attrs){
        if(!in_array($this->$attrs, ['hello', 'world'])){
            $this->addError($attrs, 'Wrong!');
        }
    }
}