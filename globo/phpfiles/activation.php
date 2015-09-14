<?php
include ('../db/dbConfig.php'); 

$msg='';

if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=mysqli_real_escape_string($conn,$_GET['code']);

$c=mysqli_query($connection,"SELECT _id FROM users WHERE activationkey='$code'");

if(mysqli_num_rows($c) > 0)
{
$count=mysqli_query($conn, "SELECT _id FROM users WHERE activationkey='$code' and usertypeID='0'");

if(mysqli_num_rows($count) == 1)
{
mysqli_query($conn, "UPDATE users SET usertypeID='2' WHERE activationkey='$code'");
$msg="Your account is activated"; 
}
else
{
$msg ="Your account is already active, no need to activate again";
}

}
else
{
$msg ="Wrong activation code.";
}

}
?>

