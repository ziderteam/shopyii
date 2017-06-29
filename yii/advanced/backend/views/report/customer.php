<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customer';
$this->params['breadcrumbs'][] = ['label' => 'report', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <table class="table">
        <thead>
            <tr>
                <td>Customer Id</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Email</td>
                <td>Tel</td>
                <td>Fax</td>
                <td>Address</td>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i =0; $i<sizeof($dataProvider); $i++){
                echo '<tr>'
                        . '<td>'.$dataProvider[$i]['cus_id'].'</td>'
                        . '<td>'.$dataProvider[$i]['name'].'</td>'
                        . '<td>'.($dataProvider[$i]['gender'] == 1 ? 'ชาย' : 'หญิง' ) .'</td>'
                        . '<td>'.$dataProvider[$i]['email'].'</td>'
                        . '<td>'.$dataProvider[$i]['tel'].'</td>'
                        . '<td>'.$dataProvider[$i]['fax'].'</td>'
                        . '<td>'.$dataProvider[$i]['address'].'</td>'
                    .'</tr>';
            }
            ?>
        </tbody>
        
    </table>
</div>
