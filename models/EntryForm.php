<?php
/**
 * Created by PhpStorm.
 * User: sky
 * Date: 2018/3/30
 * Time: 10:27
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],        // name 和 email 值都是必须的
            ['email', 'email'],                     // email 的值必须满足email规则验证
        ];
    }
}