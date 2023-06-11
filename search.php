<?php
// Include database connection details
require_once 'config.php';

// Get search query from the URL parameter
if (isset($_GET['query'])) {
    $query = $_GET['query'];
} else {
    $query = '';
}

// Connect to database
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Build SQL query to search for products
$sql = "SELECT * FROM products WHERE name LIKE '%$query%' OR description LIKE '%$query%'";

// Execute SQL query
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0) {
    // Output results in a table
    echo "<table>";
    echo "<tr><th>Name</th><th>Price</th><th>Description</th><th>Image</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td><img src='".$row['image_path']."' alt='".$row['name']."' width='100' /></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    // No results found
    echo "No results found.";
}

// Close database connection
mysqli_close($conn);
?>
