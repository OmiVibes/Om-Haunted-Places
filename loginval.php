<?php
session_start();
// echo "hello";
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn,$sql);
if ($val=mysqli_num_rows($result)) {
    header("loaction: explore.php");
}
if ($email=="user@gmail.com" && $password == "password") {
    header('location: explore.php');
    echo "successfull<br>";
    ?>
    <a href="explore.php">click to continue</a>
    <?
}
else {
    echo "unsuccessfull try again";
}


?>