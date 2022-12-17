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
    // session_start();
    if (isset($_SESSION['erro'])) {
        echo $_SESSION['erro'];
        unset($_SESSION['erro']);
    }
    ?>
    <?php
    include 'component/header_2.php'
    ?>
    <div style="height: 800px ;margin-bottom: 50px; margin-top: 50px;">
    <div class="content1_signup">
            <div class="text_signup">
                <span class="text_transform">REGISTRATION</span>
            </div>
            <form method="POST" action="./component/process_register.php">
                <div class="form_signup">
                    <div class="row1">
                        <div style="margin-top: 20px;">
                                <input type="text" style="width: 94%; height: 100%; margin: 10px auto;border: 1px solid black;padding: 12px 15px;" name="name" placeholder="Name...">                                                                              
                                <input type="text" style="width: 94%; height: 100%; margin: 10px auto;border: 1px solid black;padding: 12px 15px;" name="address" placeholder="Adress">                                                                                    
                                <input type="number" style="width: 94%; height: 100%; margin: 10px auto;border: 1px solid black;padding: 12px 15px;" name="phone_number" placeholder="Phone number...">                                                                             
                                <input type="email" style="width: 94%; height: 100%; margin: 10px auto;border: 1px solid black;padding: 12px 15px;" name="email" placeholder="Email...">                                                                                     
                                <input type="password" style="width: 94%; height: 100%; margin: 10px auto;border: 1px solid black;padding: 12px 15px;" name="password" placeholder="Password...">                                               
                        </div>
                        <div style="display: flex;margin-top: 5px;">
                            <input type="checkbox" id="cb">
                            <label style="margin-top: 10px;" for="cb" class="text__">I agree to the Terms of Service and Privacy Policy</label>
                        </div>
                        <div>
                            <button style="text-transform: uppercase !important; list-style-type: none;" class="btn_signup" type="submit">Sign up</button>
                        </div>                
                    </div>
                </div>                 
            </form>               
        </div>
    </div>

    <?php
    include 'component/footer.php'
    ?>
    <?php include('jquery.php') ?>
</body>
<style>
    .content1__signup {
    width: 100%;
    height: 100%;
    margin: 0 auto;
}

    .container__content__signup {
        width: 90%;
        height: 100%;
        margin: 65px auto;
    }

    .text_signup {
        width: 100%;
        height: 16%;
        padding: 80px auto;
        font-size: 64px;
        font-weight: 700;
        text-align: center;
        line-height: 80px;
        margin-bottom: 30px;
    }

    .text_transform {
        font-size: 64px;
        font-weight: 700;
        -webkit-text-stroke: 1px #000;
        color: transparent;
        margin: auto;
        font-family: 'Raleway', sans-serif;
    }

    .form_signup {
        width: 80%;
        height: 50%;
        margin: 35px auto;
        border-left: 1px solid black;
        border-right: 1px solid black;
    }

    .row1 {
        width: 50%;
        height: 100%;
        margin: auto;
    }

    .input_form {
        margin: 10px auto;
        border: 1px solid black;
        padding: 15px 20px;
    }

    .position_input {
        width: 100%;
        height: 100%;
    }

    .text__ {
        line-height: 20px;
        font-size: 16px;
        margin-top: -1px;
        margin-left: 2px;
        font-weight: 300;
        color: dimgray;
    }

    .btn_signup {
        text-decoration: none;
        width: 75%;
        height: 40px;
        padding: 10px;
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
</style>
</html>
