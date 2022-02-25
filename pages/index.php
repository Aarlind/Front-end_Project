<?php
require '../controllers/ControllerMenu.php';
session_start();

// $menu = new ControllerMenu;
// $printAll = $menu->validateDataa();
// echo $printAll;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script>
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
                    <?php
                    if (isset($_SESSION['Roli']) && $_SESSION['Roli'] == 1) {
                    ?>

                        <a target="_blank" class="login-a" href="../pages/dashboard.php">Dashboard</a>
                    <?php

                    }
                    ?>
                    <a class="login-a" href="../pages/index.php">Home</a>
                    <a class="login-a" href="../pages/contact.php">Contact</a>
                    <a class="login-a" href="../pages/shop.php">Shop</a>
                    <a class="login-a" href="../pages/meettheteam.php">Meet the Team</a>
                    <a class="login-a" href="logout.php">Logout</a>

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


            <div onclick="shopRedirect()" class="item-div">

                <div class="img-div">
                    <img class="image" src="../img/image619e1cc1eb9f7.webp" alt="">
                </div>
                <div class="product-name-div">
                    <div class="rating-css">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="emri-h1">Laptop</p>
                    <p class="cmimi-h1">$499.00</p>
                    <button class="buy-button">Buy</button>
                    <button class="cart-button">Add to Cart</button>

                </div>


            </div>

            <div onclick="shopRedirect()" class="item-div" id="item-div">
                <div class="img-div">
                    <img class="image" src="../img/PC-FSP-Gaming-ku0107i0161te-CMT-510-PLUS-62 (1).webp" alt="">
                </div>
                <div class="product-name-div">
                    <div class="rating-css">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="emri-h1" id="gamingpcdiv">Gaming PC</p>
                    <div class="sale-div">
                        <p style="text-decoration: line-through;" class="cmimi-h1" id="sale">$1199.00</p>
                        <p style="color: red;" class="cmimi-h1" id="sale">$1049.00</p>
                    </div>
                    <button class="buy-button">Buy</button>
                    <button class="cart-button">Add to Cart</button>
                </div>
            </div>

            <div onclick="shopRedirect()" class="item-div">
                <div class="img-div">
                    <div class="best-seller">
                        <p>Best Seller</p>
                    </div>
                    <img class="image" src="../img/monitor-image5f7f02905006e.webp" alt="">
                </div>
                <div class="product-name-div">
                    <div class="rating-css">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <p class="emri-h1">Gaming Monitor</p>
                    <p class="cmimi-h1">$129.00</p>
                    <button class="buy-button">Buy</button>
                    <button class="cart-button">Add to Cart</button>
                </div>
            </div>
            <div onclick="shopRedirect()" class="item-div">
                <div class="img-div">
                    <img class="image" src="../img/mouse-image5d303c5487d84.webp" alt="">
                </div>
                <div class="product-name-div">
                    <div class="rating-css">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="emri-h1">Gaming Mouse</p>
                    <p class="cmimi-h1">$79.00</p>
                    <button class="buy-button">Buy</button>
                    <button class="cart-button">Add to Cart</button>
                </div>
            </div>
        </div>
        <div class="shop-redirect">
            <button onclick="shopRedirect()" class="button-shop-redirect">Click for more...</button>
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