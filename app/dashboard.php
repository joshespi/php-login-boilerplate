<?php

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}


include_once(__DIR__ . "/includes/header.php");

//page content starts here
?>
<?php
//page content ends here
include_once(__DIR__ . "/includes/footer.php");
?>