﻿<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500&family=Rubik:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="service.css">
    <link rel="stylesheet" href="service.js" />
    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>


    <title>SERVICE</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light main-header sticky-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" style="height:60px;width:55px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto our-primary-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="team.php">Team</a></li>
                    <li>
                        <a href="service.php">Services</a>
                    </li>
                    <li>
                        <a href="skill.php">Skill</a>
                    </li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="education.php">Education</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>

                <div class="header-info d-flex align-items-center">
                    <div class="search">
                        <button class="on"><i class="fas fa-search"></i></button>
                        <button class="off"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="header-call clearfix">
                        <div class="header-call-icon float-left mr-3 h-100">
                            <span> <i class="fas fa-phone-volume"></i> </span>
                        </div>
                        <div class="header-call-info">
                            <span class="d-block">Call Now</span>
                            <a class="d-block" href="tel:+8801816244741">+8801816244741</a>
                        </div>
                    </div>
                    <div class="header-button">
                    <?php 
                        session_start();

                            if(isset($_SESSION['id'])){
                                ?>
                                <a href="profile.php" class="btn btn-primary">profile</a>
                                <a href="signout.php" class="btn btn-primary log1">Sign Out</a>
                                <?php
                                
                            }else
                            {
                                ?>
                                <a href="register.php" class="btn btn-primary">Sign Up</a>
                                <a href="login.php" class="btn btn-primary log1">Log In</a>
                                <?php
                            }
                        ?>
                    </div>
                </div>

            </div>

        </div>
    </nav>
    <div class="service-title">
        <div class="search-box">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search" class="type">
                <button type="submit" class="sub"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="team-title">
            <h1> Our <span>Service </span></h1>
        </div>
    </div>


    <div class="content">
        <div class="content-title">
            <p>
                <span>W</span>elcome to SAE Developer Website Service Page. In this page, you can order to create your preferrable website with responsive.
                We also do website maintenance, game development, app development, data analysis. If anyone is required , you can order now. We always try to handle
                your order within due time which based on the type of work.
            </p>
        </div>
        <div class="main-content">
            <div class="main-content1">
                <div class="website-design">
                    <i class="fas fa-paint-brush fa-4x"></i>
                    <h2>Website-design</h2>
                    <p> For order for buy a website with responsive,<br /> Click Order Now button</p>
                    <a href="weborder.php">Order Now</a>
                </div>
                <div class="website-maintainence">
                    <i class="fas fa-tools fa-4x"></i>
                    <h2>Website-maintainence</h2>
                    <p> For maintainence a website with responsive,<br /> Click Order Now button</p>
                    <a href="#">Order Now</a>
                </div>
                <div class="software-developer">
                    <i class="fas fa-laptop-code fa-4x"></i>
                    <h2>Softwate-development</h2>
                    <p> For order any software for buy new or development,<br /> Click Order Now button</p>
                    <a href="#">Order Now</a>
                </div>
            </div>
            <div class="main-content2">
                <div class="game-developer">
                    <i class="fas fa-dice-d6 fa-4x"></i>
                    <h2>Game Development</h2>
                    <p> For order any game for development,<br /> Click Order Now button</p>
                    <a href="#">Order Now</a>
                </div>
                <div class="data-analysis">
                    <i class="fas fa-database fa-4x"></i>
                    <h2>Data-analysis</h2>
                    <p> For order to analysis a databse,<br /> Click Order Now button</p>
                    <a href="#">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="finish">
        <h6> Created By <span>Samshul Islam</span> | © 2021 All rights reserved.</h6>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="service.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html> 