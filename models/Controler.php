<?php
$servername = "game.localhost";
$username = "root";
$password = "Praktika123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    ;
}
?>
