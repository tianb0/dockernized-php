<?php 
echo "hello there, this is a PHP Apache container. what now";
?>

<?php 
$host = 'db';

$user = 'dev';

$pass = 'dev';

$mydatabase = 'dev';

$sql = 'SELECT * FROM users';

/* $conn = new mysqli($host, $user, $pass); */

$conn = new mysqli($host, $user, $pass, $mydatabase);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "Connection to MySQL server successfully!";
}

if ($result = $conn->query($sql)) {
  while ($data = $result->fetch_object()) {
    $users[] = $data;
  }
}

echo "<p>";

foreach ($users as $user) {
  echo "<br>";
  echo $user->username . " " . $user->password;
  echo "<br>";
}

echo "</p>";


?>
