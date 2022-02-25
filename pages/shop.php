<?php
session_start();
require_once '../controllers/ControllerMenu.php'


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Shop</title>
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../img/buytime-icon.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/script.js"></script>
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
                    <a class="login-a" href="../pages/login.php">Login</a>

                </ul>
            </div>
        </div>

        <div class="head-div1">
            <p class="headers-paragraphs">Shop</p>
        </div>
        <hr>
        <div class="big-div">
            <div class="content-div1">
                <?php
                $products = new ControllerMenu;
                $all = $products->readData();
                for ($i = 0; $i < count($all); $i++) {



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

                        <p class="cmimi-h1">' . $all[$i]['Cmimi'] . '</p>
                        <button class="buy-button">Buy</button>
                        <button class="cart-button">Add to Cart</button>

                    </div>


                </div>
        ';
                }
                ?>


                <!-- <div onclick="click2()" class="item-div" id="item-div">
                    <div class="img-div">
                        <img class="image" src="../img/PC-FSP-Gaming-ku0107i0161te-CMT-510-PLUS-62 (1).webp" alt="">
                    </div>
                    <div class="product-name-div">
                        // <div class="rating-css">
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star"></span>
                            // </div>
                        // <p class="emri-h2">Gaming PC</p>
                        // <div class="l-requirements hidden-content">
                            // <p class="emri-h1">Gaming PC</p>
                            // Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vel neque voluptatibus possimus nostrum unde totam dolor quisquam voluptate tempore suscipit? Rerum vel neque ipsa facilis. Id consequuntur quisquam sapiente?
                            // </div>
                        // <div class="sale-div">
                            // <p style="text-decoration: line-through;" class="cmimi-h1" id="sale">$1199.00</p>
                            // <p style="color: red;" class="cmimi-h1" id="sale">$1049.00</p>
                            // </div>


                        // <button class="buy-button">Buy</button>
                        // <button class="cart-button">Add to Cart</button>
                        // </div>
                    //
                </div>

                // <div onclick="click3()" class="item-div">
                    // <div class="img-div">
                        // <div class="best-seller">
                            // <p>Best Seller</p>
                            // </div>
                        // <img class="image" src="../img/monitor-image5f7f02905006e.webp" alt="">
                        // </div>
                    // <div class="product-name-div">
                        // <div class="rating-css">
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // </div>
                        // <p class="emri-h2">Gaming Monitor</p>
                        // <div class="l-requirements hidden-content">
                            // <p class="emri-h1">Gaming Monitor</p>
                            // Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vel neque voluptatibus possimus nostrum unde totam dolor quisquam voluptate tempore suscipit? Rerum vel neque ipsa facilis. Id consequuntur quisquam sapiente?
                            // </div>
                        // <p class="cmimi-h1">$129.00</p>
                        // <button class="buy-button">Buy</button>
                        // <button class="cart-button">Add to Cart</button>
                        // </div>
                    // </div>
                // <div onclick="click4()" class="item-div">
                    // <div class="img-div">
                        // <img class="image" src="../img/mouse-image5d303c5487d84.webp" alt="">
                        // </div>
                    // <div class="product-name-div">
                        // <div class="rating-css">
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star"></span>
                            // <span class="fa fa-star"></span>
                            // <span class="fa fa-star"></span>
                            // </div>
                        // <p class="emri-h2">Gaming Mouse</p>
                        // <div class="l-requirements hidden-content">
                            // <p class="emri-h1">Gaming Mouse</p>
                            // Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vel neque voluptatibus possimus nostrum unde totam dolor quisquam voluptate tempore suscipit? Rerum vel neque ipsa facilis. Id consequuntur quisquam sapiente?
                            // </div>
                        // <p class="cmimi-h1">$79.00</p>
                        // <button class="buy-button">Buy</button>
                        // <button class="cart-button">Add to Cart</button>
                        // </div>
                    // </div>
                //
            </div>
            // <div class="content-div2">
                // <div onclick="click5()" class="item-div">
                    // <div class="img-div">
                        // <img class="image" src="../img/HYPERX-Gejmerska-tastatura-Alloy-Origins-60-(Crna)--72.webp" alt="">
                        // </div>
                    // <div class="product-name-div">
                        // <div class="rating-css">
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star"></span>
                            // <span class="fa fa-star"></span>
                            // <span class="fa fa-star"></span>
                            // <span class="fa fa-star"></span>
                            // </div>
                        // <p class="emri-h2">Gaming Keyboard</p>
                        // <div class="l-requirements hidden-content">
                            // <p class="emri-h1">Gaming Keyboard</p>
                            // Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vel neque voluptatibus possimus nostrum unde totam dolor quisquam voluptate tempore suscipit? Rerum vel neque ipsa facilis. Id consequuntur quisquam sapiente?
                            // </div>
                        // <p class="cmimi-h1">$159.00</p>
                        // <button class="buy-button">Buy</button>
                        // <button class="cart-button">Add to Cart</button>
                        // </div>
                    // </div>
                // <div onclick="click6()" class="item-div">
                    // <div class="img-div">
                        // <img class="image" src="../img/headphones-image5e4fbebdaee28.webp" alt="">
                        // </div>
                    // <div class="product-name-div">
                        // <div class="rating-css">
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star"></span>
                            // <span class="fa fa-star"></span>
                            // </div>
                        // <p class="emri-h2">Gaming Headphones</p>
                        // <div class="l-requirements hidden-content">
                            // <p class="emri-h1">Gaming Headphones</p>
                            // Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vel neque voluptatibus possimus nostrum unde totam dolor quisquam voluptate tempore suscipit? Rerum vel neque ipsa facilis. Id consequuntur quisquam sapiente?
                            // </div>
                        // <p class="cmimi-h1">$49.00</p>
                        // <button class="buy-button">Buy</button>
                        // <button class="cart-button">Add to Cart</button>
                        // </div>
                    // </div>
                // <div onclick="click7()" class="item-div">
                    // <div class="img-div">
                        // <img class="image" src="../img/RAMPAGE-Gejmerska-stolica-KL-R53-Plus-(Crna,-Crvena)-52.webp" alt="">
                        // </div>
                    // <div class="product-name-div">
                        // <div class="rating-css">
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star"></span>
                            // </div>
                        // <p class="emri-h2">Gaming Chair</p>
                        // <div class="l-requirements hidden-content">
                            // <p class="emri-h1">Gaming Chair</p>
                            // Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vel neque voluptatibus possimus nostrum unde totam dolor quisquam voluptate tempore suscipit? Rerum vel neque ipsa facilis. Id consequuntur quisquam sapiente?
                            // </div>
                        // <p class="cmimi-h1">$399.00</p>
                        // <button class="buy-button">Buy</button>
                        // <button class="cart-button">Add to Cart</button>
                        // </div>
                    // </div>
                // <div onclick="click8()" class="item-div">
                    // <div class="img-div">
                        // <img class="image" src="../img/BYTEZONE-gejmerski-sto-ELITE-38.webp" alt="">
                        // </div>
                    // <div class="product-name-div">
                        // <div class="rating-css">
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // <span class="fa fa-star checked"></span>
                            // </div>
                        // <p class="emri-h2">Gaming Desk</p>
                        // <div class="l-requirements hidden-content">
                            // <p class="emri-h1">Gaming Desk</p>
                            // Lorem ipsum dolor sit amet consectetur adipisicing elit. In, vel neque voluptatibus possimus nostrum unde totam dolor quisquam voluptate tempore suscipit? Rerum vel neque ipsa facilis. Id consequuntur quisquam sapiente?
                            // </div>
                        // <p class="cmimi-h1">$249.00</p>
                        // <button class="buy-button">Buy</button>
                        // <button class="cart-button">Add to Cart</button>
                        // </div>
                    // </div> -->
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