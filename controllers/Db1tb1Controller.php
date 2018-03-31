<?php
/**
 * Created by PhpStorm.
 * User: sky
 * Date: 2018/3/31
 * Time: 10:13
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Db1_tb1;

class Db1tb1Controller extends Controller
{
    public function actionIndex()
    {
        $query = Db1_tb1::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $db1tb1_items = $query->orderBy('age')->offset($pagination->offset)->limit($pagination->limit)->all();

        return $this->render('index', [
            'db1tb1_items' => $db1tb1_items,
            'pagination' => $pagination,
        ]);
    }
}

