<?$this->title = 'Одна статья';?>

<?$this->beginBlock('block1')?>
<h1>Заголовок страницы</h1>
<?$this->endBlock()?>
<h1>Show action</h1>
<button class="btn btn-success" id=""btn">Click me...</button>
<?
//$this->registerJsFile('@web/js/script.js', ['depends'=>'yii\web\YiiAsset']);
//$this->registerJs("$('.container').append('<p>SHOW!!!</p>');", \yii\web\View::POS_LOAD);
//$this->registerCss('.container{background: #ccc;}')
echo "<br>";
foreach($cats as $cat){
    echo $cat->code."; ".$cat->name."; ".$cat->population."<br>";
}

debug($catsarray);


$js = <<<JS
    $('.btn').on('click', function(){
        $.ajax({
            url:'index.php?r=post/index',
            type: 'post',
            data: {test:'123'},
            success: function(res){
                console.log(res);
            },
            error:function(){
                alert('Error!');
            }
        })
    })
JS;
$this->registerJs($js);
?>
