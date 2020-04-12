<?php


$result = "";

function hasValue($feild_name){
    if(isset($_GET[$feild_name])){
        return $_GET[$feild_name];
    } else{
        return "";
    }
}

$productName = hasValue("productName");
$productQuantity = hasValue("productQuantity");
$productPrice = hasValue("productPrice");

if(!empty($productName) && !empty($productPrice) && !empty($productQuantity)){
    $link = mysqli_connect('localhost', 'root', '',  'my_shop');
    $sql = "insert into shop_item (name, quantity, price) values ('$productName', '$productQuantity','$productPrice')";
    mysqli_query($link, $sql);
    $result = "Product Order Successfully";

} else{
    $result = "Fill the field please";
}

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Product</title>

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

            <form action="" method="get">
                <table>
                    <tr>
                        <td>Product Name:</td>
                        <td><input type="text" name="productName"></td>
                    </tr>
                    <tr>
                        <td>Product Quantity:</td>
                        <td><input type="text" name="productQuantity"></td>
                    </tr>
                    <tr>
                        <td>Product Unit Price:</td>
                        <td><input type="text" name="productPrice"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><Button type="submit">Confirm Order</Button></td>
                    </tr>
                </table>
            </form>

            <h3 align="center" style="color: red"><?= $result ?></h3>

        </div>
    </div>
    <div id="footer">
        <p>All Right Reserve..............</p>
    </div>
</div>





</body>
</html>

