<?php
// Database connection details (update with your database credentials)
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ngo_users";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the contact form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL query to insert the contact data into the database
$sql = "INSERT INTO needypeople (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message submitted successfully!"; // You can add a redirect or other actions here.
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
