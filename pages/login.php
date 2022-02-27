<?php

require_once '../controllers/ControllerMenu.php';
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = new ControllerMenu();

    if ($data->validateData($email, $password) == true) {
        header("Location: index.php");
    } else {
        header("Location: login.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/logregister.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li><?php
                        if (isset($_SESSION['Roli']) && $_SESSION['Roli'] == 1) {
                        ?>
                            <a style="color: red;" target="_blank" class="login-a" href="../pages/dashboard.php">Dashboard</a>
                        <?php
                        }
                        ?>
                    </li>
                    <li><a class="login-a" href="../pages/contact.php">Contact</a></li>
                    <li><a class="login-a" href="../pages/register.php">Sign Up</a></li>
                    <li><a class="login-a" href="../pages/login.php">Login</a></li>

                </ul>
            </div>
        </div>
        <form method="POST">
            <div class="Loginform">
                <h1>Log In</h1>


                <input name="email" class="inputi" id="emailId" type="emri" placeholder="Enter Email">
                <input name="password" class="inputi" id="passId" type="password" placeholder="Enter Password">
                <div class="register-div"><span class="login-span">If you don't have an account click here:</span> <a class="login-a-register" href="../pages/register.php">Register</a><br><a href="#forgotpw">Forgot your Password?</a></div>

                <button name="submit" id="btn" class="submitbutton" type="submit">Log In</button>
            </div>

        </form>
        <div class="footer">
            <div class="social-logos">
                <a href="#" class="fa fa-facebook"></a>
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