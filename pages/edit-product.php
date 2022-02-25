<?php
require '../controllers/ControllerMenu.php';

$menu = new ControllerMenu;
$currentMenu = $menu->editProduct($_GET['id']);

if (isset($_POST['submit'])) {
    $menu->update($_POST, $_GET['id']);
}

?>

<form method="POST">

    Lloji:
    <input type="text" name="lloji" value="<?php echo $currentMenu['Lloji']; ?>">
    <br>
    Emri:
    <input type="text" name="title" value="<?php echo $currentMenu['Emri']; ?>">
    <br>
    Cmimi:
    <input type="text" name="cmimi" value="<?php echo $currentMenu['Cmimi']; ?>">
    <br>
    Pershkrimi:
    <input type="text" name="pershkrimi" value="<?php echo $currentMenu['Pershkrimi']; ?>">
    <br>
    Fotografia:
    <input type="file" name="image" value="<?php echo $currentMenu['Fotografia']; ?>">
    <br>
    <button name="submit">Submit</button>
</form>