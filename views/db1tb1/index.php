<?php
/**
 * Created by PhpStorm.
 * User: sky
 * Date: 2018/3/31
 * Time: 10:20
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1>Db1_tb1 items</h1>
<ul>
    <?php foreach ($db1tb1_items as $db1tb1_item): ?>
        <li>
            <?= Html::encode("{$db1tb1_item->tid} ({$db1tb1_item->name})") ?>:
            <?= $db1tb1_item->tid ?> <?= $db1tb1_item->name ?>:
            <?= $db1tb1_item->age ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
