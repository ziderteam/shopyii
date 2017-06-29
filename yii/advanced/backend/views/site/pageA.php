<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Site page a';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="test-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
       
    <p>
        <b> set table </b>
    <table class="table">
        <thead>
            <tr>
                <td> NO.</td>
                <td>Name</td>
                <td>data</td>
            </tr>
            
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>aa</td>
                <td>111</td>
            </tr>
            <tr>
                <td>2</td>
                <td>bb</td>
                <td>222</td>
            </tr>
            <tr>
                <td>3</td>
                <td>cc</td>
                <td>333</td>
            </tr>
            <tr>
                <td>4</td>
                <td>dd</td>
                <td>444</td>
            </tr>
        </tbody>

        </table>
    </p>

    
</div>
