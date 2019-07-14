<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atribute */

$this->title = 'Update Atribute: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Atributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="atribute-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
