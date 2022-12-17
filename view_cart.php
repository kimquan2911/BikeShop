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
    <?php
    $cart = "";
    $total = 0;
    if (isset($_SESSION['cart'])) {
        $cart = $_SESSION['cart'];
    }
    ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index.php">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="">Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Total</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (is_array($cart) || is_object($cart)) foreach ($cart as $id => $each) : ?>
                            <tr>
                                <td><img src="<?php echo $each['anh'] ?>" alt="" style="width: 130px;"></td>
                                <td>
                                    <p><?php echo $each['ten_san'] ?></p>
                                </td>
                                <td>
                                    <p style="color: #820813;"><?php echo $each['gia'] ?>$</p>
                                </td>
                                <td>
                                    <a href="./component/update_quantity_in_cart.php?id=<?php echo $id ?>&type=giam">
                                    <i class="fa-solid fa-minus"></i>
                                    </a>
                                    <?php echo $each['so_luong'] ?>
                                    <a href="./component/update_quantity_in_cart.php?id=<?php echo $id ?>&type=tang">
                                    <i class="fa-solid fa-plus"></i>
                                    </a>
                                </td>
                                <td>
                                    <p style="color: #820813;">
                                        <?php
                                        $sum = $each['gia'] * $each['so_luong'];
                                        $total += $sum;
                                        echo $sum . '$';
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <a href="./component/delete_cart.php?id=<?php echo $id ?>">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <h1 style="margin-top: 20px;font-family: 'Times New Roman', Times, serif;display: flex;">
                <p style="font-size: 30px;line-height: 50px;line-weight: 450; color:black">Total: <?php echo $total ?>$</p>
            </h1>
            <br>
        </div>
        <div class="container">
            <form method="POST" action="./component/process_order.php">
                <div class="form-group">
                    <label style="font-size: 18px;font-family: 'Times New Roman', Times, serif;">Name</label>
                    <input style="font-size: 14px;width: 60%;font-family: 'Times New Roman', Times, serif;" type="text" class="form-control" placeholder="Name..." name="name_receiver">
                </div>
                <div class="form-group">
                    <label style="font-size: 18px;font-family: 'Times New Roman', Times, serif;">Phone</label>
                    <input style="font-size: 14px;width: 60%;" type="text" class="form-control" name="phone_number_receiver" placeholder="Phone...">
                </div>
                <div class="form-group">
                    <label style="font-size: 18px;font-family: 'Times New Roman', Times, serif;">Address</label>
                    <input style="font-size: 14px;width: 60%;" type="text" class="form-control" placeholder="Address..." name="address_receiver">
                </div>
                <button class="btn btn-success">Order</button>
        </div>
    </div>
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
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <div>
        <?php
        include 'component/footer.php'
        ?>
    </div>

    <!-- End Shop Newsletter -->
    <?php include('jquery.php') ?>
</body>

</html>