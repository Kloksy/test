<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\widgets\ActiveField;

?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'username')?>

<?= $form->field($model, 'email')?>
<?= $form->field($model, 'password')->passwordInput()?>

    <div class="form-group">
        <div class="">
            <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

<?php ActiveForm::end() ?>