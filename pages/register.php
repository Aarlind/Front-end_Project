<?php
require_once '../controllers/ControllerMenu.php';
session_start();

$controller = new ControllerMenu;
if (isset($_POST['submit'])) {
  $controller->insertData($_POST);
  if ($controller->validateRegisterEmptyData($_POST) == true) {
    header("Location: register.php");
  } else {
    header("Location: successfully.php");
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="../css/logregister.css?version=51" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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
          <?php
          if (isset($_SESSION['email'])) {
          ?>

            <li><a class="login-a" href="../pages/index.php">Home</a></li>
            <li><a class="login-a" href="../pages/shop.php">Shop</a></li>
            <li><a class="login-a" href="../pages/meettheteam.php">Meet the Team</a></li>
          <?php
          }
          ?>
          <li><a class="login-a" href="../pages/contact.php">Contact</a></li>
          <li><a class="login-a" href="../pages/register.php">Sign Up</a></li>
          <li><a class="login-a" href="../pages/login.php">Login</a></li>

        </ul>
      </div>
    </div>
    <div class="registerpg">
      <p class="headers-paragraphs">Register</p>
    </div>
    <hr>
    <div class="register">
      <h1>Register</h1>
      <form method="POST">

        <div class="personal-info">
          <div class="emri-div">
            <div class="label-div">
              <label for="Emri">Emri</label>
            </div>
            <div>
              <input name="emri" class="r-input" id="input-emri" type="text" placeholder="Emri" />
            </div>
          </div>


          <div class="mbiemri-div">
            <div class="label-div">
              <label for="Mbiemri">Mbiemri</label>
            </div>
            <div>
              <input name="mbiemri" class="r-input" id="input-mbiemri" type="text" placeholder="Mbiemri" />
            </div>
          </div>

          <div class="email-div">
            <div class="label-div">
              <label for="Email">Email</label>
            </div>
            <div>
              <input name="email" class="r-input" id="input-email" type="email" placeholder="Emaili Juaj" />
            </div>
          </div>

          <div class="pass-div">
            <div class="label-div">
              <label for="Password">Passwordi</label>
            </div>
            <div>
              <input name="password" class="r-input" id="input-pass" type="password" placeholder="Passwordi" />
            </div>
          </div>
        </div>



        <div class="phone-div">
          <div class="phone-label">
            <label for="Numri">Nr Telefonit</label>
          </div>
          <div>
            <input name="telefoni" class="r-input" id="input-phone" type="number" placeholder="Nr Telefonit" />
          </div>
        </div>

        <div class="birthdate-div">
          <label class="birthday-label" for="birthday">Data e Lindjes:</label>
          <input name="datalindjes" class="r-input" id="input-birthday" type="date" id="birthday" name="birthday">
        </div>

        <div class="gjinia">
          <label for="gjinia">Gjinia</label>
          <div class="gjiniadiv">
            <input name="gjinia" class="gender" type="checkbox" id="male" value="M">
            <label for="mashkull">Mashkull</label>
            <div>
              <input name="gjinia" class="gender" type="checkbox" id="female" value="F">
              <label for="femer">Femer</label>
            </div>
          </div>
        </div>


        <div class="slctimg">
          <label for="img">Shkarko Foto <i>(sipas deshires)</i></label>
          <input name="image" type="file" id="imgslct" name="img" accept="image/*">
        </div>

        <div class="container">
          <div class="shteti-group">
            <label for="">Shteti</label>
            <select name="shteti" class="slct" id="select1" name="select1" onchange="populate(this.id,'select2')">
              <option value="">Selektoni...</option>
              <option value="Kosova">Kosova</option>
              <option value="Shqiperia">Shqiperia</option>
              <option value="Mali Zi">Mali Zi</option>
              <option value="Maqedonia">Maqedonia</option>
              <option value="Serbia">Serbia</option>
            </select>
          </div>
          <div class="qyteti-group">
            <label for="">Qyteti</label>
            <select name="qyteti" class="slct" name="select2" id="select2">
              <option value="" selected="selected">Zgjidh qytetin</option>
            </select>
          </div>
        </div>

        <div>

          <p class="termsparagraph">
            By creating an account,
            you agree to buyTime's
            <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>
          </p>
        </div>

        <div class="submit-div">
          <button onclick="return redirectToLogin()" name="submit" class="registerbutton" type="submit">Register</button>
        </div>

      </form>
    </div>






    <div class="footer">
      <div class="social-logos">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-instagram"></a>
      </div>
      <p class="footer-paragraph">
        <a href="#privacy">Privacy</a> |
        <a href="#cookie-policy">Cookie Policy</a>
        <br />
        2021 Copyright buyTime
      </p>
    </div>
  </div>
</body>

</html>