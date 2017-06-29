<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cus_id') ?>

    <?= $form->field($model, 'name') ?>
    
    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'tel') ?>

    <?= $form->field($model, 'fax') ?>
    
    <?= $form->field($model, 'address') ?>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
