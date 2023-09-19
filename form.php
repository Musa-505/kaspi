<?php
// Database connection parameters
$servername = "localhost";  // Change to your database server name
$username = "root";     // Change to your database username
$password = "";     // Change to your database password
$dbname = "kaspi";         // Change to your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$receiverPhone = $_POST["receiver"];
$amount = $_POST["amount"];

// Insert data into the database
$sql = "INSERT INTO '3' (number, amount) VALUES ('$receiverPhone', $amount)";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>