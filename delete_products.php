<?php
// Include database connection details
require_once 'config.php';

// Connect to database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if product id is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete product from products table
    $sql = "DELETE FROM products WHERE id = $1";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Redirect to products page
        header("Location: products.php");
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
