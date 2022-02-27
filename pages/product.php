<?php
session_start();
if ($_SESSION['email'] == '' && $_SESSION['password'] == '') {
    header("Location: login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Shop</title>
    <link rel="stylesheet" href="../css/productcss.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../img/buytime-icon.png" type="image/icon type">
    <script src="../js/script.js"></script>
</head>

<body>
    <div>
        <div class="header">
            <div class="logodiv">
                <img id="logo" src="/img/buytime-logo.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li><?php
                        if (isset($_SESSION['Roli']) && $_SESSION['Roli'] == 1) {
                        ?>

                            <a style="color: red;" target="_blank" class="login-a" href="../pages/dashboard.php">Dashboard</a>
                        <?php

                        }
                        ?>
                    </li>
                    <li><a class="login-a" href="../pages/index.php">Home</a></li>
                    <li><a class="login-a" href="../pages/contact.php">Contact</a></li>
                    <li><a class="login-a" href="../pages/shop.php">Shop</a></li>
                    <li><a class="login-a" href="../pages/meettheteam.php">Meet the Team</a></li>
                    <li><a class="login-a" href="logout.php">Logout</a></li>

                </ul>
            </div>
        </div>

        <div class="head-div1">
            <p class="headers-paragraphs">Product</p>
        </div>
        <hr>

        <div class="product-div">
            <div onclick="funksioni1()" class="item-div123" id="item-div">
                <div class="img-div">
                    <img class="image" src="../img/image619e1cc1eb9f7.webp" alt="">
                </div>
                <div class="product-name-div">
                    <h1 class="emri-h1">Laptop</h1>
                    <h1 class="cmimi-h1">500$</h1>
                    <button class="buy-button">Buy</button>
                </div>
            </div>
        </div>
        <div class="item-div hidden-content"">
            <div class=" img-div">
            <img class="image" src="../img/PC-FSP-Gaming-ku0107i0161te-CMT-510-PLUS-62 (1).webp" alt="">
        </div>
        <div class="product-name-div">
            <h1 class="emri-h1">Gaming PC</h1>
            <h1 class="cmimi-h1">1200$</h1>
            <button class="buy-button">Buy</button>
        </div>
    </div>
    <div class="item-div hidden-content">
        <div class="img-div">
            <img class="image" src="../img/monitor-image5f7f02905006e.webp" alt="">
        </div>
        <div class="product-name-div">
            <h1 class="emri-h1">Gaming Monitor</h1>
            <h1 class="cmimi-h1">120$</h1>
            <button class="buy-button">Buy</button>
        </div>
    </div>
    <div class="item-div hidden-content">
        <div class="img-div">
            <img class="image" src="../img/mouse-image5d303c5487d84.webp" alt="">
        </div>
        <div class="product-name-div">
            <h1 class="emri-h1">Gaming Mouse</h1>
            <h1 class="cmimi-h1">80$</h1>
            <button class="buy-button">Buy</button>
        </div>
    </div>
    </div>

    <div class="footer1">
        <div class="social-logos"><a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <p class="footer-paragraph">
            <a href="#privacy">Privacy</a> |
            <a href="#cookie-policy">Cookie Policy</a>
            <br>
            2021 Copyright buyTime
        </p>
    </div>
    </div>


</body>

</html>