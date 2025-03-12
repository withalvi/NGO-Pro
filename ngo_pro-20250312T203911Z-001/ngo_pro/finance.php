<?php
// Database connection details (update with your database credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the financial records from the database
$sql = "SELECT * FROM financial_records";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- Add your CSS styles here -->
</head>
<body>
    <!-- Include your admin panel structure here -->

    <h2>Financial Records</h2>
    <table>
        <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Category</th>
        </tr>
        <?php
        // Loop through the database results and display financial records
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['transaction_date'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No financial records found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
