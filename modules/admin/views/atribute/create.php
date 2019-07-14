<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atribute */

$this->title = 'Create Atribute';
$this->params['breadcrumbs'][] = ['label' => 'Atributes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atribute-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
