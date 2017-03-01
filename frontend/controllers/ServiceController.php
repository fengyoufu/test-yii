<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/10
 * Time: 15:41
 */
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\ServiceForm;

class ServiceController extends BaseController
{
    public function actionIndex(){
        $servicelist = ServiceForm::all();
        //print_r($servicelist);
        return $this->render('service',['list' => $servicelist]);
    }
}