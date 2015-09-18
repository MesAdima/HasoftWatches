<?php
/**UserTypes:
Type 0 - Inactive Users

Type 2 - Activated users

Type 3 - Super Admin

*/

if(!empty($_GET['key']) && isset($_GET['key']))
{
$code=mysqli_real_escape_string($conn,$_GET['key']);

$c=mysqli_query($conn,"SELECT _id FROM users WHERE activationkey='$code'");

if(mysqli_num_rows($c) > 0)
{
$count=mysqli_query($conn, "SELECT _id FROM users WHERE activationkey='$code' and usertypeID='0'");

if(mysqli_num_rows($count) == 1)
{
mysqli_query($conn, "UPDATE users SET usertypeID='2' WHERE activationkey='$code'");
$msg[]= "Your account is activated. You can now login"; 
}
else
{
$msg[] ="Your account is already active, no need to activate again";
}

}
else
{
$msg[] ="Wrong activation code.";
}

}
?>

