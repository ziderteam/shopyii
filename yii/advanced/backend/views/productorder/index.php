<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productorders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productorder-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Productorder', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'cus_id',
            'prod_id',
            'order_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
