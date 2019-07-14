<?
use yii\helpers\Url;
?>

<li class="dropdown menu__item">
    <a href="<?= Url::to(['category/view', 'id'=> $category['id']])?>" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <?= $category['name'] ?>
        <?php if( isset($category['childs'])):?>
            <span class="caret"></span>
        <?php endif;?>
    </a>
    <?php if( isset($category['childs'])):?>
        <ul >
            <?= $this->getMenuHtml($category['childs']) ?>
        </ul>
    <?php endif;?>
</li>

<!--<li class="dropdown menu__item">-->
<!--    <a href="" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
<!--        --><?//= $category['name'] ?>
<!--        --><?php //if( isset($category['childs'])):?>
<!--            <span class="caret"></span>-->
<!--        --><?php //endif;?>
<!--    </a>-->
<!--    --><?php //if( isset($category['childs'])):?>
<!--        <ul class="dropdown-menu multi-column columns-3">-->
<!--            <div class="agile_inner_drop_nav_info">-->
<!--                <div class="col-sm-6 multi-gd-img1 multi-gd-text ">-->
<!--                    <a href=""><img src="public/image/top2.jpg" alt=" "/></a>-->
<!--                </div>-->
<!--                <div class="col-sm-3 multi-gd-img">-->
<!--                    <ul class="multi-column-dropdown">-->
<!--                        --><?//= $this->getMenuHtml($category['childs']) ?>
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="clearfix"></div>-->
<!--            </div>-->
<!--        </ul>-->
<!--    --><?php //endif;?>
<!--</li>-->