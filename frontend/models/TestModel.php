<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/13
 * Time: 10:04
 */
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use common\models\Test;

class TestModel extends ActiveRecord
{
    public static function total(){
        $model = new Test();
        return $model::find()->count();
    }

    public static function all(){
        $model = new Test();
        return $model::find()->asArray()->all();
        //$sql = 'select * from {{test}} where id = :id';
        //return $model::findBySql($sql,array(':id'=>'1'))->all();
    }

    public static function add(){
        $model = new Test();
        $model->name='test';
        $model->type=1;
        $model->time=1486444103;
        $res = $model->save();
        if($res){
            return $res;
        }
    }

}