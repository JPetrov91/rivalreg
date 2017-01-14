<?php
session_start();
require_once 'connection.php';

if (isset($_POST['enter'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE login = '$username'";
    $result = mysqli_query($connection, $query);
    $user_data = mysqli_fetch_assoc($result);
    if ($user_data['password'] == $password) {
//        session_start();
        $_SESSION["id"] = $user_data['id'];
        echo $_SESSION["id"];
    }
}
?>

<?php
if (isset($_SESSION['id'])) {
    echo 'Success';
    ?>
<a href="index.php">Go to main page</a>
<?php
} else {
?>
<form method="post" action="login.php" > <br>
    Name: <input type="text" name="username"><br>
    Password: <input type="text" name="password"><br>
    <input type="submit" name="enter" value="Sign In">
    <a href="test2.php"> Test </a>
    <?php } ?>
</form>

