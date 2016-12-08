<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Index</h1>

<?$form = ActiveForm::begin();?>
<?=$form->field($model, 'name')?>
<?=$form->field($model, 'email')->input('email')?>
<?=$form->field($model, 'text')->textarea(['rows' => 5])?>
<?=Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?ActiveForm::end();?>
