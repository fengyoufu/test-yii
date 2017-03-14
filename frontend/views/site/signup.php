<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\assets\AppAsset;
use yii\captcha\Captcha;
/*
 * *
 * 自定义CSS,JS加载
 */
AppAsset::register($this);
AppAsset::addCss($this,'@web/css/signup.css');
AppAsset::addScript($this,'@web/js/test.js');
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
$this->title = '注册';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>请填写以下字段注册:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username',['labelOptions' => ['label' => '用户名','class' => 'signup-username']]) ?>
                <?= $form->field($model, 'email',['labelOptions' => ['label' => '邮箱']]) ?>
                <?= $form->field($model, 'password',['labelOptions' => ['label' => '密码']])->passwordInput() ?>
                <?= $form->field($model, 'repassword',['labelOptions' => ['label' => '确认密码']])->passwordInput() ?>
                <?= $form->field($model, 'verifyCode',['labelOptions' => ['label' => '验证码']])->widget(Captcha::className(), ['template' => '<div class="row"><div class="col-lg-6">{input}</div><div class="col-lg-3">{image}</div></div>',
                ]) ?>

                <div class="form-group sugnup-margin-div">
                    <?= Html::submitButton('注册', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
