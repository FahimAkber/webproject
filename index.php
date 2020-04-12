<?php

$link = mysqli_connect('localhost', 'root', '', 'my_shop');
$sql = "select * from shop_item";
$selectedProduct = mysqli_query($link, $sql);
$products  = mysqli_fetch_all($selectedProduct, MYSQLI_ASSOC);

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Project</title>

    <style>
        #container{
            background-color: aquamarine;
            height: 510px;
        }
        #header{
            background-color: cadetblue;
            height: 40px;
        }
        #nav-bar{
            background-color: #a0857a;
            height: 30px;
        }
        #main-body{
            background-color: burlywood;
            height: 440px;
        }
        #left-body{
            background-color: #62ffb6;
            height: 100%;
            width: 30%;
            float: left;
        }
        #right-body{
            background-color: #c1cbff;
            height: 100%;
            width: 70%;
            float: right;
        }
        #footer{
            background-color: #fff0e0;
            height: 30px;
        }
    </style>

</head>
<body>

<div id="container">
    <div id="header">
        <h3 align="center" > My Super Shop</h3>
    </div>
    <div id="nav-bar">
        <marquee behavior="scroll" direction="left">Shop Management System as Web Project  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            Submitted By: Fahim Mahmud Akber 171-15-8984 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Submit To: Honorable Course Teacher: Asif Uz Zaman Asif
        </marquee>
    </div>
    <div id="main-body">
        <div id="left-body">

            <a href="addProduct.php">Order Product</a>
            <br>
            <a href="index.php">Product List</a>
            <br>
            <a href="SellHistory.php">Sell History</a>
            <br>



        </div>
        <div id="right-body">

            <br>
            <br>
            <table align="center" border="1" width="50%">
                <th>Item No</th>
                <th>Product No</th>
                <th>Product Name</th>
                <th>Available Product</th>
                <th>Unit Price</th>
                <th>Action</th>

                <?php foreach ($products as $i => $product): ?>
                    <tr>
                        <td><?= $i+1 ?></td>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td>
                            <a href="sellItem.php?id=<?= $product['id']?> ">Sell Item</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>


        </div>
    </div>
    <div id="footer">
        <p>All Right Reserve..............</p>
    </div>
</div>

</body>
</html>