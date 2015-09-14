<?php

include ('../db/dbConfig.php');

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=md5($_POST['pass']);

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// $qry = "SELECT * FROM users WHERE email = '".$email."'";
//      $result = mysqli_query($conn,$qry);
//      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT * from users where username='$username' AND password='$password'";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_array($result,MYSQLI_ASSOC);
//echo "<pre>";print_r($rows);exit;
if (mysqli_num_rows($result) == 1) {
	echo "true login string";
$_SESSION['login_user']=$username; // Initializing Session
header("location: http://localhost:81/haswatches/globo/welcomeuser.php"); // Redirecting To Other Page
} else {
	echo "false login string";
$error = "Username or Password is invalid";
header("location: http://localhost:81/haswatches/globo/index.php"); // Redirecting To Other Page
}
mysqli_close($conn); // Closing Connection
}
}
