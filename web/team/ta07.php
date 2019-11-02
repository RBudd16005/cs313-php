<html>
<head>
    <meta charset="UTF-8">
    <title>Sign-In</title>
</head>
<body>

<div>
        <form action="signin.php" method="post">
            Username: <input type="text" name="username" placeholder="Username"><br>
            Password: <input type="password" name="password" placeholder="Password"><br>
            <button type="submit" name="singin-submit">Sign In</button><br>
            Don't have an account yet? Click <a href="signup.php">here</a> to sign up
        </form>
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

try
{
     $stmt = $db->prepare("SELECT password FROM users WHERE username = :name");
                $stmt->bindValue(':name', $username, PDO::PARAM_STR);
                $stmt->execute();
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  if (password_verify($hashed_password, $stored_password))
    {
      header('Location: ../welcome.php');
      die();
    }
  else
    {
      echo 'Incorrect password! Please, try again.'
      die();
    }
}
catch (PDOException $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}
?>
</body>
</html>

signup.php:
<html>
<head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
</head>
<body>
    <div>
        <h1>Sign Up</h1>
        <form action="signin.php" method="post">
            Username: <input type="text" name="uid" placeholder="Username"><br>
            Password: <input type="password" name="pwd" placeholder="Password"><br>
            Please re-enter password: <input type="password" name="pwd-repeat" placeholder="Confirm Password"><br>
            <button type="submit" name="signup-submit">Submit</button>
            Click <a href="signin.php">here</a> to sign in
        </form>
    </div>
    
  <?php
    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $password_confirm = $_POST['pwd-repeat'];

    if (empty($username) || empty($password) || empty($passwordconfirm)) {
        header("Location: ../signup.php?error=emptyfields&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&email=".$email);
        exit();
    }
    else if ($password !== $passwordconfirm) {
        header("Location: ../signup.php?error=passwrodcheck&uid=".$username."&email=".$email);
        exit();
    }
    else {
    	 $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      	try
    		{
        	$dbUrl = getenv('DATABASE_URL');

        	$dbOpts = parse_url($dbUrl);

        	$dbHost = $dbOpts["host"];
        	$dbPort = $dbOpts["port"];
        	$dbUser = $dbOpts["user"];
        	$dbPassword = $dbOpts["pass"];
        	$dbName = ltrim($dbOpts["path"],'/');

        	$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

        	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        	$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        	$db->query($sql);
    	}
    	catch (PDOException $ex)
    	{
        echo 'Error!: ' . $ex->getMessage();
        die();
    	}
    }
?>
</body>
</html>