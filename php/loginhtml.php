<?php 
    session_start();
    $_SESSION["UserSignedIn"] = false;
    $_SESSION["AdminSignedIn"] = false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <link rel="stylesheet"type="text/css" href="../css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="shortcut icon" type="Image/jpg" href="../images/Fav32x32.png">

        <title>Login | e-Nanasala</title>
    </head>
    <body>
        <div class="bg"><img src="../images/login_bg.jpg" alt="login_bg"></div>
        <div class="login-container">
            <div id="logodiv"><img src="../images/logo_reg.png" alt="logo" id="logo"></div>
            <div class="login-child">
                <div class="login-content">
                    <h1>Login</h1>
                    <form method="POST" action="../php/login.php">
                        <div class="form-group">
                            <h3>Email:</h3>
                            <input type="email" name="email" autofocus="" autocapitalize="none" autocomplete="email" size="50" id="email" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <h3>Password:</h3>
                            <input type="password" name="password" autocomplete="current-password" size="50" id="password" required>
                            <i class="bi bi-eye-slash" id="togglePassword"></i>
                        </div>
                        <br>
                        <div class="button">
                            <input type="submit" value="Login" name="save">
                        </div>
                        <h6><a href="">Forgot Password?</a></h6>
                    </form>
                    <h5>New User? <a href="../html/register.html">Create Account</a></h5>
                </div>
            </div>
        </div>
        <footer>
            <h5>(C) 2022-2025 Sample Solutions. All Rights Reserved</h5>
        </footer>

        <script src='../js/login.js'></script>
    </body>
</html>