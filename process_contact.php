<?php
// Include database connection details
require_once 'config.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date_created = date('Y-m-d H:i:s');

// Connect to database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert contact into contacts table
$sql = "INSERT INTO contacts (name, email, message, date_created)
        VALUES ('$name', '$email', '$message', '$date_created')";

if (mysqli_query($conn, $sql)) {
    echo "Thank you for your message! We'll get back to you soon.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);

// Send email to Gmail
$to = 'godfreymatagaro@gmail.com';
$subject = 'New message from website';
$message = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";

mail($to, $subject, $message, $headers);
?>
