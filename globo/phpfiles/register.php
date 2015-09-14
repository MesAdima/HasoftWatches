<?php

include ('../db/dbConfig.php');

if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    

    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $password = md5($password);
     
     $qry = "SELECT * FROM users WHERE email = '".$email."'";
     $result = mysqli_query($conn,$qry);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
     if(mysqli_num_rows($result) == 1)
     {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, that email is taken. Please go back and try again.</p>";
     }
     else
     {
        $registerquery = mysqli_query($conn, "INSERT INTO users (username, password, email) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
            echo "<h1>Success</h1>";
            echo "<p>Your account was successfully created. Please <a href=\"http://localhost:81/haswatches/globo/haswatches/index.php\">click here to login</a>.</p>";
        }
        else
        {
            echo "<h1>Error</h1>";
            echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }       
     }
}
else
{}
    ?>