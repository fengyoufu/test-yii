<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/2/10
 * Time: 16:28
 */
use yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = 'Service';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-service">
    <h1><?= Html::encode($this->title) ?></h1>
    <ul>
        <?php foreach($list as $key=>$val): ?>
            <li><?= Html::encode($val['name']) ?></li>
        <?php endforeach; ?>
    </ul>
    <code><?= __FILE__ ?></code>
</div>