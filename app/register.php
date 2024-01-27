
<?php
$pageName = "Register";

include_once(__DIR__ . "/includes/dbConnect.php");
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        $result = mysqli_query($db, $sql);
        if ($result) {
            echo "User created successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }

}





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

<?php include_once(__DIR__ . "/includes/footer.php"); ?>