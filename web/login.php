<html>
<head>
        <meta charset="UTF-8">
        <title>Sound Biscuit</title>
        <link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <div>
        <h1>
            Sound Biscuit
        </h1>

        <a style="float:right" href="login.php">Sign In</a><br>
    </div>

    <hr><br>

    <div style="float:center">
        <form action="library.php" method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit" name="login-submit">Sign In</button><br>
        </form>
        <a href="signup.php">Sign Up</a><br>
        <form action="logout.php" method="post"><br>
            <button type="submit" name="logout-submit">Sign Out</button>
        </form>
    </div>

</body>
</html>