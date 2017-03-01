<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/28
 * Time: 10:14
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{

    //静止直接访问控制器方法
    protected function http_url(){
        if(!$_SERVER['HTTP_REFERER']) {
            exit('禁止访问');
        }
    }
}

