<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper; 
/* @var $this yii\web\View */
/* @var $model backend\models\Productorder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productorder-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cus_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($cusList,'cus_id','name'),
        'language' => 'th',
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

     <?= $form->field($model, 'prod_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($prodList,'prod_id','prod_name'),
        'language' => 'th',
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>

    <?= $form->field($model, 'order_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
