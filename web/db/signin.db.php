<html>
<head>
    <meta charset="UTF-8">
    <title>Sound Biscuit</title>
    <link rel="stylesheet" type="text/css" href="../css/soundbiscuit.css">
</head>
<body>
<div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <a href="home.html"><h1>Sound<span>Biscuit</span></h1></a>
            </div>
                <ul class="navigation">
                    <a href="../home.html"><li>Home</li></a>
                    <a href="#"><li>About</li></a>
                    <a href="#"><li>FAQs</li></a>
                    <a href="#"><li>Support</li></a>
                    <a href="../signin.html"><li>Sign In</li></a>
                </ul>
        </div>
    </div>

    <div class="search_bar">
        <div class="inner_search_bar">
            <form action="search.php" method="get">
                <button type="submit" name="search_submit">Search</button>
                <input type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>

    <div>
        <img id="image_1" src="images/sounds.jpg">
    </div>
<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts['host'];
  $dbPort = $dbOpts['port'];
  $dbUser = $dbOpts['user'];
  $dbPassword = $dbOpts['pass'];
  $dbName = ltrim($dbOpts['path'],'/');

  $db = new PDO('pgsql:host=$dbHost;port=$dbPort;dbname=$dbName', $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "username")
{
  if($password == "password")
  {
    header("Location: ../library.php");
    exit();
  }
  else
  {
    echo "Incorrect username or password, please try again.";
  }
}
else
{
  echo "Incorrect username or password, please try again.";
}
?>
<div class="footer_2"></div>
</body>
</html>