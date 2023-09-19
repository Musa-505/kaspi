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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Page</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your stylesheet if needed -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <header>
        <a href="index.php" style="
            color: #c50d13; /* Red color */
            text-decoration: none; /* Remove underlines */
            display: flex;
            align-items: center;
        ">
            <i class="fas fa-chevron-left" style="font-size: 24px; margin-right: 20px;"></i> <!-- Back icon -->
            <h2 style="
                margin: 0;
                text-align: left;
                color: black;
            ">Клиенту Kaspi</h2>
        </a>
    </header>

    <section class="transfer-content">
        <!-- Your transfer form here -->
        <label for="sender">Kaspi Gold</label>
        <form action="form.php" method="post" style="
            display: flex;
            flex-direction: column;
            align-items: center; /* Center form elements horizontally */
            max-width: 300px; /* Set a maximum width for the form */
            margin: 0 auto; /* Center the form horizontally */
        ">            
            <label for="receiver">Телефон получателя</label>
            <input type="text" id="receiver" value="+7" name="receiver" style="
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                width: 100%; /* Full-width input */
            ">
            
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" style="
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                width: 100%; /* Full-width input */
            ">
            
            <button type="submit" style="
                background-color: #007BFF;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
                transition: background-color 0.3s;
            ">Submit Transfer</button>
        </form>
    </section>

    <footer>
        <!-- Footer content (if any) -->
    </footer>
</body>
</html> 