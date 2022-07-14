<?php

// Create connection

session_start();
if(isset($_POST['save']))
{
    extract($_POST);

    include 'config.php';

    $email=$_POST['email']; 
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"SELECT * FROM user_accounts where Email='$email' and Password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        echo('<script>window.location.replace("../html/user-dash.html");</script>');
    }
    else
    {
        echo "<script>alert ('Invalid Email ID/Password')</script>";
        echo('<script>window.location.replace("../html/login.html");</script>');
    }
}

?>