<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * Created by PhpStorm.
 * User: Hudenko
 * Date: 19.07.2018
 * Time: 16:02
 */
?>
<h1>View for Post controller and test page!</h1>
<p>Here is the common template</p>

<?if(Yii::$app->session->hasFlash('success')):?>
    <?= Yii::$app->session->getFlash('success');?>
<?endif;?>
<?if(Yii::$app->session->hasFlash('error')):?>
    <?= Yii::$app->session->getFlash('error');?>
<?endif;?>
<?$form=ActiveForm::begin();?>
<?=$form->field($model, 'name')->label('Имя')?>
<?=$form->field($model, 'email')?>
<?=$form->field($model, 'text')->label('Сообщение')->textarea(["rows"=>10])?>
<?=Html::submitButton("Отправить", ['class'=>'btn btn-info'])?>
<?ActiveForm::end();?>