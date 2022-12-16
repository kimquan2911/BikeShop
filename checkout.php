<?php
require_once('utils/utility.php');
require_once('db/dbhelper.php');
require_once('api/checkout-form.php');
include './database/database.php';
$cart = [];
if (isset($_COOKIE['cart'])) {
    $json = $_COOKIE['cart'];
    $cart = json_decode($json, true);
}
$idList = [];
foreach ($cart as $item) {
    $idList[] = $item['id'];
}
if (count($idList) > 0) {
    $idList = implode(',', $idList);


    $sql = "select * from san_pham where id in ($idList) ";
    $cartList = executeResult($sql);
} else {
    $cartList = [];
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>BikeShop</title>
    <?php include('css-libary.php') ?>
</head>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <?php include 'component/header_2.php'; ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.php">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.php">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <form class="form" method="post" action="#">
        <!-- Start Checkout -->
        <section class="shop checkout section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="checkout-form">
                            <h2>Pay here</h2>
                            <p>Please register for faster checkout</p>
                            <!-- Form -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Shipping information</h3>
                                    <div class="form-group">
                                        <label for="usr">Name:</label>
                                        <input required="true" type="text" class="form-control" id="usr" name="fullname">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input required="true" type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone_number">Phone:</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                    <div class="form-group">
                                        <label for="note">Note:</label>
                                        <textarea class="form-control" rows="3" name="note" id="note"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!--/ End Form -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="order-details">
                            <!-- Order Widget -->
                            <div class="single-widget">
                                <h2>CART TOTALS</h2>
                                <?php
                                $count = 0;
                                $total = 0;
                                foreach ($cartList as $item) {
                                    $num = 0;
                                    foreach ($cart as $value) {
                                        if ($value['id'] == $item['id']) {
                                            $num = $value['num'];
                                            break;
                                        }
                                    }
                                    $total  += $num * $item['khuyen_mai'];
                                }
                                ?>
                                <div class="content">
                                    <ul>
                                        <li>Total<span>$ <?= $total ?></span></li>
                                        <li>(+)Transport<span>$10</span></li>
                                        <li class="last">Total<span>$<?= $total + 10000 ?></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-widget get-button">
                                <div class="content">
                                    <div class="button">
                                        <a href="checkout.php">
                                            <button class="btn btn-success" style="width: 100%;font-size: 32px;">COMPLETE</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Button Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <!--/ End Checkout -->

    <!-- Start Shop Services Area  -->
    <section class="shop-services section home" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>FREE RETURN</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>SUCURE PAYMENT</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>BEST PRICE</h4>
                        <p>Guaranteed price</p>
                    </div>
                </div>
    </section>
    <!-- End Shop Services -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <style>
                            .sub{
                                color: black !important;
                                background-color: white !important;
                                border: 1px solid ;
                            }
                            .sub:hover{
                                background-color:black !important;
                                color:white !important;
                            }
                        </style>
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get 10% off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn sub">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->

    <?php include('./component/footer.php') ?>

    <?php include('jquery.php') ?>
</body>

</html>