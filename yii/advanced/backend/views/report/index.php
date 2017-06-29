<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Report';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Category', ['category'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Customer', ['customer'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Product', ['product'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Productorder', ['productorder'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('AllSales', ['allsales'], ['class' => 'btn btn-default']) ?>
    </p>
    
</div>
