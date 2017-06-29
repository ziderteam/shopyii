<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site page c';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
       
    
    <p>
        <b> set 3 color button </b>
        <?= Html::a('Primary', ['create'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Success', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Danger', ['create'], ['class' => 'btn btn-danger']) ?>
    </p>
    
</div>
