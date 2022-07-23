<?php
    include 'config.php';

    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Email = $_POST['email'];
    $Password = $_POST['pwd'];

    $exist = mysqli_query($conn,"SELECT * FROM user_accounts where Email='$email'");
    $row  = mysqli_fetch_array($exist);
    if(is_array($row)){

        $SQL = "INSERT INTO user_accounts (Email, FirstName, LastName, user_Password) VALUES ('$Email', '$FirstName', '$LastName', '$Password')";

        if(mysqli_query($conn,$SQL)){
            echo ("<script type='text/javascript'>alert('Successfully registered')</script>");
            echo('<script>window.location.replace("../HTML/login.html");</script>');
        }
        else{
            echo "<script>alert ('Registration unsuccessful.<br>')</script>";
        }

    }
    else{
        echo(
            "<script>
                if(confirm('Email already exist.  Login?') == true) {
                    window.location.replace('../HTML/login.html');
                }
                else{
                    window.location.replace('../HTML/register.html');
                }
            </script>"
        );
        
    }
	
	mysqli_close($conn);

?>