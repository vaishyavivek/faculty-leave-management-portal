<?php
session_start();
?>

<!DOCTYPE HTML>
<HTML>
<HEAD>
	<link rel="stylesheet" type="text/css" href="static/css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</HEAD>


<BODY>
    
    <header class="header-main">
        <div class="logo-out">
            <div class="pce">pce</div>
            <div class="avkash">avkash࿙</div>
        </div>
        
        <div class="header">
            <div id="header-menu">
                <li class="header-item"><a href="howto.php">How to</a></li>
                <li class="header-item"><a href="student.php">Student Access</a></li>
                <li class="header-item"><a href="faculty.php">Faculty Access</a></li>
                <li class="header-item"><a href="index.php">Home</a></li>
            </div>
            
            <div id="header-login">
                <?php
                    If(isset($_SESSION["email"])) {
                        echo '<li id="header-login-item"><a href="#">' . $_SESSION['name'] . '</a></li>';
                    }
                    else {
                        echo '<li id="header-login-item"><a href="signin.php">Login</a></li>
                            <li id="header-signup-item"><a href="signup.php">Sign up</a></li>';
                    }
                ?>
            </div>
        </div>
        
    </header>
    
    <div>
        <ul class="dropdown-menu-bar">
            <li class="dropdown">
                <button id="profileBtn" class="dropButton" onclick="showDropdownMenu('profile')">Profile ⏷</button>
                <div id="profile" class="dropdown-content">
                    <a class="dropdown-item" href="#">See your profile</a>
                    <a class="dropdown-item" href="#">Update</a>
                </div>
            </li>
            <li class="dropdown">
                <button id="calanderBtn" class="dropButton" onclick="showDropdownMenu('calander')">Calander ⏷</button>
                <div id="calander" class="dropdown-content">
                    <a class="dropdown-item" href="#">See Term Calender</a>
                    <a class="dropdown-item" href="#">Apply for a leave</a>
                    <a class="dropdown-item" href="#">Manage your leaves</a>
                </div>
            </li>
            <li class="dropdown">
                <button id="attendenceBtn" class="dropButton" onclick="showDropdownMenu('attendence')">Attendence ⏷</button>
                <div id="attendence" class="dropdown-content">
                    <a class="dropdown-item" href="#">Mark student attendence</a>
                    <a class="dropdown-item" href="#">Mark your attendence</a>
                </div>
            </li>
        </ul>
    </div>
