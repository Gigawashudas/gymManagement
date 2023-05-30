<?php
$host     = "localhost"; // Host name 
$username = "root"; // MySQL username 
$password = ""; // MySQL password 
$db_name  = "gym_management_version1"; // Database name 

// Connect to server and select database
$conn = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>