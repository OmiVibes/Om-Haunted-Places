<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start session
session_start();

// Initializing variables
$username = "";
$email = "";
$errors = array();

// Connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'testing');

// Check if the database connection is successful
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Register user logic
if (isset($_POST['reg_user'])) {
    // Receive and sanitize input values from the form
    $username = mysqli_real_escape_string($db, trim($_POST['username']));
    $email = mysqli_real_escape_string($db, trim($_POST['email']));
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // Form validation
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Invalid email format");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // Check for existing user in the database
    if (count($errors) == 0) {
        $user_check_query = "SELECT * FROM login WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);

        if (!$result) {
            die("Query failed: " . mysqli_error($db));
        }

        $user = mysqli_fetch_assoc($result);
        if ($user) {
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }
            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
            }
        }
    }

    // Register the user if there are no errors
    if (count($errors) == 0) {
        $password = password_hash($password_1, PASSWORD_BCRYPT); // Use password_hash for better security

        $query = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($db, $query)) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now registered successfully!";
            header('Location: success.php'); // Redirect to a success page
            exit();
        } else {
            die("Error inserting data: " . mysqli_error($db));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="">
       
