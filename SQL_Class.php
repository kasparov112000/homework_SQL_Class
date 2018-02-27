<?php

$servername = "dom1705409514377.db.12545472.hostedresource.com";
$username = "dom1705409514377";
$password = "RAmos123!@#";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";