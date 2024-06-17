<?php
require_once('../includes/session_config.inc.php');
if(!isset($_SESSION["loggedIn"])){
    header("Location: ../index.php");
    exit();
  }
include("../includes/dashboard.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard | Sales</title>
    <link rel="stylesheet" href="../styles/sales/makesales.css">
</head>
<body>
    <div class="content">
        <div class="content-header">
            <h2>Sales Management <i class="fa-solid fa-cart"></i></h2>
            <div class="search-menu">
                <div class="menu-icon">&#9776;</div> <!-- Sandwich menu icon -->
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><i class="fas fa-search"></i></button> <!-- Search button -->
                </div>
            </div>
        </div><hr>

        <div class="card">
            <div class="card-body">
                <div class="form-body">
                    <form action="" method="post">
                        <div class="customer-details">
                            <div class="form-group">
                                <label for="">Customer's name:</label>
                                <input type="text" class="search-customers" id="search-customers" placeholder="Search customer here...">
                                <?php
                                    include("../customers/includes/getcustomers.inc.php");
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="">Mode of payment:</label>
                                <select name="payment-mode" id="payment-mode">
                                    <option value=""></option>
                                    <option value="cash">Cash</option>
                                    <option value="transfer">Transfer</option>
                                    <option value="P.O.S">P.O.S</option>
                                    <option value="dual">Dual payment</option>
                                </select>
                            </div>
                        </div>
                        <div class="add-product">
                            <div class="form-group">
                                <label for="">Product</label>
                                <input type="text" class="search-products" id="search-products" placeholder="Search products....">
                                <?php
                                    include("../product/includes/getproducts.inc.php");
                                ?><hr>

                               <div class="table"><hr>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Add to cart</th>
                                                <th>Order: <small>Quantity</small></th>
                                                <th>Visible:</th>
                                                <th>Price: </th>
                                                <th>Quantity: </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><button id="additembtn">Add item <i class="fa-solid fa-plus"> </i></button></td>
                                                <td><input type="number" name="" id="" required min="1"></td>
                                                <td><input type="text" id="visible" readonly></td>
                                                <td><input type="text" id="currentPrice" readonly></td>
                                                <td><input type="text" id="currentQty" readonly></td>
                                            </tr>
                                        </tbody>
                                    </table><hr>
                               </div>
                            </div>
                        </div>
                        <div class="cart">
                            <div class="form-group">
                                <h3>My Cart</h3>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../sales/javascript/sales.js"></script>
</body>
</html>