<?php
    error_reporting("E-NOTICE");
?>
<?php
    session_start();
    if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
        header("location: ../login.php");
    }
?>
<div id="top">
            <h1><a href="#">PRP Rescue Team</a></h1>
            <div id="top-navigation">
                Welcome <a href="#"><strong>Administrator</strong></a>
                <span>|</span>
                <a href="#">Help</a>
                <span>|</span>
                <a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=dreamcars&token=1fd13f08eac159b00784c337805b48e7">Profile Settings</a>
                <span>|</span>
                <a href="logout.php">Logout</a>
            </div>
        </div>
<div id="navigation">
            <ul>
                <li><a href="index.php"><span>Dashboard</span></a></li>
                <li><a href="add_vehicles.php"><span>Vehicle Management</span></a></li>
                <li><a href="client_requests.php"><span>Hire Requests</span></a></li>
               
            </ul>
        </div>
