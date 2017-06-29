<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Productorder */

$this->title = 'Create Productorder';
$this->params['breadcrumbs'][] = ['label' => 'Productorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productorder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cusList' => $cusList,
        'prodList' => $prodList,
    ]) ?>

</div>
