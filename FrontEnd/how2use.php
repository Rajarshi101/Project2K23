<?php 
  session_start(); 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>How To Use</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
            
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins', sans-serif;
                scroll-behavior: smooth;
            }

            header {
                background-color: #0d423b;
                height: 110px;
            }

            nav{
                position: sticky;
                left: 0;
                top: 0;
                width: 100%;
                height: 75px;
                background: #54948b;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                z-index: 1;
            }

            nav .navbar{
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 100%;
                max-width: 100%;
                background: #54948b;
                margin: auto;
            }

            nav .navbar .logo a{
                color: #fff;
                font-size: 27px;
                font-weight: 600;
                text-decoration: none;
            }

            nav .navbar .menu{
                display: flex;
            }

            .navbar .menu li{
                list-style: none;
                margin: 0 15px;
            }

            .navbar .menu li a{
                color: #fff;
                font-size: 17px;
                font-weight: 500;
                text-decoration: none;
            }

            .register {
                position: absolute;
                right: 30px;
            }

            button {
                cursor: pointer;
                border: 0;
                border-radius: 5px;
                font-weight: 600;
                width: 110px;
                padding: 5px 0;
                transition: 0.4s;
            }

            .reg {
                color: rgb(104, 85, 224);
                background-color: rgba(255, 255, 255, 1);
                border: 1px solid rgba(104, 85, 224, 1);
            }

            button:hover {
                color: white;
                box-shadow: 0 0 20px rgba(104, 85, 224, 0.6);
                background-color: rgba(104, 85, 224, 1);
            }

            section{
                display: flex;
                height: 100vh;
                width: 100%;
                align-items: center;
                justify-content: center;
                color: #c8ff01;
                font-size: 70px;
            }

            #Home{
                background: linear-gradient(to bottom right, rgba(84,58,183,1) 25%, rgba(0,172,193,1) 100%);
            }

            .content {
                position: absolute;
                top: 250px;
                left: 100px;
                width: 1150px;
                padding: 0;
                
            }

            .content h2 {
                width: 400px;
                font-size: 40px;
                background: linear-gradient(to right, #C6FFDD, #FBD786, #f7797d);
                background-clip: text;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                margin-bottom: 20px;

            }

            .content ul {
                width: 1150px;
                padding: 0;
                list-style: none;
                font-size: 20px;
                height: 657px;
            }

            .content ul li{
                width: 1150px;
                padding: 0;
                list-style: none;
                font-size: 20px;
            }

            footer {
                background-color: #000000f3;
                color: white;
                padding: 25px;
                align-items: center;
                height: 70px;
                width: 1519.2px;
                display: inline-flex;
                justify-content: center;
                font-size: 15px;
            }
            footer img{
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <header id="header">
            <img src="Media/applogo.png" alt="applogo">
        </header>
        <nav>
            <div class="navbar">
                <ul class="menu">
                <li><a href="profile.php">Profile</a></li>
                    <li><a href="examschedule.php">Exam Schedule</a></li>
                    <li><a href="subjectschedule.php">Subject Schedule</a></li>
                    <li><a href="noticeboard.php">Notice Board</a></li>
                    <li><a href="how2use.php">How To Use</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="register">
                    <a href="profile.php?logout='1'"><button class="reg">Logout</button></a>
                </div>
            </div>
        </nav>
        <section id="Home">
            <div class="content">
                <h2><b><i>Guide: How to Use</i></b></h2>
                <ul>
                    <li>The step-by-step detailed description about how to use this website is described below:-</li><br>
                    <li>Step 1: Followed by login the user needs to select the month for viewing the calendar to get the available date slots. The available slots will be marked as green and that of blocked as red.</li><br>
                    <li>Step 2: On getting the list the user may select the month if dates are available or proceed with another month.</li><br>
                    <li>Step 3: User then inputs the no. of days for the exam as asked by the system , then the system cluster the dates and show the user the best feasible time slot.</li><br>
                    <li>Step 4: On getting approval from the user the system finalizes the date slot for that particular exam schedule and followed by that the space for filling in the exam subjects comes up where the user has to enter the subject day by date to generate the routine and then press enter.</li><br>
                    <li>Step 5: The calendar gets updated and thereby the user can download the routine and put up in the notice section.</li>
                </ul>
            </div>
        </section>
        <footer>
            <p>Copyright © 2023. All rights reserved | Total Visits | Website Powered By</p><img src="Media/phoenix.png" height="40" width="40">
        </footer>
</html>