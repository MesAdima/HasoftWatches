<?php

include ('../db/dbConfig.php');

if(!empty($_POST['username']) && !empty($_POST['password'])){

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        
        // regular expression for email check
        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

        if(preg_match($regex, $email)){
            $qry = "SELECT * FROM users WHERE email = '".$email."'";
            $result = mysqli_query($conn,$qry);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

            if(mysqli_num_rows($result) == 1){
                $msg = 'The email is already taken, please try new.';
            }
            else {
            $password = md5($password);
            $activation = md5(uniqid(rand(), true));

            $registerquery = mysqli_query($conn, "INSERT INTO users (username, password, email) VALUES('".$username."', '".$password."', '".$email."', '".$activation."')");

            /*** Script for send email start here ***/
                $to = $email;
                $subject = 'Haswatches :: Email verification';
                $body = '
 
                    Thanks for signing up!
                    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                     
                    ------------------------
                    Username: '.$username.'
                    Password: '.$password.'
                    ------------------------
                     
                    Please click this link to activate your account:
                    http://www.haswatches.com/activation.php?key='.$activation.'
                     
                    '; // Our message above including the link
                    $headers = 'From:noreply@haswatches.com' . "\r\n"; // Set from headers
                    mail($to, $subject, $body, $headers); // Send our email
                
               if(mail($to, $subject, $body, $headers)){ //Remember to give success messages when you're certain the action has been accomplished

                //This is what you intend the user to see, but you havent echoed it
                $msg = 'Registration successful, please activate email.';

                echo $subject."<hr>".$body."<hr>";

               }else{
                $msg ='Adima, you are fucked';
                echo $msg;
               }
                /*** Script for send email end here ***/
 

            }
        }
     }
?>