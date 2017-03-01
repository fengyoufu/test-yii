<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/10
 * Time: 17:26
 */
namespace common\models;

use Yii;
use yii\db\ActiveRecord;
class Service extends ActiveRecord{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%yt_service}}';
    }
}