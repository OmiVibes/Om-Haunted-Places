<?
include 'connection.php';
if (isset($_POST['booksubmitbtn'])) {
    $text = $_REQUEST['text'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    $tourname = $_REQUEST['tourname'];
    $number1 = $_REQUEST['number1'];
$sql = "INSERT INTO `booked` (`id`, `name`, `email`, `phone`, `tourname`, `noofpeople`) VALUES (NULL, '$text', '$email', '$number', '$tourname', '$number1');";
$result = mysqli_query($con,$sql);
if (!$result) {
    echo "data not inserted";
} 
if ($result) {
    echo "data inserted successfully";
}

    
}
?>