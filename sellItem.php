<?php

function hasValue($feild_name){
    if(isset($_GET[$feild_name])){
        return $_GET[$feild_name];
    } else{
        return "";
    }
}


$link = mysqli_connect('localhost', 'root',  '', 'my_shop');

$productId = hasValue("id");


if(!empty($productId)){
    $sql = "select * from shop_item where id = $productId";
    $selectedProduct = mysqli_query($link, $sql);
    $product = mysqli_fetch_assoc($selectedProduct);



}

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sell Product</title>

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
            Submitted By: Fahim Mahmud Akber 171-15-8984
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

            <form action="sellProcessing.php" method="get">
                <table>
                    <tr>
                        <td><input type="hidden" name="id" value="<?=$productId?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="name" value="<?=$product['name']?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="quantity" value="<?=$product['quantity']?>"></td>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="price" value="<?=$product['price']?>"></td>
                    </tr>
                    <tr>
                        <td>Quantity:</td>
                        <td><input type="text" name="pQ"></td>
                    </tr>

                        <td></td>
                        <td><Button type="submit">Confirm Sell</Button></td>
                    </tr>
                </table>
            </form>



        </div>
    </div>
    <div id="footer">
        <p>All Right Reserve..............</p>
    </div>
</div>





</body>
</html>


