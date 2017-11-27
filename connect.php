<?php

$username = "root";
$password = "FeEdBaCk";
$hostname = "10.73.52.41";
$dbname = "feedback";

//connection to the database
$db_handle = new mysqli($hostname, $username, $password)
or die("Unable to connect to MySQL");

//select a database to work with
$selected = new mysqli("feedback",$db_handle)
or die("Could not select examples");


//$sql = "INSERT INTO feedback (id) VALUE (1)";

?>