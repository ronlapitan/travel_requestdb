<!DOCTYPE html>
<?php 

include 'include/db_connect.php';

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Travel Request Database</title>

        <style media="screen">

        </style>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <link rel="shortcut icon" href="images/up_site_icon.ico">

    </head>
    <body>
        <div class="wrap">
            <nav class="navbar-default navbar-fixed-top navbar">
                
                <div class="container">

                    <?php
                        

                            if (isset($_SESSION['admin'])) {

                                echo    '<a class="navbar-brand" href="admin_dashboard.php">INSTITUTE OF WEED SCIENCE, ENTOMOLOGY AND PLANT PATHOLOGY</a>



                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="logout"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Log Out</a></li>
                                        </ul>

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><p class="welcome"><span class="glyphicon glyphicon-user"></span>&nbsp; Welcome,&nbsp; '.$_SESSION['username'].'</p></li>
                                        </ul>';                   
                            }

                            else if (isset($_SESSION['super_user'])) {

                                echo    '<a class="navbar-brand" href="admin_dashboard.php">INSTITUTE OF WEED SCIENCE, ENTOMOLOGY AND PLANT PATHOLOGY</a>

                                        <ul class="nav navbar-nav navbar-right">
                                            <li class="logout"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Log Out</a></li>
                                        </ul>

                                        <ul class="nav navbar-nav navbar-right">
                                            <li><p class="welcome"><span class="glyphicon glyphicon-user"></span>&nbsp; Welcome,&nbsp; '.$_SESSION['username'].'</p></li>
                                        </ul>';                   
                            }

                            else {

                                echo    '<a class="navbar-brand" href="index.php">INSTITUTE OF WEED SCIENCE, ENTOMOLOGY AND PLANT PATHOLOGY</a>
                            
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="about.php">ABOUT</a></li>
                                         </ul>

                                         <ul class="nav navbar-nav navbar-right">
                                            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span>&nbsp; REGISTER</a></li>

                                         </ul>

                                         <ul class="nav navbar-nav navbar-right">
                                            <li class="active"><a href="login.php"><span class="glyphicon glyphicon-user"></span>&nbsp; LOGIN</a></li>

                                         </ul>';
                            }

                    ?>

                </div>

            </nav>

            <div class="jumbotron">
                <div class="container">
                    <h1>Travel Request Database</h1>
                    <?php 

                    if (isset($_SESSION['admin'])) {
                       echo '<div class="submenu">
                                <a href="admin_dashboard.php">Create Travel Request</a>&nbsp;|&nbsp;<a href="client_survey_form.php">Create Client Survey</a>&nbsp;|&nbsp;<a href="export_tr.php">Export Data</a>&nbsp;|&nbsp;<a href="pending_accounts.php">Activate Account</a>&nbsp;|&nbsp;<a href="collection.php">List of Latest Entries</a>&nbsp;|&nbsp;<a href="search.php">Search</a>
                            </div>';  
                    }

                    if (isset($_SESSION['super_user'])) {
                       echo '<div class="submenu">
                                <a href="admin_dashboard.php">Create Travel Request</a>&nbsp;|&nbsp;<a href="export_tr.php">Export Data</a>
                                &nbsp;|&nbsp;<a href="collection.php">List of Latest Entries</a>&nbsp;|&nbsp;<a href="search.php">Search</a>
                            </div>';  
                    }
                    
                    ?>
                </div>
            </div>

            <div class="container">

