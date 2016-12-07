<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
            <li class="active"><?=Html::a('Главная', '/web/');?></li>
            <li><?=Html::a('Все статьи', ['post/index']);?></li>
            <li><?=Html::a('Детальный просмотр', ['post/show']);?></li>
        </ul>

        <?=$content;?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
