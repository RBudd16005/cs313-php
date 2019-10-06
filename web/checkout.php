<?php
session_start();
?>

<html>
<head>
<title>Checkout</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<div style="float:left">
<a href="browse.php">Shopping.com</a><br>
</div>
<div style="float:right">
<a href="cart.php">Cart</a><br>
</div>
<br><hr><br><br>

<?php
echo "Your items are:<br>";

foreach($_SESSION['cart'] as $selected){
    echo $selected . "<br>";
}
?>

<h4>Please enter the shipping address</h4>
<form method="post" action="<?php echo
 htmlspecialchars("confirm.php");?>">

Street: <input type="text" name="street"><br>
City: <input type="text" name="city"><br>
State: <input type="text" name="state"><br>
Zip: <input type="text" name="zip"><br>

<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>