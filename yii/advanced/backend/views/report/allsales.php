<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'All Sales';
$this->params['breadcrumbs'][] = ['label' => 'report', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="table">
        <thead>
            <tr>
                <td>Customer Name</td>
                <td>Product Name</td>
                <td>product Count</td>
                <td>product Price</td>
                
            </tr>
        </thead>
        <tbody>
            <?php
            for($i =0; $i<sizeof($dataProvider); $i++){
                echo '<tr>'
                        . '<td>'.$dataProvider[$i]['cus_name'].'</td>'
                        . '<td>'.$dataProvider[$i]['prod_name'].'</td>'
                        . '<td>'.$dataProvider[$i]['product_count'].'</td>'
                        . '<td>'.$dataProvider[$i]['product_price'].'</td>'
                    .'</tr>';
            }
            ?>
        </tbody>
        
    </table>
</div>
