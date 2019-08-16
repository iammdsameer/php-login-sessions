<?php
session_start();
error_reporting(0);
$mydb = mysqli_connect("localhost","root","","loginregister");

$userName = $_POST['userid'];
$password = $_POST['password'];

$query = "select * from userinfo where id = '$userName'";
$result = mysqli_query($mydb, $query);
$count = mysqli_num_rows($result);

if($count) {
    echo "Username Not Available";
} else {
    $addUser = "insert into userinfo(id, pass) values ('$userName','$password');";
    mysqli_query($mydb, $addUser);
    echo "Account Created Successfully. Go back and Login to Continue.";
}
?>
<br>
<a href="loginPage.php"><button>Go to Login</button></a>