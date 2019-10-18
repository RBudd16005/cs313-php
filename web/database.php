<?php
echo '<h1><strong>Sounds Library</strong></h1>';
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

echo '<form action=database.php method=POST>';
echo 'Sound: <input type=text name=sound>';
echo '<input type=submit value=Search>';
echo '</form>';

$sound = $_POST['sound'];

foreach ($db->query('SELECT name, author, created FROM sounds WHERE name =' . '\''. $sound . '\'') as $row)
{
  echo '<strong>' . $row['name'] . '<br>';
  echo 'By ' . $row['author'] . '<br>';
  echo 'Uploaded on: ' . $row['created'] . '<br>';
}
?>