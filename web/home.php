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

        <a style="float:left" href="home.php">Home</a><br>
        <a style="float:right" href="login.php">Sign In</a><br>
    </div>

    <hr><br>

    <div>
        <h1>Upload New Sound:</h1>
        <form action="db/insert.db.php" method="post"><br>
            <input type="text" name="name" placeholder="Sound name"><br>
            <input type="text" name="author" placeholder="Author"><br>
            <input type="date" name="created" placeholder="Date uploaded"><br>
            <button type="submit" name="insert-submit">Upload</button><br>
        </form>
    </div>

    <div>
        <h1>Remove Sound From Library:</h1><br>
        <form action="db/delete.db.php" method="post">
            <input type="text" name="name" placeholder="Sound name"><br>
            <button type="submit" name="delete-submit">Delete</button><br>
        </form>
    </div>

    <div>
        <h1>Edit Sound In Library:</h1><br>
        <form action="db/update.db.php" method="post">
            <input type="text" name="name" placeholder="Sound name"><br>
            <input type="text" name="author" placeholder="Author"><br>
            <input type="date" name="date" placeholder="Date edited"><br>
            <button type="submit" name="edit-submit">Edit</button><br>
        </form>
    </div>

    <div>
    <h1>Your Library</h1>
    <?php
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
        }
        catch (PDOException $ex)
        {
            echo 'Error!: ' . $ex->getMessage();
            die();
        }

        foreach ($db->query('SELECT sname, author, created FROM sounds') as $row)
        {
            echo $row['sname'] . '<br>';
            echo 'by ' . $row['author'] . '<br>';
            echo $row['created'] . '<br><br>';
        }
    ?>
    </div>
</body>
</html>