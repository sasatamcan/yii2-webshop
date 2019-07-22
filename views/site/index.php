<?
use yii\helpers\Url;

?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        <li data-target="#myCarousel" data-slide-to="4" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item4">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item5">
            <div class="container">
                <div class="carousel-caption">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-- The Modal -->
</div>
<!-- //banner -->
<div class="banner_bottom_agile_info">
    <div class="container">
        <div class="banner_bottom_agile_info_inner_w3ls">
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src="public/image/bottom1.jpg" alt=" " class="img-responsive" />
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src="public/image/bottom2.jpg" alt=" " class="img-responsive" />
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- schedule-bottom -->
<div class="schedule-bottom">
    <div class="col-md-6 agileinfo_schedule_bottom_left">
        <img src="public/image/mid.jpg" alt=" " class="img-responsive" />
    </div>
    <div class="col-md-6 agileits_schedule_bottom_right">
        <div class="w3ls_schedule_bottom_right_grid">
            <h3>Save up to <span>50%</span> in this week</h3>
            <p>Suspendisse varius turpis efficitur erat laoreet dapibus.
                Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>
            <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <h4>Customers</h4>
                <h5 class="counter">653</h5>
            </div>
            <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                <h4>Events</h4>
                <h5 class="counter">823</h5>
            </div>
            <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                <i class="fa fa-shield" aria-hidden="true"></i>
                <h4>Awards</h4>
                <h5 class="counter">45</h5>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
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



<!--/grids-->
<!-- /new_arrivals -->
<div class="new_arrivals_agile_w3ls_info">
    <div class="container">
        <h3 class="wthree_text_info">New <span>Arrivals</span></h3>
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <?foreach($categories as $category):?>
                <? $categoryIds[] = $category->id;?>
                <li> <?= $category->name;?></li>
                <? endforeach;?>
            </ul>
            <div class="resp-tabs-container">
                <!--/tab_one-->
                <? foreach ($categoryIds as $categoryId):?>
                 <div class="tab1">
                    <? foreach (\app\models\Product::getRecent($categoryId)as $product):?>
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="<?= $product->getImage();?>" alt="" class="pro-image-front">
                                <img src="<?= $product->getImage();?>" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="<?= Url::toRoute(['product/single', 'id'=>$product->id])?>" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="<?= Url::toRoute(['product/single', 'id'=>$product->id])?>"><?=$product->name?></a></h4>
                                <div class="info-product-price">
                                    <span class="item_price"><?= $product->price;?></span>
                                </div>
                                <a href="<?= Url::toRoute(['cart/add', 'id'=>$product->id])?>" data-id="<?= $product->id?>" class="btn btn-default add-to-cart" ><i class="fa fa-shopping-cart"></i>Add to cart</a>
<!--                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">-->
<!---->
<!--                                    <form action="#" method="post">-->
<!--                                        <fieldset>-->
<!--                                            <input type="hidden" name="cmd" value="_cart" />-->
<!--                                            <input type="hidden" name="add" value="1" />-->
<!--                                            <input type="hidden" name="business" value=" " />-->
<!--                                            <input type="hidden" name="item_name" value="Formal Blue Shirt" />-->
<!--                                            <input type="hidden" name="amount" value="30.99" />-->
<!--                                            <input type="hidden" name="discount_amount" value="1.00" />-->
<!--                                            <input type="hidden" name="currency_code" value="USD" />-->
<!--                                            <input type="hidden" name="return" value=" " />-->
<!--                                            <input type="hidden" name="cancel_return" value=" " />-->
<!--                                            <input type="submit" name="submit" value="Add to cart" class="button" />-->
<!--                                        </fieldset>-->
<!--                                    </form>-->
<!--                                </div>-->

                            </div>
                        </div>
                    </div>
                    <? endforeach;?>
                    <div class="clearfix"></div>
                </div>
                <? endforeach;?>
                <!--//tab_one-->

            </div>
        </div>
    </div>
</div>
<!-- //new_arrivals -->
<!-- /we-offer -->
<div class="sale-w3ls">
    <div class="container">
        <h6>We Offer Flat <span>40%</span> Discount</h6>

        <a class="hvr-outline-out button2" href="single.html">Shop Now </a>
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
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>24/7 SUPPORT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>MONEY BACK GUARANTEE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE GIFT COUPONS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>