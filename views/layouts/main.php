<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--//tags -->
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
    <div class="container">
        <ul>
            <?php if(Yii::$app->user->isGuest):?>
                <li><a href="<?= Url::toRoute(['auth/login'])?>"><i class="fa fa-unlock-alt" aria-hidden="true"></i>Login</a></li>
                <li><a href="<?= Url::toRoute(['auth/signup'])?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up</a></li>
            <?php else: ?>
                <?= Html::beginForm(['/auth/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->name . ')',
                    ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                )
                . Html::endForm() ?>
            <?php endif;?>
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-4 header-middle">
            <form action="#" method="get">
                <input type="search" name="search" placeholder="Search here..." required="">
                <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 logo_agile">
            <h1><a href="index.html"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-4 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
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
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="/">Home <span class="sr-only">(current)</span></a></li>
                            <li class=" menu__item"><a class="menu__link" href="site/about">About</a></li>
                            <ul class="catalog dropdown menu__item">
                                <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                            </ul>
                            <li class=" menu__item"><a class="menu__link" href="site/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="top_nav_right">

            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                    <a href="#" class="w3view-cart" onclick="return getCart()"><i class="fa fa-cart-arrow-down"> Cart</i></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- banner -->
<?= $content ?>
<!--grids-->
<!-- footer -->
<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-3 footer-left">
            <h2><a href="/"><span>E</span>lite Shoppy </a></h2>
            <p>
                Develop a successful business, always offering customers an optimal range of quality products
                for sports, tourism and active recreation with an optimal level of service and in accordance with the
                changing needs of customers..</p>
            <ul class="social-nav model-3d-0 footer-social w3_agile_social two">
                <li><a href="https://www.facebook.com/ithub.com.ua/" class="facebook">
                        <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                <li><a href="https://www.youtube.com/channel/UCn0Sm-0X6CNVDVkcYTJvktw" class="instagram">
                        <div class="front"><i class="fa fa-youtube-play " aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
            </ul>
        </div>
        <div class="col-md-9 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Our <span>Information</span> </h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="site/about">About</a></li>
                        <li><a href="site/contact">Contact</a></li>
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
                                <p>Zhytomyr, Victory Square, 10.

                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right">&copy 2019 Elite shoppy. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a>  |
            Developed by OlEkSaNdRaTmCn</p>
    </div>
</div>
<!-- //footer -->
<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Корзина</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success">Оформить заказ</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>'
]);

\yii\bootstrap\Modal::end();
//?>

<!-- login -->

<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="/public/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="/public/js/modernizr.custom.js"></script>
<!-- Custom-JavaScript-File-Links -->
<!-- cart-js -->
<script src="/public/js/minicart.min.js"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>

<!-- //cart-js -->
<!-- script for responsive tabs -->
<script src="/public/js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- //script for responsive tabs -->
<!-- stats -->
<script src="/public/js/jquery.waypoints.min.js"></script>
<script src="/public/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<script src="/public/js/jquery.cookie.js"></script>
<script src="/public/js/jquery.accordion.js"></script>
<script>
    $('.catalog').dcAccordion({
        speed: 300
    });
</script>
<script>
    function showCart(cart){
        $('#cart .modal-body').html(cart);
        $('#cart').modal();
    }

    function clearCart(){
        $.ajax({
            url: '/cart/clear',
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    }
    $('#cart .modal-body').on('click', '.del-item', function(){
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/del-item',
            data: {id: id},
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
    function getCart(){
        $.ajax({
            url: '/cart/show',
            type: 'GET',
            success: function(res){
                if(!res) alert('Ошибка!');
                showCart(res);
            },
            error: function(){
                alert('Error!');
            }
        });
        return false;
    }


    $('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id'),
        qty = $('#qty').val();
    $.ajax({
    url: '/cart/add',
    data: {id: id, qty: qty},
    type: 'GET',
    success: function(res){
    if(!res) alert('Ошибка!');
    showCart(res);
    },
    error: function(){
    alert('Error!');
    }
    });
    });
</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/public/js/move-top.js"></script>
<script type="text/javascript" src="/public/js/jquery.easing.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<style>
    .navbar-default {
        background: black !important;
        border: none !important;

    }
</style>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="/public/js/bootstrap.js"></script>
</body>
</html>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
