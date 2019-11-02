<html>
<head>
        <meta charset="UTF-8">
        <title>Sound Biscuit</title>
        <link rel="stylesheet" type="text/css" href="css/soundbiscuit.css">
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
/*if (isset($_POST['signup-submit'])) {
    $username = $_POST['uid'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordconfirm = $_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordconfirm)) {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        header("Location: ../signup.php?error=invalidemailuid";
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidemail&uid=".$username);
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

            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
            $db->query($sql);
        }
        catch (PDOException $ex)
        {
            echo 'Error!: ' . $ex->getMessage();
            die();
        }
    }
}
?>*/

    <h1 id="success">Account created successfully!</h1>
    <div class="footer_2"></div>
</body>
</html>