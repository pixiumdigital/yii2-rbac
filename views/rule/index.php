<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ArrayDataProvider */
/* @var $searchModel yii2mod\rbac\models\search\BizRuleSearch */

$this->title = Yii::t('yii2mod.rbac', 'Rules');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'RBAC'), 'url' => ['/rbac-management']];
$this->params['breadcrumbs'][] = $this->title;
$this->render('/layouts/_sidebar');
?>
<div class="role-index">

    <p>
        <?php echo Html::a(Yii::t('yii2mod.rbac', 'Create Rule'), ['create'], ['class' => 'btn btn-success m-0']); ?>
    </p>

    <?php Pjax::begin(['timeout' => 5000]); ?>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'label' => Yii::t('yii2mod.rbac', 'Name'),
            ],
            [
                'header' => Yii::t('yii2mod.rbac', 'Action'),
                'class' => 'yii\grid\ActionColumn',
            ],
        ],
    ]);
    ?>

    <?php Pjax::end(); ?>
</div>
