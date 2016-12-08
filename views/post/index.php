<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Index</h1>

<?$form = ActiveForm::begin();?>
<?=$form->field($model, 'name')->label('Имя')?>
<?=$form->field($model, 'email')->label('E-mail')->input('email')?>
<?=$form->field($model, 'text')->label('Сообщение')->textarea(['rows' => 5])?>
<?=Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
<?ActiveForm::end();?>
