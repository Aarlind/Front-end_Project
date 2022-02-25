<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/meettheteam_contact.css">
    <script src="../js/Log_In_Register.js.js"></script>
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
        <!-----------end of Header--------->

        <div class="general-content">
            <div class="contact-content">
                <h1>Kontakti</h1>
                <h2>Adresa: </h2>
                Rruga Muharrem Fejza nr.53, Prishtine, Kosova
                <h2>Emaili</h2>
                contact@buytime.com
            </div>
            <div class="contact-div">
                <div class="contacts-child">
                    <p class="inputsname">Emri</p> <input class="averageinputs" id="emri" type="text">
                </div>
                <div class="contacts-child">
                    <p class="inputsname">Mbiemri</p> <input class="averageinputs" type="text">
                </div>
                <div class="contacts-child">
                    <p class="inputsname">Adresa</p> <input class="adress-input" type="text" name="" placeholder="Qyteti, Rruga, Nr Shtëpisë, Zip Kodi">
                </div>
                <div class="contacts-child">
                    <p class="inputsname">Email</p> <input class="averageinputs" id="email" type="text">
                </div>
                <div class="contacts-child">
                    <p class="inputsname">Nr Tel</p> <input class="averageinputs" type="text">
                </div>
                <div class="contacts-child">
                    <div>
                        <p class="inputsname">Subjekti</p> <input id="subjekti-input" type="text">
                    </div>
                </div>
                <div class="contacts-child">
                    <p class="inputsname">Mesazhi</p> <textarea name="" id="mesazhi-input" cols="30" rows="10"></textarea>

                </div>
                <div class="button-div">
                    <button id="button" type="submit">Dërgo</button>

                </div>

            </div>

        </div>




        <!-----------Footer--------->
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