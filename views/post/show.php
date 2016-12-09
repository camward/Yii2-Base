<h2>Show</h2>

<button class="btn btn-success" id="el">Отправить запрос</button><br /><br />

<?//$this->registerCss('.container{background: #eee;}')?>
<?//$this->registerJs("$('.container').append('<p>work jquery</p>');")?>

<?//$this->registerJsFile('@web/js/script.js', ['depends' => 'yii\web\YiiAsset']);?>

<?$this->beginBlock('block1');?>
    <h3>Блок из view</h3>
<?$this->endBlock();?>

<?
$js = <<<JS
    $('#el').on('click', function(e) {
        $.ajax({
           url: 'index.php?r=post/index',
           data: {test: '123'},
           type: 'POST',
           success: function(data) {
               console.log(data);
           },
           error: function() {
               console.log('Error');
           }
        });
    });
JS;
$this->registerJs($js);
?>

<?
foreach($cats as $cat){
    echo $cat->title."<br />";
}

//\app\controllers\debug($cats);
?>
