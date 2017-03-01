<?php
/**
 * Created by PhpStorm.
 * User: admin/
 * Date: 2017/2/10
 * Time: 14:26
 */
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Say';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-say">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the Say page:<?= Html::encode($message) ?></p>

    <code><?= __FILE__ ?></code>
</div>

