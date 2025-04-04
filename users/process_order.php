<?php
// Connect to your database
$servername = "localhost";
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "kapetann"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get order data from AJAX request
$name = $_POST['name'];
$price = $_POST['price'];
$id = $_POST['id'];

// Insert order into database
$sql = "INSERT INTO products (product_name, product_price, product_id) VALUES ('$name', '$price', '$id')";
if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
