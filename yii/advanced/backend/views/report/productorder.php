<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Order';
$this->params['breadcrumbs'][] = ['label' => 'report', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="table">
        <thead>
            <tr>
                <td>Order Id</td>
                <td>Customer Name</td>
                <td>Product Name</td>
                <td>Order Number</td>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i =0; $i<sizeof($dataProvider); $i++){
                echo '<tr>'
                        . '<td>'.$dataProvider[$i]['order_id'].'</td>'
                        . '<td>'.$dataProvider[$i]['cus_name'].'</td>'
                        . '<td>'.$dataProvider[$i]['prod_name'].'</td>'
                        . '<td>'.$dataProvider[$i]['order_number'].'</td>'
                    .'</tr>';
            }
            ?>
        </tbody>
        
    </table>
</div>
