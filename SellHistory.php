<?php
    $link = mysqli_connect('localhost', 'root',  '', 'my_shop');
    $sql = "select * from total_sell";
    $result = mysqli_query($link, $sql);
    $dataList = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $netAmout = 0;
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

            <br>
            <br>
            <table align="center" border="1" width="50%">
                <tr>
                    <th>Sell Id</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>
            <?php foreach ($dataList as $i=>$data): $netAmout = $netAmout + $data['amount'] ?>
                <tr>
                    <td><?= $i+1 ?> </td>
                    <td><?= $data['date'] ?></td>
                    <td><?= $data['amount'] ?></td>
                </tr>
            <?php endforeach; ?>
                <tr>
                    <td colspan="2">Total Sell: </td>
                    <td>
                        <?= $netAmout  ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="footer">
        <p>All Right Reserve..............</p>
    </div>
</div>





</body>
</html>