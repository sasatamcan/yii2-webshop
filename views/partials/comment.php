<?php if(!empty($comments)):?>

    <?php foreach($comments as $comment):?>
        <div class="bootstrap-tab-text-grid">
            <div class="bootstrap-tab-text-grid-left">
                <img src="<?= $comment->user->image;?>" alt=" " class="img-responsive">
            </div>
            <div class="bootstrap-tab-text-grid-right">
                <ul>
                    <li><a href="#"><?= $comment->user->name;?></a></li>
                    <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                </ul>
                <p><?= $comment->text;?></p>
                <p class="comment-date">
                    <?= $comment->getDate();?>
                </p>
            </div>
            <div class="clearfix"> </div>
        </div>
    <? endforeach;?>

<?php endif;?>
<?php if(!Yii::$app->user->isGuest):?>

    <div class="add-review">
        <h4>add a review</h4>
        <?php if(Yii::$app->session->getFlash('comment')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('comment');?>
            </div>
        <?php endif;?>

        <?php $form = \yii\widgets\ActiveForm::begin([
            'action'=>['site/comment', 'id'=>$product->id],
            'options'=>['class'=>'', 'role'=>'form']
        ])?>
        <form action="#" method="post">
            <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control', 'placeholder'=>'Write Massage'])->label(false) ?>
            <input type="submit" value="SEND">
        </form>
        <?php \yii\widgets\ActiveForm::end();?>
    </div>
<?php endif;?>