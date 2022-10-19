<?php 
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $databaseName="test_database";
    $conn = new mysqli($servername, $username, $password, $databaseName); // Creates the connection

    if ($conn->connect_error) { // Checks if connection failed
        die("Failed to connect " . $conn->connect_error);
    }

?>