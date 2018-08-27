<?php
/**
 * Created by PhpStorm.
 * User: A.Khudenko
 * Date: 26.08.2018
 * Time: 09:07
 */

namespace app\components;
use yii\jui\Widget;

class MenuWidget extends Widget
{

    function init(){
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        return $this->tpl;
    }
}