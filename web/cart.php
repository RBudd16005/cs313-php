<?php
session_start();
?>

<html>
<head>
    <title>Shopping.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<div style="float:left">
<a href="browse.php">Shopping.com</a><br>
</div>
<div style="float:right">
<a href="cart.php">Cart</a><br>
</div>
<br><hr>

<?php
echo "Your items are:<br>";

foreach($_SESSION['cart'] as $selected){
    echo $selected . "<br>";
}
?>

<a href="checkout.php"><button>Go to checkout</button></a>

</body>
</html>