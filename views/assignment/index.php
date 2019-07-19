<?php

use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Pjax;

/* @var $this \yii\web\View */
/* @var $gridViewColumns array */
/* @var $dataProvider \yii\data\ArrayDataProvider */
/* @var $searchModel \yii2mod\rbac\models\search\AssignmentSearch */

$this->title = Yii::t('yii2mod.rbac', 'Assignments');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'RBAC'), 'url' => ['/rbac-management']];
$this->params['breadcrumbs'][] = $this->title;
$this->render('/layouts/_sidebar');
?>
<div class="assignment-index flex">
    <div class="f-1">
        <?php Pjax::begin(['timeout' => 5000]); ?>

        <?php echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' =>[
                [
                    'attribute' => 'id',
                    'filterInputOptions' => [
                        'class'       => 'form-control input-sm  m-0',
                        'placeholder' => Yii::t('app', 'Search by Id')
                     ]
                ],
                [
                    'attribute' => 'username',
                    'filterInputOptions' => [
                        'class'       => 'form-control input-sm m-0',
                        'placeholder' => Yii::t('app', 'Search by Username')
                     ]
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view}',
                ],
            ],
        ]); ?>

        <?php Pjax::end(); ?>
    </div>
</div>
