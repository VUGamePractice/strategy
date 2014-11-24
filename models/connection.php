/**
 * Created by PhpStorm.
 * User: tautvis
 * Date: 14.11.16
 * Time: 17.06
 */
<?php
function connect(){
    $servername = "game.localhost";
    $username = "root";
    $password = "Praktika123";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "Connected successfully.";
    }
    return $conn;
}
?>