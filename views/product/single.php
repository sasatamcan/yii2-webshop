<?
use yii\helpers\Url;
use app\models\Atribute;
?>
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3><?= $product->name;?></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="/">Home</a><i>|</i></li>
                    <li><?= $product->name;?></li>
                </ul>
            </div>
        </div>
        <!--//w3_short-->
    </div>
</div>

<!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="col-md-4 single-right-left ">
            <div class="grid /public/image_3_of_2">
                <div class="flexslider">

                    <ul class="slides">
                        <li data-thumb="">
                            <div class="thumb-image"> <img src="<?= $product->getImage();?>" data-imagezoom="true" class="img-responsive"> </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-8 single-right-left simpleCart_shelfItem">
            <h3><?= $product->name;?></h3>
            <p><span class="item_price">$<?= $product->price;?></span></p>
            <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
            </div>
            <div class="color-quality">
                <div class="color-quality-right">
                    <ul>
                        <?php foreach($atributes as $atribute):?>

                            <li><b><?= Atribute::getAtributeById($atribute->atribute_id)['name'];?></b> - <?= $atribute->value?> </li>

                        <? endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="">
                <label>Quantity:</label>
                <input type="text" value="1" id="qty" />

                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="btn btn-fefault add-to-cart cart">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart
                    </a>
            </div>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                <li class="share">Share On : </li>
                <li><a href="https://www.facebook.com/ithub.com.ua/" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="https://www.youtube.com/channel/UCn0Sm-0X6CNVDVkcYTJvktw" class="instagram">
                        <div class="front"><i class="fa fa-youtube-play " aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
            </ul>

        </div>
        <div class="clearfix"> </div>
        <!-- /new_arrivals -->
        <div class="responsive_tabs_agileits">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Description</li>
                </ul>
                <div class="resp-tabs-container">
                    <!--/tab_one-->
                    <div class="tab1">

                        <div class="single_page_agile_its_w3ls">
                            <h6><h3><?= $product->name;?></h3></h6>
                            <p class="w3ls_para"><?= $product->content;?></p>
                            <ul>
                                <?php foreach($atributes as $atribute):?>

                                    <li><b><?= Atribute::getAtributeById($atribute->atribute_id)['name'];?></b> - <?= $atribute->value?> </li>

                                <? endforeach;?>
                            </ul>
                        </div>
                    </div>
                    <!--//tab_one-->
                </div>
            </div>
        </div>
        <div class="single_page_agile_its_w3ls">
            <div class="bootstrap-tab-text-grids">

                <?= $this->render('/partials/comment',[
                    'product'=>$product,
                    'comments'=>$comments,
                    'commentForm'=>$commentForm
                ])?>
            </div>
        </div>
        <!-- //new_arrivals -->
        <!--/slider_owl-->

        <div class="w3_agile_latest_arrivals">
            <h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>
            <?foreach($latest as $last):?>
                <div class="col-md-3 product-men single">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="<?= $last->getImage();?>" alt="" class="pro-image-front">
                            <img src="<?= $last->getImage();?>" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="<?= Url::toRoute(['product/single', 'id'=>$last->id])?>" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="<?= Url::toRoute(['product/single', 'id'=>$last->id])?>"><?= $last->name;?></a></h4>
                            <div class="info-product-price">
                                <span class="item_price">$<?= $last->price;?></span>
                            </div>
                            <a href="<?= Url::toRoute(['cart/add', 'id'=>$last->id])?>" data-id="<?= $last->id?>" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart"></i>Add to cart</a>

                        </div>
                    </div>
                </div>
            <? endforeach;?>
            <div class="clearfix"> </div>
            <!--//slider_owl-->
        </div>
    </div>
</div>
<!--//single_page-->
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
