<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet The Team</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/meettheteam_contact.css">
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
                    <a class="login-a" href="../pages/login.php">Login</a>

                </ul>
            </div>
        </div>
        <div class="meetteam">
            <p class="headers-paragraphs">Meet The Team</p>
        </div>
        <hr>
        <div class="content-div">
            <div class="firstmember-div">


                <div class="img1">
                    <img class="member-images" src="../img/firstmember.jpg" alt="">
                    <div class="firstmember-name">
                        <p class="membername">Arlind Aliu</p>
                    </div>
                    <div class="firstmember-info">
                        <q>Sofware Engineer</q>
                    </div>
                </div>
            </div>
            <div class="secondmember-div">


                <div class="img2">

                    <img class="member-images" src="../img/secondmember.jpg" alt="">
                    <div class="secondmember-name">
                        <p class="membername">Rinor Rexhepi</p>
                    </div>
                    <div class="secondmember-info">
                        <q>Full Stack Developer</q>
                    </div>
                </div>
            </div>







        </div>

        <div class="contactus">
            <br>
            <p class="contactparagraph">Contact our dependable team of professionals today.</p>
            <br>
            <button onclick="contactRedirect()" class="contactbutton">Contact Us</button>
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