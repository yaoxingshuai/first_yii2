<?php
/**
 * Created by PhpStorm.
 * User: sky
 * Date: 2018/3/30
 * Time: 10:36
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>