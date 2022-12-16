<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Accessories</title>
    <?php include('css-libary.php') ?>
</head>

<body>
    <?php include 'component/header_2.php' ?>
    <!-- Start Product Area -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div id="sidebar" style="width: 100%;">
                <h2 style="font-size: 30px;line-height: 55px;line-weight: 150">ACCESSORIES</h2>
                    <div>
                        <ul style="margin-top: 20px;">
                            <li><a style="font-weight: bold;" href="">ALL</a>
                                <ul style="margin-top: 15px;">
                                    <li style="margin-top: 15px;"><a href="">WHEELS</a></li>
                                    <li style="margin-top: 15px;"><a href="">HANDLEBARS</a></li>
                                    <li style="margin-top: 15px;"><a href="">SADDLES</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="container" style="margin-top: 30px;">
                        <p style="margin-left: 43px;
                                margin-bottom: 10px;">PRICE</p>
                        <form method="get" action="" style="width: 70%;margin: auto;">
                            <div class="form-group" style="display:flex;justify-content: space-between;width: 100%;">
                                <input type="text" class="form-control" placeholder="...$" name="start" style="width:80px;height: 40px;font-size: 13px;">
                                <div style="font-size: 18px;font-weight: bold;">-</div>
                                <input type="text" class="form-control" placeholder="...$" name="end" style="width:80px;height: 40px;font-size: 13px;">
                            </div>
                            <button type="submit" class="btn btn-default" style="width: 100%;">APPLY</button>
                        </form>
                    </div>
                    <img style="margin-top: 20px;" src="./images/design_sua/LEFT_BANNER2.jpg" alt="" width="100%">
                </div>
            </div>
            <div class="col-sm-8">
                <img src="./images/design_sua/banner1234.jpg" alt="" width="100%">
                <div class="product-area section" style="margin-top: -70px;">
                    <div class="container">
                        <p style="font-size: 30px;line-height: 55px;line-weight: 150">COMPONENTS</p>
                        <div class="row" style="margin-top: -30px;">
                            <div class="col-12">
                                <div class="product-info">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                                            <div class="tab-single">
                                                <div class="row">
                                                    <?php include('./component/product_trangdiem.php') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ul class="pagination" style="display: flex;justify-content: center;margin-top: -50px">
                        <?php for ($i = 1; $i <= $so_trang; $i++) { ?>
                            <li style="height: 20px;">
                                <a href="?trang=<?php echo $i ?>">
                                    <?php echo $i ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php mysqli_close($connect) ?>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
include 'component/footer.php'
?>
<?php include('jquery.php') ?>

</html>