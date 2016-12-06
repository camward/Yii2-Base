<?php
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Template</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<h1>Basic Template</h1>
<?=$content;?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
