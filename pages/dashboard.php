<?php
require_once '../controllers/ControllerMenu.php';
$menu = new ControllerMenu();
if (isset($_POST['submitbutton'])) {
    $menu->insert($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../img/buytime-icon.png" type="image/icon type">
    <script src="../js/dashboard.js"></script>
</head>

<body>

    <div class="menu-bar">
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
                <button class="listbutton">
                    <li>Delete products</li>
                </button>
            </ul>
            <p id="menudashparagraph">Users</p>
            <hr>
            <ul>
                <button class="listbutton">
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
                <div id="statistic1" class="statistics"></div>
                <div id="statistic2" class="statistics"></div>
                <div id="statistic3" class="statistics"></div>

            </div>
            <div name="divat" class="editproduct">

                <table>
                    <p class="productparagraph">Modifiko Produkte</p>
                    <hr id="shtoprodukthr">
                    <tr>
                        <th>ID</th>
                        <th>Lloji Produktit</th>
                        <th>Emri</th>
                        <th>Cmimi</th>
                        <th>Pershkrimi</th>
                        <th>Fotografia</th>

                    </tr>

                    <?php
                    $m = new ControllerMenu;
                    $allProducts = $m->readData();
                    foreach ($allProducts as $produkti) : ?>
                        <tr>
                            <td><?php echo $produkti['ID']; ?></td>
                            <td><?php echo $produkti['Lloji']; ?></td>
                            <td><?php echo $produkti['Emri']; ?></td>
                            <td><?php echo $produkti['Cmimi']; ?></td>
                            <td><?php echo $produkti['Pershkrimi']; ?></td>
                            <td><?php echo $produkti['Fotografia']; ?></td>
                            <td><a style="color: red;" href="edit-product.php?id=<?php echo $produkti['ID']; ?>"></a></td>

                        </tr>
                    <?php endforeach; ?>

                    <!---php code...-->
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


    </div>



    </div>




</body>

</html>