<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="styled.css" />
</head>
<body>
<section class="header">
            <nav>
               <a href="index.html"></a>
               <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="registration.php">REGISTER</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="help.html">HELP</a></li>

                </ul>
               </div>
               <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
</section>
    <div class="form">
        <p>Buna, <?php echo $_SESSION['username']; ?>!</p>
        <p>Te-ai conectat cu succes!</p>
        <p><a href="logout.php">Delogheaza-te</a></p>
    </div>
</body>
</html>
