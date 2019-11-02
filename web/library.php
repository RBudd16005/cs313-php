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

    <div>
        <h1>Upload New Sound:</h1>
        <form action="../db/insert.db.php" method="post"><br>
            <input type="text" name="name" placeholder="Sound name"><br>
            <input type="text" name="author" placeholder="Author"><br>
            <input type="date" name="created" placeholder="Date uploaded"><br>
            <button type="submit" name="insert-submit">Upload</button><br>
        </form>
    </div>

    <div>
        <h1>Remove Sound From Library:</h1><br>
        <form action="../db/delete.db.php" method="post">
            <input type="text" name="name" placeholder="Sound name"><br>
            <button type="submit" name="delete-submit">Delete</button><br>
        </form>
    </div>

    <div>
        <h1>Edit Sound In Library:</h1><br>
        <form action="../db/update.db.php" method="post">
            <input type="text" name="name" placeholder="Sound name"><br>
            <input type="text" name="author" placeholder="Author"><br>
            <input type="date" name="date" placeholder="Date edited"><br>
            <button type="submit" name="edit-submit">Edit</button><br>
        </form>
    </div>

    <div>
    <h1 id="success">Your Library</h1>
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

        foreach ($db->query('SELECT name, author, created FROM sounds WHERE username') as $row)
        {
            echo $row['name'] . '<br>';
            echo 'by ' . $row['author'] . '<br>';
            echo $row['created'] . '<br><br>';
        }
    ?>
    </div>

    <div class="footer_2"></div>
</body>
</html>