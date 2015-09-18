<?php

session_start();

unset($_SESSION['userArray']);
unset($_SESSION['login_user']);

if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
?>