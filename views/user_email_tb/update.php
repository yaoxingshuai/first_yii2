<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User_email_tb */

$this->title = 'Update User Email Tb: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'User Email Tbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-email-tb-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
