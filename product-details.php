<?php
require_once('utils/utility.php');
require_once('db/dbhelper.php');


$id = getGet('id');
$product = executeResult('select * from san_pham where id = ' . $id, true);
if ($product == null) {
    header('Location: index.php');
    die;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BikeShop</title>
    <?php include('css-libary.php') ?>
    <link rel="stylesheet" href="css/detail_product.css">

    <style>
        .container {
            color: #424646;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 16px;
            line-height: 47px;
        }
    </style>

</head>

<body>
    <?php
    include('./component/header_2.php');
    ?>
    <div class="container" style="margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-6">
                <div id="sliders">
                    <div class="item">
                        <img width="85%" style="margin-bottom: 40px;" src="<?= $product['anh'] ?>" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-dtl">
                    <div class="product-info">
                        <div class="product-name"><?= $product['ten_san'] ?></div>
                        <div class="product-price-discount"><span style="color: #820813;"><?= $product['gia'] ?> $</span><span style="color: #820813;" class="line-through"> - <?= $product['khuyen_mai'] ?> $</span></div>
                    </div>
                    <p style="text-align: justify;margin-bottom: 20px;"><?= $product['mo_ta'] ?></p>
                    <div class="product-count">
                        <a style="width: 100%;" href="component/add_to_cart_detail.php?id=<?php echo $product['id'] ?>"> <button style="background-color: #000;" type="button" class="btn btn-primary">ADD TO CART</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 50px;">
        <p style="font-size: 35px;line-height: 60px;font-weight: 450;margin-bottom: 20px;">MORE</p>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <?php include('./component/new_product.php') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/detail.js"></script>
    <?php
    include 'component/footer.php'
    ?>
</body>

</html>