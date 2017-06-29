<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Productorder */

$this->title = 'Update Productorder: ' . $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Productorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_id, 'url' => ['view', 'id' => $model->order_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productorder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cusList' => $cusList,
        'prodList' => $prodList,
    ]) ?>

</div>
