<?php


function hasValue($feild_name){
    if(isset($_GET[$feild_name])){
        return $_GET[$feild_name];
    } else{
        return "";
    }
}
$error = "";

$link = mysqli_connect('localhost', 'root',  '', 'my_shop');

$productId = hasValue("id");
$productName = hasValue("name");
$productQuantity = hasValue("quantity");
$productPrice = hasValue("price");
$sellQuantity = hasValue("pQ");
$totalPrice = $sellQuantity * $productPrice;


if(!empty($sellQuantity) && ($sellQuantity < $productQuantity)){
    $sellQuantity = $productQuantity- $sellQuantity;
    $sql2 = "update shop_item set name = '$productName', quantity = '$sellQuantity', price = '$productPrice' where id = $productId";
    mysqli_query($link, $sql2);

    date_default_timezone_set("Asia/Dhaka");
    $date = date("M d, Y h: i");
    $sql3 = "insert into total_sell(date, amount) values ('$date', '$totalPrice') ";
    mysqli_query($link, $sql3);

    header("location: index.php");
}else{
    $error = "Insufficient Quantity";
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
            <h4 align="center" style="color: red"><?= $error ?></h4>
        </div>
    </div>
    <div id="footer">
        <p>All Right Reserve..............</p>
    </div>
</div>





</body>
</html>


