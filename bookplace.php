<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection
include 'connection.php';

// Check if the form is submitted
if (isset($_POST['booksubmitbtn'])) {
    // Sanitize and retrieve the form data
    $text = mysqli_real_escape_string($con, trim($_REQUEST['text']));
    $email = mysqli_real_escape_string($con, trim($_REQUEST['email']));
    $number = mysqli_real_escape_string($con, trim($_REQUEST['number']));
    $tourname = mysqli_real_escape_string($con, trim($_REQUEST['tourname']));
    $number1 = mysqli_real_escape_string($con, trim($_REQUEST['number1']));

    // Validate form inputs
    if (empty($text) || empty($email) || empty($number) || empty($tourname) || empty($number1)) {
        die("All fields are required. Please go back and fill the form completely.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if (!is_numeric($number) || !is_numeric($number1)) {
        die("Phone number and number of people must be numeric.");
    }

    // Insert data into the database
    $sql = "INSERT INTO `booked` (`id`, `name`, `email`, `phone`, `tourname`, `noofpeople`) 
            VALUES (NULL, '$text', '$email', '$number', '$tourname', '$number1')";
    
    $result = mysqli_query($con, $sql);

    // Check the result of the query
    if (!$result) {
        die("Data insertion failed: " . mysqli_error($con));
    } else {
        $message = "Data inserted successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"], input[type="email"], input[type="number"], select {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .error-message {
            color: red;
            font-weight: bold;
        }

        .success-message {
            color: green;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Reserve Your Haunted Adventure</h2>
    <!-- Display success or error message here -->
    <?php
    if (isset($message)) {
        echo '<p class="success-message">' . $message . '</p>';
    }
    ?>
</div>

</body>
</html>
