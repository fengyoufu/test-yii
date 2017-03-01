<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/10
 * Time: 15:28
 */
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\Service;


class ServiceForm extends Model
{
    //
    public static function all(){
        return Service::find()->orderBy('sort asc')->all();
    }
}