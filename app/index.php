<?php
$pageName = "Logins";
session_start();

include_once(__DIR__ . "/includes/dbConnect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                // echo "Login successful.";
                // Here you can set the user data in the session to keep the user logged in
                $_SESSION['username'] = $username;
                // Then redirect to the desired page
                header('Location: dashboard.php');
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "Invalid username.";
        }
    }
}





include_once(__DIR__ . "/includes/header.php");

//page content starts here
?>

<h2>Login Form</h2>



<form class="pure-form" action="index.php" method="post">

    <fieldset>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="Username">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Password">

        <button type="submit" class="pure-button pure-button-primary">Sign in</button>

    </fieldset>

</form>

<a href="/register.php">Register</a>
<?php
//page content ends here
include_once(__DIR__ . "/includes/footer.php");
?>