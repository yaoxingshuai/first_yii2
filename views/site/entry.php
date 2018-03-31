<?php
/**
 * Created by PhpStorm.
 * User: sky
 * Date: 2018/3/30
 * Time: 10:29
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('请输入name') ?>

<?= $form->field($model, 'email')->label('请输入email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>