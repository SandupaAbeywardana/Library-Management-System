<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <link rel="stylesheet"type="text/css" href="../css/user-dash.css">
        <link rel="shortcut icon" type="Image/jpg" href="../images/Fav32x32.png">
        <script src='../js/user-dash.js'></script>

        <title>User Dashboard | e-Nanasala</title>
    </head>
    <body>
        
        <?php
            session_start();

            /*$abc = $_SESSION["UserSignedIn"];
            echo("<script>console.log('$abc');</script>");

            if($_SESSION["UserSignedIn"] == True){

                $fname = $_SESSION['FirstName'];
                echo("<script>alert ('Welcome $fname')</script>");

            }*/
            if($_SESSION["AdminSignedIn"] == True){

                echo('<script>window.location.replace("../php/admin-dash.php");</script>');

            }
            elseif($_SESSION["UserSignedIn"] != True){
                
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
                    <h3><?php echo $_SESSION["FirstName"] ?>&nbsp&nbsp<?php echo $_SESSION["LastName"] ?></h3>
                    <h5><?php echo $_SESSION["email"] ?></h5>
                </div>
                <div class="menu-components">
                    <hr>
                    <div class="menu-element active" id="nav_membership" onclick="membership()">
                        <img src="../images/icons/member-card.png"  alt="icon">
                        <h2>Membership</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_loan" onclick="loan()">
                        <img src="../images/icons/open-book.png"  alt="icon">
                        <h2>Loan a Book</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_history" onclick="history()">
                        <img src="../images/icons/file.png"  alt="icon">
                        <h2>Loan History</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_borrowed" onclick="borrowed()">
                        <img src="../images/icons/book.png"  alt="icon">
                        <h2>Books Borrowed</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_settings" onclick="settings()">
                        <img src="../images/icons/profile.png"  alt="icon">
                        <h2>Account Settings</h2>
                    </div>
                    <hr>
                    <div class="menu-element" id="nav_logout" onclick="logout()">
                        <img src="../images/icons/logout.png"  alt="icon">
                        <h2>Sign Out</h2>
                    </div>
                </div>
            </div>

            <article>

                <div class="content showcontent" id="membership">
                    <h2>membership</h2>
                </div>

                <div class="content" id="book">
                    <h2>Loan a Book</h2>
                </div>

                <div class="content" id="history">
                    <h2>Loan History</h2>
                </div>

                <div class="content" id="borrowed">
                    <h2>Books Borrowed</h2>
                </div>

                <div class="content" id="settings">
                    <h2>Account Settings</h2>
                </div>

            </article>

            <div class="logo-display">
                <img src="../images/logo_reg.png" alt="logo">
            </div>
        </div>
    </body>
</html>