<?php
require '../controllers/ControllerMenu.php';
session_start();
if ($_SESSION['email'] == '' && $_SESSION['password'] == '') {
    header("Location: login.php");
    die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css?v=2">
    <script src="../js/script.js?v=1"></script>
    <link rel="icon" href="../img/buytime-icon.png" type="image/icon type">
</head>

<body>
    <div>
        <div class="header">
            <div class="logodiv">
                <img id="logo" src="../img/buytime-logo.png" alt="">
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
                    <li><a class="login-a" href="../pages/shop.php">Shop</a></li>
                    <li><a class="login-a" href="../pages/meettheteam.php">Meet the Team</a></li>
                    <li><a class="login-a" href="../pages/contact.php">Contact</a></li>
                    <li><a class="login-a" href="logout.php">Logout</a></li>

                </ul>
            </div>
        </div>
        <div class="head-div">
            <p class="headers-paragraphs">Welcome to Home Page! Enjoy the survey...</p>
        </div>
        <div class="head-div1 hidden-content">
            <p class="headers-paragraphs" style="color: rgb(122, 139, 108);">Home Page</p>
        </div>
        <hr>
        <!------dashboard img div------->
        <div class="dashboard-image">
            <br>
            <br>
            <br>
            <div class="teksti">
            </div>
            <h3>One-of-a- <br> Kind Items</h3>

            <img id="home-image" src="../img/img1.jpg" alt="">
        </div>
        <hr>
        <!-------Shop div----->
        <div class="content-div1">


            <?php
            $products = new ControllerMenu;
            $all = $products->readData();
            for ($i = 0; $i < 4; $i++) {



                echo '     <div onclick="click1()" class="item-div">

                    <div class="img-div">
                        <img class="image" src="' . $all[$i]['Fotografia'] . '" >
                    </div>
                    <div class="product-name-div">
                        <div class="rating-css">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p class="emri-h2">' . $all[$i]['Emri'] . '</p>
                        <div class="l-requirements hidden-content">
                            <p class="emri-h1">Laptop</p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vel neque voluptatibus possimus nostrum unde totam dolor quisquam voluptate tempore suscipit? Rerum vel neque ipsa facilis. Id consequuntur quisquam sapiente?
                        </div>

                        <p class="cmimi-h1">$' . $all[$i]['Cmimi'] . '</p>
                        <button class="buy-button">Buy</button>
                        <button class="cart-button">Add to Cart</button>

                    </div>


                </div>
        ';
            }
            ?>
            <div class="shop-redirect">
                <button onclick="shopRedirect()" class="button-shop-redirect">CLICK FOR MORE...</button>
            </div>
        </div>
        <hr>


        <!------Origin div------->
        <div class="our-origin">
            <p class="headers-paragraphs1 originpg">Our Origin</p>
            <p class="originpg">Our Site is a trendsetting online store, offering our first-rate products and exceptional customer service to shoppers
                <br> from the comfort of their own homes. We’re a business made up of innovators and forward-thinkers, with the drive and <br>
                wherewithal to constantly update and improve the online shopping experience.
                <br>
                <br>
                <br>
                <br>

                Our online store has become synonymous with quality, and we ensure a continuous variety of fantastic merchandise
                <br> that fit any budget. Check it out and start shopping today.
            </p>
        </div>
        <hr>
        <!------Slideshow div------->

        <div class="headerofslideshow">
            <p class="headers-paragraphs1">Slideshow</p>
        </div>
        <div class="slideshow-div">
            <img name="mySlide" id="slideshow" />

            <script>
                var fotoArray = [
                    "../img/slideshowfirstimg.PNG",
                    "../img/slideshowsecondimg.PNG",
                    "../img/slideshowthirdimg.PNG",
                    "../img/slideshowfourthimg.PNG"
                ]

                var i = 0;

                function ndrroImg() {
                    var x = document.getElementById('slideshow').src = fotoArray[i];
                    if (i < fotoArray.length - 1) {
                        i++;
                    } else {
                        i = 0;
                    }
                    setTimeout('ndrroImg()', 3000);

                }
                document.body.addEventListener('load', ndrroImg());
            </script>


        </div>
        <hr>
        <!------Map div------->
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="2500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=ubt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                </iframe>
                <a href="https://123movies-org.net"></a><br>
                <a href="https://www.embedgooglemap.net">embedded maps google</a>

            </div>
        </div>
        <div class="footer">
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