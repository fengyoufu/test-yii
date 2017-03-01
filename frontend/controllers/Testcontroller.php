<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/10
 * Time: 17:17
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\TestForm;
use frontend\models\TestModel;

class TestController extends BaseController
{
    public function actionIndex(){
        //Yii::$app->controller->id;//获取控制名称
        $count = TestModel::total();
        $list =  TestModel::all();
        echo $count;
        echo "<hr/>";
        //print_r($list);
        var_dump($list);
        /*foreach($list as $key=>$val){
            echo $val['name'];
        }*/
    }

    public function actionAdd(){
        $this->http_url();
        $res = TestModel::add();
        if($res){
            echo "添加成功！";
        }
    }

    public function actionUrl(){
        //控制器跳转
        $this->redirect(array('/service/index'));
    }
}