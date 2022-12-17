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
    <?php include 'component/header_2.php'; ?>
    <!--/ End Header -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h4 style="color:black;font-size:40px">Contact</h4>
                                <h3>Enter contact information</h3>
                            </div>
                            <form class="form" method="post" action="./component/process_lienhe.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Name<span>*</span></label>
                                            <input name="name" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Address<span>*</span></label>
                                            <input name="address" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Email<span>*</span></label>
                                            <input name="email" type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Phone number<span>*</span></label>
                                            <input name="phone_number" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <label>Message<span>*</span></label>
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="single-head">
                            <div class="single-info">
                                <i class="fa fa-phone" style="color:#fff;background:#000"></i>
                                <h4 class="title">Hotline:</h4>
                                <ul>
                                    <li>0986538387</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="fa-regular fa-envelope" style="color:#fff;background:#000"></i>
                                <h4 class="title">Email:</h4>
                                <ul>
                                    <li><a href="mailto:kim@pinarello.com">kimquan@pinarello.com</a></li>
                                    <li><a href="mailto:support@pinarello.com">support@pinarello.com</a></li>
                                </ul>
                            </div>
                            <div class="single-info" >
                                <i class="fa fa-location-arrow" style="color:#fff;background:#000"></i>
                                <h4 class="title">Address</h4>
                                <ul>
                                    <li> Tân Hội- Đan Phượng - Hà Nội</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact -->

    <!-- Map Section -->

    <!--/ End Map Section -->

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

    <!-- Start Footer Area -->
    <?php include('./component/footer.php') ?>
    <!-- /End Footer Area -->
    <?php include('jquery.php') ?>
</body>
</html>