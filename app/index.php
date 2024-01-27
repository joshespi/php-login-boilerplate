<?php
$pageName = "Logins";
session_start();

include_once(__DIR__ . "/includes/dbConnect.php");

include_once(__DIR__ . "/includes/header.php");
?>
<h2>Login Form</h2>

<form action="index.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password">
    <input type="submit" value="Submit">
</form> 
<a href="/register.php">Register</a>
<?php
include_once(__DIR__ . "/includes/footer.php");
?>