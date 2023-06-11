<?php

// Include database connection details
require_once 'config.php';

// Connect to database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert products into products table
$sql = "INSERT INTO products (name, description, price, category, image) VALUES
        ('Blue T-Shirt', 'A comfortable and stylish t-shirt made from 100% cotton.', 19.99, 'Tshirts', 'love5.jpg'),
        ('Red Hot Water Bottle', 'A large capacity hot water bottle with a soft and cozy cover.', 12.99, 'Hot Water Bottles', 'love2.jpg'),
        ('Chocolate Cake', 'A rich and decadent chocolate cake, perfect for special occasions.', 29.99, 'Cakes', 'love1.jpg'),
        ('Embroidered Cap', 'A classic baseball cap with an embroidered logo.', 14.99, 'Caps Badges', 'love3.jpg'),
        ('Enamel Pin', 'A cute and quirky enamel pin, perfect for adding to your collection.', 7.99, 'Caps Badges', 'love4.jpg')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);

?>
