<?
use yii\helpers\Url;
use app\models\Atribute;
?>
<div class="page-head_agile_info_w3l">
    <div class="container">
        <h3>Single <span>Page </span></h3>
        <!--/w3_short-->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

                <ul class="w3_short">
                    <li><a href="/">Home</a><i>|</i></li>
                    <li>Single Page</li>
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
            <div class="description">
                <h5>Check delivery, payment options and charges at your location</h5>
                <form action="#" method="post">
                    <input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
                    <input type="submit" value="Check">
                </form>
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
            <div class="occasional">
                <h5>Types :</h5>
                <div class="colr ert">
                    <label class="radio"><input type="radio" name="radio" checked=""><i></i>Casual Shoes</label>
                </div>
                <div class="colr">
                    <label class="radio"><input type="radio" name="radio"><i></i>Sneakers </label>
                </div>
                <div class="colr">
                    <label class="radio"><input type="radio" name="radio"><i></i>Formal Shoes</label>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="occasion-cart">
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                    <form action="#" method="post">
                        <fieldset>
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="business" value=" ">
                            <input type="hidden" name="item_name" value="Wing Sneakers">
                            <input type="hidden" name="amount" value="650.00">
                            <input type="hidden" name="discount_amount" value="1.00">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="return" value=" ">
                            <input type="hidden" name="cancel_return" value=" ">
                            <input type="submit" name="submit" value="Add to cart" class="button">
                        </fieldset>
                    </form>
                </div>

            </div>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                <li class="share">Share On : </li>
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
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
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <form action="#" method="post">
                                <fieldset>
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="business" value=" ">
                                    <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
                                    <input type="hidden" name="amount" value="30.99">
                                    <input type="hidden" name="discount_amount" value="1.00">
                                    <input type="hidden" name="currency_code" value="USD">
                                    <input type="hidden" name="return" value=" ">
                                    <input type="hidden" name="cancel_return" value=" ">
                                    <input type="submit" name="submit" value="Add to cart" class="button">
                                </fieldset>
                            </form>
                        </div>

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
<!--grids-->
<!-- footer -->
<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-3 footer-left">
            <h2><a href="index.html"><span>E</span>lite Shoppy </a></h2>
            <p>Lorem ipsum quia dolor
                sit amet, consectetur, adipisci velit, sed quia non
                numquam eius modi tempora.</p>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="pinterest">
                        <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
            </ul>
        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Our <span>Information</span> </h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="mens.html">Men's Wear</a></li>
                        <li><a href="womens.html">Women's wear</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="typography.html">Short Codes</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-5 sign-gd-two">
                    <h4>Store <span>Information</span></h4>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Phone Number</h6>
                                <p>+1 234 567 8901</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Location</h6>
                                <p>Broome St, NY 10002,California, USA.

                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href="single.html"><img src="/public/image/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/public/image/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/public/image/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/public/image/t4.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/public/image/t1.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/public/image/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/public/image/t3.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/public/image/t2.jpg" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="/public/image/t4.jpg" alt=" " class="img-responsive" /></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="agile_newsletter_footer">
            <div class="col-sm-6 newsleft">
                <h3>SIGN UP FOR NEWSLETTER !</h3>
            </div>
            <div class="col-sm-6 newsright">
                <form action="#" method="post">
                    <input type="email" placeholder="Enter your email..." name="email" required="">
                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="clearfix"></div>
        </div>
        <p class="copy-right">&copy 2017 Elite shoppy. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>

