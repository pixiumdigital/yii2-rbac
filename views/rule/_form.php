<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \yii2mod\rbac\models\BizRuleModel */
/* @var $form ActiveForm */
?>

<div class="rule-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'name')->textInput(['maxlength' => 64, 'class' => 'form-control m-0']); ?>

    <?php echo $form->field($model, 'className')->textInput(['class' => 'form-control m-0']); ?>

    <div class="form-group">
        <?php echo Html::submitButton(
            $model->getIsNewRecord() ? Yii::t('yii2mod.rbac', 'Create') : Yii::t('yii2mod.rbac', 'Update'),
            [
                'class' => $model->getIsNewRecord() ? 'btn btn-success m-0' : 'btn btn-primary m-0',
            ]
        ); ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
