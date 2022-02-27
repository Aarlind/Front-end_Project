<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully Register</title>
    <link rel="icon" href="../img/buytime-icon.png" type="image/icon type">
</head>
<style>
    body {
        background-color: green;
    }

    h1,
    h2 {
        color: black;
    }

    .succesful-div {
        margin-top: 400px;
        text-align: center;
        width: 100%;
    }

    a {
        text-decoration: none;
    }
</style>

<body>
    <div class="succesful-div">
        <h1>You have been registered successfully! <br></h1>
        <h2>Congratulations!!!</h2>
        <br>
        <a href="../pages/login.php">Proceed to the Login. . .</a>
    </div>

</body>

</html>