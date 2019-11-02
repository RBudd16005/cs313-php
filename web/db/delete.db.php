<?php
if (isset($_POST['delete-submit'])) {

    $name = $_POST['name'];

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

        $sql = "DELETE FROM sounds WHERE name='$name'";
        $db->query($sql);
    }
    catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }

    echo "Sound deleted successfully!";

    echo "<h1>Your Library</h1>";

    foreach ($db->query('SELECT name, author, created FROM sounds WHERE username='$username'') as $row)
        {
            echo $row['name'] . '<br>';
            echo 'by ' . $row['author'] . '<br>';
            echo $row['created'] . '<br><br>';
        }

    echo "<a style=\"float:left\" href=\"../home.php\">Home</a><br>";
}
?>