<?php

use yii\helpers\Html;
use yii\helpers\Json;
use yii2mod\rbac\RbacRouteAsset;

RbacRouteAsset::register($this);

/* @var $this yii\web\View */
/* @var $routes array */

$this->title = Yii::t('yii2mod.rbac', 'Routes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'RBAC'), 'url' => ['/rbac-management']];
$this->params['breadcrumbs'][] = $this->title;
$this->render('/layouts/_sidebar');
?>
<div class="route-view">
    <p>
        <?php echo Html::a(Yii::t('yii2mod.rbac', 'Refresh'), ['refresh'], [
            'class' => 'btn btn-primary m-0',
            'id' => 'btn-refresh',
        ]); ?>
    </p>

    <?php echo $this->render('../_dualListBox', [
        'opts' => Json::htmlEncode([
            'items' => $routes,
        ]),
        'assignUrl' => ['assign'],
        'removeUrl' => ['remove'],
    ]); ?>
<div class="auth-item-view">
