<?php

include ('/db/dbConfig.php');

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = "SELECT username from users where username='$user_check'";
$result = mysqli_query($conn,$ses_sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
//header('Location: welcomeuser.php'); // Redirecting To Home Page
}
?>