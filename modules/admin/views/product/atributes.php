<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <h2>Атрибуты</h2>

    <?php echo Html::beginForm(['/admin/product/set-atributes?id=3'], 'post'); ?>
    <?
    $connection = Yii::$app->getDb();
    $command = $connection->createCommand("SELECT * FROM product_atribute WHERE product_id =".$_GET['id']);
    $result = $command->queryAll();


    echo Html::hiddenInput('product_id', $_GET['id']);
    if(count($atributes)):
        foreach ($atributes as $key=>$attr):
            echo'<label>'.$attr->name.'</label>';
            echo Html::input('text', 'atribute['.$attr->id.']', $result[$key]['value']);
            echo '<br>';
        endforeach;?>
    <? endif;?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php echo Html::endForm(); ?>


</div>