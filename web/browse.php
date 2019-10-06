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
<br><hr><br><br>

<form method="post" acion="cart.php">
<div style="float:left;width:33.3%;background-color:gray">
<img src="images/block.jpg" alt="item1" style="width:100%">
<p>Item 1</p>
<input type="checkbox" name="items[]" value="Item 1">Add to cart
</div>

<div style="float:left;width:33.3%;background-color:gray">
<img src="images/block.jpg" alt="item2" style="width:100%">
<p>Item 2</p>
<input type="checkbox" name="items[]" value="Item 2">Add to cart
</div>

<div style="float:left;width:33.3%;background-color:gray">
<img src="images/block.jpg" alt="item3" style="width:100%">
<p>Item 3</p>
<input type="checkbox" name="items[]" value="Item 3">Add to cart
</div>

<div style="float:left;width:33.3%;background-color:gray">
<img src="images/block.jpg" alt="item4" style="width:100%">
<p>Item 4</p>
<input type="checkbox" name="items[]" value="Item 4">Add to cart
</div>

<div style="float:left;width:33.3%;background-color:gray">
<img src="images/block.jpg" alt="item5" style="width:100%">
<p>Item 5</p>
<input type="checkbox" name="items[]" value="Item 5">Add to cart
</div>

<div style="float:left;width:33.3%;background-color:gray">
<img src="images/block.jpg" alt="item6" style="width:100%">
<p>Item 6</p>
<input type="checkbox" name="items[]" value="Item 6">Add to cart
</div>

<input type="submit" value="Send to cart" name="submit">
</form>

<?php
$_SESSION["cart"] = $_POST['items'];
?>

</body>
</html>