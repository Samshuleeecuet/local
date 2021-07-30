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
    <link rel="stylesheet" href="skill.css">
    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>SKILL</title>
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
                        <a href="#">Skill</a>
                    </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Contact</a></li>
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
    <div class="skill-title">
        <div class="search-box">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search" class="type">
                <button type="submit" class="sub"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="skill-title">
            <h1> Skill</h1>
        </div>
    </div>

    <div class="row">

         <div class="column">
             <h2 style="color:blue;">Web design</h2>
             <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development. Web design used to be focused on designing websites for desktop browsers; however, since the mid-2010s, design for mobile and tablet browsers has become ever-increasingly important.</p>
         </div>

         <div class="column">
            <h2 style="color:blue;">  Web development </h2>
            <p>Creating a dynamic web-site or web application is called web development.Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an intranet (a private network).[1] Web development can range from developing a simple single static page of plain text to complex web applications, electronic businesses, and social network services. A more comprehensive list of tasks to which Web development commonly refers, may include Web engineering, Web design, Web content development, client liaison, client-side/server-side scripting, Web server and network security configuration, and e-commerce development.There are three kinds of Web developer specialization: front-end developer, back-end developer, and full-stack developer. Front-end developers are responsible for behavior and visuals that run in the user browser, while back-end developers deal with the servers.
        </div>

        <div class="column">
            <h2 style="color:blue;">Game development</h2>
            <p>Game Development is the art of creating games and describes the design, development and release of a game. It may involve concept generation, design, build, test and release.Game Development can be undertaken by a large Game Development Studio or by a single individual. It can be as small or large as you like. As long as it lets the player interact with content and is able to manipulate the game’s elements, you can call it a ‘game’.</p>
        </div>

        <div class="column">
            <h2 style="color:blue;">App development</h2>
            <p>App Development refers to the creation of computer applications for use on mobile devices such as tablets, smartphones and smart watches. Mobile device features such as cameras, motion and location awareness can be used to create unique and inventive mobile-only applications for things such as taxi and bike sharing.The world is officially mobile and almost every major company with an internet presence also has an associated app that tailors and extends its services to the mobile user. At the time of this writing, Indeed.com listed over 500 open, full-time positions for mobile app developers in the U.S. with salary estimates ranging from $50K to $115K per year</p>
        </div>

        <div class="column">
            <h2 style="color:blue;">Database analysis</h2>
            <p>Data analysis is defined as a process of cleaning, transforming, and modeling data to discover useful information for business decision-making. The purpose of Data Analysis is to extract useful information from data and taking the decision based upon the data analysis.</p>
        </div>

         


    </div>

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="skill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>