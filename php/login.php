<?php

// Create connection

session_start();
if(isset($_POST['save']))
{
    extract($_POST);

    include 'config.php';

    $email=$_POST['email']; 
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"SELECT * FROM user_accounts where Email='$email' and user_Password='$password'");

    $row  = mysqli_fetch_array($sql);

    $accType = $row['AccType'];

    if(is_array($row))
    {
        if($accType == 'USER'){
            echo('<script>window.location.replace("../html/user-dash.html");</script>');
        }
        elseif($accType == 'ADMIN'){
            echo('<script>window.location.replace("../html/admin-dash.html");</script>');
        }
    }
    else
    {
        echo("<script>alert ('Invalid Email ID/Password')</script>");
        echo('<script>window.location.replace("../html/login.html");</script>');
    }
}

?>