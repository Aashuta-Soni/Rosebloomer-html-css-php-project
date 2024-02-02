<?php

// Replace these values with your actual database credentials
$host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'flowershop';

// Establish a connection to the database
$conn = new mysqli($host, $db_user, $db_password, $db_name);
echo "success";

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$name = $email = $number = $message = '';

// Check if form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if POST variables are set
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Use prepared statements to prevent SQL injection
    $sql = $conn->prepare("INSERT INTO feedback (name, email, number, message) VALUES ('$name','$email', '$number','$message')");

    // Bind parameters
    $sql->bind_param("ssis", $name, $email, $number, $message);

    // Execute the statement
    if ($sql->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql->error;
    }

    // Close the statement
    $sql->close();
}

// Close the database connection
$conn->close();

?>
