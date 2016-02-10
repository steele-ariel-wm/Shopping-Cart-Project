<?php
include_once "connect.php";

foreach($_SESSION['cart'] as $item){
    echo $item['productName'] . "</br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="cart.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="jquery-2.1.4.min%20(1).js"></script>
    <script type="text/javascript" src="script.js"></script>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="hover-space">
    <header>
        <div class="logo">Desserts Box</div>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="brownies.php">Brownies</a></li>
                <li><a href="cakes.php">Cakes</a></li>
                <li><a href="cookies.php">Cookies</a></li>
                <li><a href="chocolates.php">Chocolates</a></li>
                <li><a href="pies.php">Pies</a></li>
                <li><a href="cart.php" class="active">Cart</a></li>
            </ul>
        </nav>
    </header>
</div>

<footer>
    <a href="http://dessertsbox.com" target="_blank">dessertsbox.com</a>
    <br/>
</footer>
</body>
</html>
