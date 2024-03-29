<?php
if (isset($_POST['edit-submit'])) {

    $username = "username";
    $name = $_POST['name'];
    $author = $_POST['author'];
    $date = $_POST['date'];

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

        $sql = "UPDATE sounds SET author='$author' WHERE name='$name'";
        $db->query($sql);

        $sql = "UPDATE sounds SET created='$date' WHERE name='$name'";
        $db->query($sql);
    }
    catch (PDOException $ex)
    {
        echo 'Error!: ' . $ex->getMessage();
        die();
    }

    echo "Sound edited successfully!<br>";

    header("Location: ../library.php");
    exit();
}
?>