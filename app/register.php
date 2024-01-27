
<?php
include_once(__DIR__ . "/includes/header.php");
?>
<h2>Registration Form</h2>

<form action="register.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password">
    <input type="submit" value="Submit">
</form> 

<?php
include_once(__DIR__ . "/includes/footer.php");
?>