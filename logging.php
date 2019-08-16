<?php
session_start();
error_reporting(0);
$mydb = mysqli_connect("localhost","root","","loginregister");

$userName = $_POST['userid'];
$password = $_POST['password'];

$query = "select * from userinfo where id = '$userName' && pass = '$password'";
$result = mysqli_query($mydb, $query);
$count = mysqli_num_rows($result);

if($count) {
    $_SESSION['username'] = $userName;
    header('Location: accessGranted.php');
} else {
    header('Location: loginPage.php');
}
?>
<br>
<a href="loginPage.php"><button>Go to Login</button></a>