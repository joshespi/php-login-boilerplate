<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
?>

Login succcess!
<a href="includes/logout.php">Logout</a>