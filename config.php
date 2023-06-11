<?php
// Database connection details
define('DB_HOST', 'localhost');
define('DB_USER', 'ngitixyz_agwata');
define('DB_PASSWORD', '****');
define('DB_NAME', 'ngitixyz_products');

// Create database connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
