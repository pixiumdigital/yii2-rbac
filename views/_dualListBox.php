<?php

use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $assignUrl array */
/* @var $removeUrl array */
/* @var $opts string */

$this->registerJs("var _opts = {$opts};", View::POS_BEGIN);
?>
<div class="flex">
    <div class="f-3">
        <input class="form-control search m-0" data-target="available"
               placeholder="<?php echo Yii::t('yii2mod.rbac', 'Search for available'); ?>">
        <br/>
        <select multiple size="20" class="form-control list" data-target="available"></select>
    </div>
    <div class="f-2 as-center text-center">
        <div>
            <?php echo Html::a('<i class="fas fa-2x fa-chevron-right"></i>', $assignUrl, [
                'class' => 'btn btn-success btn-assign',
                'data-target' => 'available',
                'title' => Yii::t('yii2mod.rbac', 'Assign'),
            ]); ?>
        </div>
        <div>
            <?php echo Html::a('<i class="fas fa-2x fa-chevron-left"></i>', $removeUrl, [
                'class' => 'btn btn-danger btn-assign',
                'data-target' => 'assigned',
                'title' => Yii::t('yii2mod.rbac', 'Remove'),
            ]); ?>
        </div>
    </div>
    <div class="f-3">
        <input class="form-control search m-0" data-target="assigned"
               placeholder="<?php echo Yii::t('yii2mod.rbac', 'Search for assigned'); ?>">
        <br/>
        <select multiple size="20" class="form-control list" data-target="assigned"></select>
    </div>
</div>
