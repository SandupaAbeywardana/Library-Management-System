<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <link rel="stylesheet"type="text/css" href="../css/admin-dash.css">
        <link rel="shortcut icon" type="Image/jpg" href="../images/Fav32x32.png">
        <script src='../js/admin-dash.js'></script>

        <title>Admin Dashboard | e-Nanasala</title>
    </head>
    <body>

    <?php
            session_start();

            /*$abc = $_SESSION["AdminSignedIn"];
            echo("<script>console.log('$abc');</script>");

            if($_SESSION["AdminSignedIn"] == True){

                $fname = $_SESSION['FirstName'];
                echo("<script>alert ('Welcome $fname')</script>");

            }*/
            
            if($_SESSION["UserSignedIn"] == True){

                echo('<script>window.location.replace("../php/user-dash.php");</script>');

            }
            elseif($_SESSION["AdminSignedIn"] != True){
                
                echo("<script>alert ('Please Login')</script>");
                echo('<script>window.location.replace("../php/loginhtml.php");</script>');

            }
        ?>

        <div class="main-container">
            <div class="nav-bar">
                <div class="user-icon">
                    <img src="../images/<?php echo $_SESSION["ProfilePic"] ?>" alt="user icon">
                </div>
                <div class="user-info">
                    <h3><?php echo $_SESSION["FirstName"] ?>&nbsp<?php echo $_SESSION["LastName"] ?></h3>
                    <h5><?php echo $_SESSION["email"] ?></h5>
                </div>
                <div class="menu-components">
                    <hr>
                    <div class="menu-element" id="nav_loan">
                        <img src="../images/icons/open-book.png" id="element-icon" alt="icon">
                        <h2>Loan a Book</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_history">
                        <img src="../images/icons/file.png" id="element-icon" alt="icon">
                        <h2>Loan History</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_borrowed">
                        <img src="../images/icons/book.png" id="element-icon" alt="icon">
                        <h2>Books Borrowed</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_membership">
                        <img src="../images/icons/member-card.png" id="element-icon" alt="icon">
                        <h2>Membership</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_settings" onclick="settings()">
                        <img src="../images/icons/profile.png" id="element-icon" alt="icon">
                        <h2>Account Settings</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_logout" onclick="logout()">
                        <img src="../images/icons/logout.png"  alt="icon">
                        <h2>Sign Out</h2>
                    </div>
                </div>
            </div>
            <div class="main-content" id="main">main</div>
            <div class="acc-settings" id="settings">Account Settings</div>
            <div class="logo-display">
                <img src="../images/logo_reg.png" alt="logo">
            </div>
        </div>
    </body>
</html>