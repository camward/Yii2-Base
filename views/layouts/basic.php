<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
        <ul class="nav nav-pills">
            <li class="active"><?=Html::a('Главная', '/');?></li>
            <li><?=Html::a('Все статьи', ['post/index']);?></li>
            <li><?=Html::a('Детальный просмотр', ['post/show']);?></li>
        </ul>

        <?if(isset($this->blocks['block1'])):?>
            <?echo $this->blocks['block1'];?>
        <?endif;?>

        <?=$content;?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
