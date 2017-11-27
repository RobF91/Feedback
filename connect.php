<?php
//require 'index.php';

function Connection()
{
    $username = "root";
    $password = "FeEdBaCk";
    $hostname = "localhost";
    $dbname = "feedback";

// Create connection
    $conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

        return $conn;
    }

    //$_POST['Target'];


    $conn->query("INSERT INTO `feedback`(`target`) VALUES (1)");

}


?>