<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product';
$this->params['breadcrumbs'][] = ['label' => 'report', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="table">
        <thead>
            <tr>
                <td>Product ID</td>
                <td>Product Name</td>
                <td>Product DESC</td>
                <td>Category</td>
                <td>Product Price</td>
                <td>Product Img</td>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i =0; $i<sizeof($dataProvider); $i++){
                echo '<tr>'
                        . '<td>'.$dataProvider[$i]['prod_id'].'</td>'
                        . '<td>'.$dataProvider[$i]['prod_name'].'</td>'
                        . '<td>'.$dataProvider[$i]['prod_desc'].'</td>'
                        . '<td>'.$dataProvider[$i]['cate_name'].'</td>'
                        . '<td>'.$dataProvider[$i]['pro_price'].'</td>'
                        . '<td>'.$dataProvider[$i]['img'].'</td>'
                    .'</tr>';
            }
            ?>
        </tbody>
        
    </table>
</div>
