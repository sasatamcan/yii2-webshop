<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'content:ntext',
            'price',
            'date',
//            'image',
            [
                'format'=>'html',
                'label'=>'Image',
                'value'=>function($data){
                    return Html::img($data->getImage(), ['width'=>200]);
                }
            ],
            [
                'attribute' => 'status',
                'value' => function($data){
                    return !$data->status ? '<span class="text-danger">Не активен</span>' : '<span class="text-success">Активен</span>';
                },
                'format' => 'html',
            ],
            //'viewed',
            //'user_id',
            //'status',
            //'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
