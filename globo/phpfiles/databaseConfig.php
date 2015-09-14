<?php
session_start();

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="db76692";

/*
 Create connection object called $conn
 (using php's builtin mysqli class)
*/
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection (to our mysql database)
if ($conn->connect_error) {
    // exit if we can't connect to database
    die('Unable to connect to database[' . $conn->connect_error. ']');
}

 ?>