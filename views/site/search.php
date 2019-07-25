<?
use yii\helpers\Url;

?>
<!-- //banner -->
<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="banner_bottom_agile_info_inner_w3ls">
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src="public/image/bottom1.jpg" alt=" " class="img-responsive" />
                    <figcaption>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src="public/image/bottom2.jpg" alt=" " class="img-responsive" />
                    <figcaption>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //schedule-bottom -->
<!-- banner-bootom-w3-agileits -->
<!---->
<!--/grids-->
<?php if(!empty($popular)):?>
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="wthree_text_info">What's <span>Top Selling</span></h3>
            <div class="agile_last_double_sectionw3ls">
                <? foreach($popular as $pop):?>
                    <div class="col-md-6 multi-gd-img multi-gd-text ">
                        <a href="<?= Url::toRoute(['product/single', 'id'=>$pop->id])?>"><img src="<?= $pop->getImage();?>" alt=" ">
                            <h4>Price <span><?= $pop->price;?></span> $</h4></a>
                    </div>
                <? endforeach;?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?php endif;?>

<!-- /we-offer -->
<div class="sale-w3ls">
    <div class="container">
    </div>
</div>
<!-- //we-offer -->
<!--/grids-->
<div class="coupons">
    <div class="coupons-grids text-center">
        <div class="w3layouts_mail_grid">
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE SHIPPING</h3>
                    <p>Free delivery in Zhytomyr</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>24/7 SUPPORT</h3>
                    <p>You can contact us at any time</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>MONEY BACK GUARANTEE</h3>
                    <p>We will refund your money if you return the purchase</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE GIFT COUPONS</h3>
                    <p>Receive your gift today</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>