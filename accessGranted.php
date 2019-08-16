<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('Location: loginPage.php');
}
?>

<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <center>
        <h1>Welcome User, <?php echo $_SESSION['username']?>.</h1>
        <a href="logout.php"><button>Logout</button></a>
    </center>
</body>
</html>