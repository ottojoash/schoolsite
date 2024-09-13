<?php
$server = 'localhost';
$username = 'root';
$password = ''; // Set the correct password here if one exists.
$database = 'technicalpashupati';

// Create a connection using mysqli_connect
$connection = mysqli_connect($server, $username, $password, $database);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
