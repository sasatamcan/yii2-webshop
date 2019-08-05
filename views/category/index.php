<?
use yii\helpers\Url;

?>
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3><?= $category->name;?></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="/">Home</a><i>|</i></li>
                    <li><?= $category->name;?></li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
    <div class="container">

            <div class="men-wear-bottom">
                <div class="col-sm-8 men-wear-right">
                    <h4>Exclusive <?= $category->name;?><span>Collections</span></h4>
                    <h2><?= $category->meta_title;?></h2>
                    <p><?= $category->description;?></p>
                </div>
                <div class="clearfix"></div>
            </div>

        <div class="w3_agile_latest_arrivals">
            <?foreach($products as $product):?>
                <div class="col-md-3 product-men single">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="<?= $product->getImage();?>" alt="" class="pro-image-front">
                            <img src="<?= $product->getImage();?>" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="<?= Url::toRoute(['product/single', 'id'=>$product->id])?>" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="<?= Url::toRoute(['product/single', 'id'=>$product->id])?>"><?= $product->name;?></a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$<?= $product->price;?></span>
                            </div>
                            <a href="<?= Url::toRoute(['cart/add', 'id'=>$product->id])?>" data-id="<?= $product->id?>" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart"></i>Add to cart</a>

                        </div>
                    </div>
                </div>
            <? endforeach;?>
            <div class="clearfix"> </div>
            <!--//slider_owl-->
        </div>

    </div>
</div>
<!-- //mens -->
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

