<?php

$servername = getenv('DB_HOST');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME');
$dbport = getenv('DB_PORT');

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname, $dbport);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

?>