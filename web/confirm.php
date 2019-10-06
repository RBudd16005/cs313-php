<?php
session_start();
?>

<html>
<head>
<title>Confirmation</title>
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

$street = $city = $state = $zip = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $street = test_input($_POST["street"]);
    $city = test_input($_POST["city"]);
    $state = test_input($_POST["state"]);
    $zip = test_input($_POST["zip"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$confirm = <<<EOD
<h4>Confrimed!</h4>
The items will be shipped to $street
$city, $state $zip.<br>
EOD;

echo $confirm;
?>
</body>
</html>