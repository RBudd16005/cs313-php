<?php
echo '<h1><strong>Scripture Resources</strong></h1>';
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

foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
{
  echo '<strong>' . $row['book'];
  echo ' ' . $row['chapter'];
  echo ':' . $row['verse'];
  echo '-</strong> &quot' . $row['content'] . '&quot';
  echo '<br/>';
}

echo '<form action=ta05.php method=POST>';
echo 'Book: <input type=text name=book>';
echo '<input type=submit value=Search>';
echo '</form>';

$book = $_POST['book'];

foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures WHERE book =' . '\''. $book . '\'') as $row)
{
  echo '<strong>' . $row['book'];
  echo ' ' . $row['chapter'];
  echo ':' . $row['verse'];
  echo '-</strong> &quot' . $row['content'] . '&quot';
  echo '<br/>';
}
?>