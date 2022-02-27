<?php
require_once '../controllers/ControllerMenu.php';
session_start();
$menu = new ControllerMenu();
$getEmailIPerdoruesit = $_SESSION['email'];
if (isset($_POST['submitbutton'])) {
    $menu->insert($_POST, $getEmailIPerdoruesit);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css?version=51">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../img/buytime-icon.png" type="image/icon type">
    <script src="../js/dashboard.js?version=51"></script>
</head>

<body>

    <div class="menu-bar">
        <a class="returntohomepage" href="index.php">&#171; RETURN TO HOME PAGE</a>
    </div>
    <div class="general-content">
        <div class="menu-div">
            <p id="menuparagraph">MENU</p>
            <button onclick="myFunction()" id="show-button">&#187</button>
        </div>
        <div class="dash-header">

        </div>



        <div class="dashboard-menu" id="dashboard-div">
            <p id="menudashparagraph">Dashboard</p>
            <hr>
            <ul>
                <button onclick="showDashboard()" class="listbutton">
                    <li>Dashboard</li>
                </button>

            </ul>
            <p id="menudashparagraph">Products</p>
            <hr>
            <ul>
                <button onclick="addProducts()" class="listbutton">
                    <li>Add products</li>
                </button>
                <button onclick="editProducts()" class="listbutton">
                    <li>Edit products</li>
                </button>
                <button onclick="deleteProducts()" class="listbutton">
                    <li>Delete products</li>
                </button>
            </ul>
            <p id="menudashparagraph">Users</p>
            <hr>
            <ul>
                <button onclick="listOfUsers()" class="listbutton">
                    <li>List of users</li>
                </button>
            </ul>
            <p id="menudashparagraph">Sales</p>
            <hr>
            <ul>
                <button class="listbutton">
                    <li>List of products</li>
                </button>
                <button class="listbutton">
                    <li>Best-selling products</li>
                </button>
                <button class="listbutton">
                    <li>Less sold products</li>
                </button>
            </ul>
            <p id="menudashparagraph">Orders</p>
            <hr>
            <ul>
                <button class="listbutton">
                    <li>Completed orders</li>
                </button>
                <button class="listbutton">
                    <li>Pending orders</li>
                </button>
            </ul>

        </div>


        <div class="dashboard">
            <div name="divat" class="dashboard-content">
                <div id="statistic1" class="statistics">
                    <p class="dash-paragraph">Numri i Perdorueseve</p>
                    <p class="userNumberP"><?php
                                            $userNumbers = $menu->getUsers();
                                            echo $userNumbers;
                                            ?></p>
                    <hr class="dotedHr">



                </div>
                <div id="statistic2" class="statistics">
                    <p class="dash-paragraph">Numri i Produkteve</p>
                    <p class="productsNumberP"><?php
                                                $productsNumbers = $menu->getProducts();
                                                echo $productsNumbers;
                                                ?></p>
                    <hr class="dotedHr">
                </div>
                <div id="statistic3" class="statistics">
                    <p class="dash-paragraph">Numri i Perdorueseve</p>
                    <p class="adminNumbersP"><?php
                                                $adminNumbers = $menu->getAdmins();
                                                echo $adminNumbers;
                                                ?></p>
                    <hr class="dotedHr">
                </div>
                <div class="generaldashboardinfo">

                </div>


            </div>

            <!-- edit div --->
            <div name="divat" class="editproduct">

                <table>
                    <p class="productparagraph">Modifiko Produkte</p>
                    <hr id="shtoprodukthr">
                    <tr>

                        <th>Lloji Produktit</th>
                        <th>Emri</th>
                        <th>Cmimi</th>
                        <th>Pershkrimi</th>
                        <th>Fotografia</th>
                        <th style="color: red;"></th>

                    </tr>

                    <?php
                    $m = new ControllerMenu;
                    $allProducts = $m->readData();
                    foreach ($allProducts as $produkti) : ?>
                        <tr>

                            <td><?php echo $produkti['Lloji']; ?></td>
                            <td><?php echo $produkti['Emri']; ?></td>
                            <td><?php echo $produkti['Cmimi']; ?></td>
                            <td><?php echo $produkti['Pershkrimi']; ?></td>
                            <td><?php echo $produkti['Fotografia']; ?></td>

                            <td><button class="editbutton"><a href="edit-product.php?id=<?php echo $produkti['ID']; ?>">EDIT</a></button></td>

                        </tr>
                    <?php endforeach; ?>


                </table>

            </div>
            <!--shtop produktin-->
            <form method="POST">
                <div name="divat" class="addproductscontent">
                    <div>
                        <p class="addparag"">Shto Produktin</p>
                </div>
                <div class=" addproducts">
                            <tr>
                                <th>
                                    <div class="inp">
                                        <label>Lloji Produktit</label>
                                        <input name="lloji" class="r-input" type="text" />
                                    </div>
                                </th>
                                <th>
                                    <div class="inp">
                                        <label>Emri</label>
                                        <input name="emri" class="r-input" type="text" />
                                    </div>
                                </th>
                                <th>
                                    <div class="inp">
                                        <label>Cmimi</label>
                                        <input name="cmimi" class="r-input" type="text" />
                                    </div>
                                </th>
                                <th>
                                    <div class="inp">
                                        <label>Pershkrimi</label>
                                        <input name="pershkrimi" class="r-input" type="text" />
                                    </div>
                                </th>
                                <th>
                                    <div class="inp">
                                        <label>Fotografia</label>
                                        <input name="image" class="r-input" type="file" accept="image/*" />
                                    </div>
                                </th>

                            </tr>
                    </div>
            </form>
            <button name="submitbutton" id="addbutoni">Add Product</button>


        </div>
        <!---Delete product--->
        <div name="divat" class="deleteproducts">

            <table>
                <p class="productparagraph">Fshij Produkte</p>
                <hr id="shtoprodukthr">
                <tr>

                    <th>Lloji Produktit</th>
                    <th>Emri</th>
                    <th>Cmimi</th>
                    <th>Pershkrimi</th>
                    <th>Fotografia</th>
                    <th style="color: red;"></th>

                </tr>

                <?php
                $m = new ControllerMenu;
                $allProducts = $m->readData();
                foreach ($allProducts as $produkti) : ?>
                    <tr>

                        <td><?php echo $produkti['Lloji']; ?></td>
                        <td><?php echo $produkti['Emri']; ?></td>
                        <td><?php echo $produkti['Cmimi']; ?></td>
                        <td><?php echo $produkti['Pershkrimi']; ?></td>
                        <td><?php echo $produkti['Fotografia']; ?></td>
                        <td><button name="editbutton" class="editbutton"><a style="background-color: red;" href="deleteProduct.php?id=<?php echo $produkti['ID']; ?>">DELETE</a></button></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <!--  ------------>

        <!---- List of users who have inserted products ------->
        <div name="divat" class="listofusers">

            <table>
                <p class="productparagraph">Lista</p>
                <p class="productparagraphchild">Lista e produkteve te cilat jane insertuar nga perdoruesit dhe emrat e perdorueseve</p>
                <hr id="shtoprodukthr">
                <tr>

                    <th class="thclass">Lloji Produktit</th>
                    <th class="thclass">Emri</th>
                    <th class="thclass">Cmimi</th>
                    <th class="thclass">Pershkrimi</th>
                    <th class="thclass">Fotografia</th>
                    <th class="thclass">Emri I Perdoruesit</th>

                </tr>

                <?php
                $m = new ControllerMenu;
                $allProducts = $m->readData();
                foreach ($allProducts as $produkti) : ?>
                    <tr>

                        <td class="tdclass"><?php echo $produkti['Lloji']; ?></td>
                        <td class="tdclass"><?php echo $produkti['Emri']; ?></td>
                        <td class="tdclass"><?php echo $produkti['Cmimi']; ?></td>
                        <td class="tdclass"><?php echo $produkti['Pershkrimi']; ?></td>
                        <td class="tdclass"><?php echo $produkti['Fotografia']; ?></td>
                        <td class="tdclass"><?php echo $produkti['EmailIPerdoruesit']; ?></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <!--- ----->
    </div>



    </div>




</body>

</html>