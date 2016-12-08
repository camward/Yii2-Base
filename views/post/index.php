<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Index</h1>

<?if(Yii::$app->session->hasFlash('success')):?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?=Yii::$app->session->getFlash('success')?>
    </div>
<?endif;?>
<?if(Yii::$app->session->hasFlash('error')):?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?=Yii::$app->session->getFlash('error')?>
    </div>
<?endif;?>

<?$form = ActiveForm::begin();?>
<?=$form->field($model, 'name')?>
<?=$form->field($model, 'email')->input('email')?>
<?=$form->field($model, 'text')->textarea(['rows' => 5])?>
<?=Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?ActiveForm::end();?>
