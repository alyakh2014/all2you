<?php
/**
 * Created by PhpStorm.
 * User: A.Khudenko
 * Date: 26.08.2018
 * Time: 09:07
 */

namespace app\components;
use yii\jui\Widget;
use app\models\Category;

class MenuWidget extends Widget
{

    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;

    function init(){
        parent::init();
        if($this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run(){
        $this->data = Category::find()->indexBy("id")->asArray()->all();
        $this->tree = $this->getTree();
        debug($this->tree);
        return $this->tpl;
    }

    protected function getTree(){
        $tree = [];
        foreach($this->data as $id=>&$node){
            if(!$node['parent_id']) $tree[$id] = &$node;
            else $this->data[$node["parent_id"]]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

}