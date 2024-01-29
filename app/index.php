<?php
$pageName = "Logins";
session_start();

include_once(__DIR__ . "/includes/dbConnect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = $_POST['password'];

        $login_stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
        $login_stmt->bind_param("s", $username);
        $login_stmt->execute();
        $login_results = $login_stmt->get_result();

        if (mysqli_num_rows($login_results) > 0) {
            $user = mysqli_fetch_assoc($login_results);

            if (!password_verify($password, $user['password']) || $user['username'] !== $username) {
                echo "Invalid username or password.";
            } else {
                session_regenerate_id();
                // Here you can set the user data in the session to keep the user logged in
                $_SESSION['username'] = $username;
                // Then redirect to the desired page
                header('Location: dashboard.php');
            }
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