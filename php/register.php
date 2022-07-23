<?php
    include 'config.php';

    $FirstName = $_POST['fname'];
    $LastName = $_POST['lname'];
    $Email = $_POST['email'];
    $Password = $_POST['pwd'];

    $SQL = "INSERT INTO user_accounts (Email, FirstName, LastName, user_Password) VALUES ('$Email', '$FirstName', '$LastName', '$Password')";

    if(mysqli_query($conn,$SQL)){
		echo "<script type='text/javascript'>alert('Successfully registered')</script>";
        echo('<script>window.location.replace("../HTML/login.html");</script>');
    }
	else{
		echo "<script>alert ('Registration unsuccessful.<br>')</script>";
	}
	
	mysqli_close($conn);

?>