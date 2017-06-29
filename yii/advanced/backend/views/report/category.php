<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category';
$this->params['breadcrumbs'][] = ['label' => 'report', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="table">
        <thead>
            <tr>
                <td>Cate Id</td>
                <td>Cate Name</td>
                <td>Cate DESC</td>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i =0; $i<sizeof($dataProvider); $i++){
                echo '<tr>'
                        . '<td>'.$dataProvider[$i]['cate_id'].'</td>'
                        . '<td>'.$dataProvider[$i]['cate_name'].'</td>'
                        . '<td>'.$dataProvider[$i]['cate_desc'].'</td>'
                    .'</tr>';
            }
            ?>
        </tbody>
        
    </table>
</div>
