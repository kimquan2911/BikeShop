<?php
//session_start();
if (isset($_COOKIE['remember'])) {
    $token = $_COOKIE['remember'];
    require_once('db/connect.php');
    $sql = "select * from users where token='$token' limit 1";
    $result = mysqli_query($connect, $sql);
    $number_row = mysqli_num_rows($result);
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['name'] = $each['name'];
}
if (isset($_SESSION['id'])) {
    header('location:index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php include('css-libary.php') ?>
    <title>BikeShop</title>
</head>

<body>
    <?php
    include 'component/header_2.php'
    ?>
    <div class="container" style="margin-bottom: 50px;">
        <div style="width: 100%; height: 600px; margin: 65px auto;">
            <div style="width: 100%; height: 16%; font-size: 64px; font-weight: 700; text-align: center; line-height: 80px;text-transform: uppercase !important;list-style-type: none;">
                <span style="font-size: 64px;
                            font-weight: 700;
                            -webkit-text-stroke: 1px #000;
                            color: transparent;
                            margin: auto;
                            font-family: 'Raleway', sans-serif;">LOGIN</span>
            </div>
                <form method="POST" action="./component/process_login.php">
                    <div style="width: 1094px;
                                height: 38%;
                                margin: 15px auto;
                                border-left: 1px solid black;
                                border-right: 1px solid black;">
                        <div style="width: 50%;
                                    height: 100%;
                                    margin: auto;">
                            <div style="margin-top: 20px;">
                                <input style="width: 100%; height: 100%; margin: 30px auto;border: 1px solid black;padding: 15px 20px;" type="email" class="form-control" name="email" placeholder="Email...">                             
                                <input style="width: 100%; height: 100%; margin: 30px auto;border: 1px solid black;padding: 15px 20px;" type="password" class="form-control" name="password" placeholder="Password...">                                             
                            </div>
                            <div style="display: flex; margin-top: 10px;">
                                <input name="remember" type="checkbox">
                                <label style="  line-height: 18px;
                                                font-size: 16px;
                                                margin-top: 8px;
                                                margin-left: 5px;
                                                font-weight: 300;
                                                color: dimgray;">Remember</label> 
                            </div>
                        </div>         
                        <button class="loginbtn">LOGIN</button>
                        <hr style="width: 50%; margin: 0 auto; height: 1.5px;" >
                        <a href="register.php" class="loginbtn">CREATE ACCOUNT</a>
                    </div>
                </form>
        </div>
    </div>
    <style>
        .loginbtn{
            text-decoration: none;
            width: 40%;
            height: 40px;
            padding: 8px;
            background-color: transparent;
            color: dimgrey;
            border: 1px solid dimgrey;
            top: 65px;
            font-size: 13px;
            font-weight: 600;
            display: block;
            text-align: center;
            transition: all .4s;
            margin: 28px auto;
        }
        .loginbtn:hover{
            background: black;
            color:white;
        }
    </style>
    <?php
    include 'component/footer.php'
    ?>
    <?php include('jquery.php') ?>
</body>

</html>