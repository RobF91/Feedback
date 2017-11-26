<?php

$username = "username";
$password = "username";
$hostname = "localhost";

//connection to the database
$db_handle = new mysqli($hostname, $username, $password)
or die("Unable to connect to MySQL");

//select a database to work with
$selected = new mysqli("feedback",$db_handle)
or die("Could not select examples");

?>