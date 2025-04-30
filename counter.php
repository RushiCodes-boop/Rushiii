<?php
// Database configuration
$host = 'localhost';       // Usually localhost
$db   = 'visitor_counter'; // Database name
$user = 'root';            // Database username
$pass = '';                // Database password (empty for XAMPP)

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert a new visit
$insert = "INSERT INTO visits () VALUES ()";
$conn->query($insert);

// Get total visit count
$result = $conn->query("SELECT COUNT(*) AS total FROM visits");
$row = $result->fetch_assoc();
$totalVisits = $row['total'];

// Output the visit count
echo "<div style='color:#00ffea; font-size:16px; margin-top:15px;'>👁️ Total Visitors: <strong>$totalVisits</strong></div>";

// Close connection
$conn->close();
?>
