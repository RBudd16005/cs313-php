<?php
if (isset($_POST['insert-submit'])) {

    $username = "username";
    $name = $_POST['name'];
    $author = $_POST['author'];
    $date = $_POST['created'];

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

        $sql = "INSERT INTO sounds (username, name, author, created) VALUES ('$username', '$name', '$author', '$date')";
        $db->query($sql);
    }
    catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }

    echo "Sound uploaded successfully!";

    header("Location: ../library.php");
    exit();
}
?>