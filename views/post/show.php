<h2>Show</h2>

<?$this->registerCss('.container{background: #eee;}')?>
<?$this->registerJs("$('.container').append('<p>work jquery</p>');")?>

<?$this->registerJsFile('@web/js/script.js', ['depends' => 'yii\web\YiiAsset']);?>
