<?php
$hostname = "localhost"; // Replace with your database server hostname
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$database = "mydatabase"; // Replace with the desired database name

// Create a connection to the database server
$connection = new mysqli($hostname, $username, $password);

// Check if the connection was successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($connection->query($sql) === true) {
    echo "Database created successfully.";
} else {
    echo "Error creating database: " . $connection->error;
}

// Close the connection
$connection->close();
?>
