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
    <link rel="stylesheet" href="team.css">
    <link rel="stylesheet" href="team.js" />

    <!-- Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <title>TEAM</title>
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
                        <a href="service.php">Services </a>
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

    <nav>
        <div class="team-page">
            
            <div class="team-title">
                <div class="search-box">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search" class="type">
                        <button type="submit" class="sub"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <h2>Team Member Details</h2>
            </div>
            <div class="mem-sam">
                <div class="mem-sam1">
                    <div class="mem-img1">
                        <img src="sam1.jpg" />
                    </div>
                    <div class="mem-title1">
                        <h2>I am <span class="typing"></span></h2>
                        <p>I am a student and studying Department of Electrical and Electronic Engineering(EEE) at Chittagong University of Engineering and Technology(CUET). Besides education, i am working as a freelencer, web designer and developer, software development and game development since 3 years. </p>
                    </div>
                </div>
                <div class="mem-skill1">
                    <h4><span class="span1">Samshul Islam Skill's</span></h4>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>HTML</span>
                                <span>90%</span>
                            </div>
                            <div class="line html1"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>CSS</span>
                                <span>85%</span>
                            </div>
                            <div class="line css1"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JavaScript</span>
                                <span>70%</span>
                            </div>
                            <div class="line javascript1"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Bootstrap</span>
                                <span>80%</span>
                            </div>
                            <div class="line bootstrap1"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JQuery</span>
                                <span>60%</span>
                            </div>
                            <div class="line jquery1"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mem-ena">
                <div class="mem-ena1">
                    <div class="mem-img2">
                        <img src="ena1.jpg" />
                    </div>
                    <div class="mem-title2">
                        <h2>I am <span class="typing-1"></span></h2>
                        <p>I am a student and studying Department of Electrical and Electronic Engineering(EEE) at Chittagong University of Engineering and Technology(CUET). Besides education, i am working as a freelencer, web designer and developer, software development and game development since 3 years. </p>
                    </div>
                </div>
                <div class="mem-skill2">
                    <h4><span class="span2">Md Enamul Haque Skill's</span></h4>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>HTML</span>
                                <span>85%</span>
                            </div>
                            <div class="line html2"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>CSS</span>
                                <span>75%</span>
                            </div>
                            <div class="line css2"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JavaScript</span>
                                <span>60%</span>
                            </div>
                            <div class="line js2"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Bootstrap</span>
                                <span>70%</span>
                            </div>
                            <div class="line bootstrap2"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JQuery</span>
                                <span>65%</span>
                            </div>
                            <div class="line jquery2"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mem-ala">
                <div class="mem-ala1">
                    <div class="mem-img1">
                        <img src="ala1.jpg" />
                    </div>
                    <div class="mem-title3">
                        <h2>I am <span class="typing-2"></span></h2>
                        <p>I am a student and studying Department of Electrical and Electronic Engineering(EEE) at Chittagong University of Engineering and Technology(CUET). Besides education, i am working as a freelencer, web designer and developer, software development and game development since 3 years. </p>
                    </div>
                </div>
                <div class="mem-skill3">
                    <h4><span class="span3">Md Alamin Islam Skill's</span></h4>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>HTML</span>
                                <span>85%</span>
                            </div>
                            <div class="line html3"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>CSS</span>
                                <span>75%</span>
                            </div>
                            <div class="line css3"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JavaScript</span>
                                <span>60%</span>
                            </div>
                            <div class="line js3"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Bootstrap</span>
                                <span>70%</span>
                            </div>
                            <div class="line bootstrap3"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JQuery</span>
                                <span>65%</span>
                            </div>
                            <div class="line jquery3"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mem-ara">
                <div class="mem-ara1">
                    <div class="mem-img1">
                        <img src="ara1.jpg" />
                    </div>
                    <div class="mem-title4">
                        <h2>I am <span class="typing-3"></span></h2>
                        <p>I am a student and studying Department of Mechatronic and Insustrial Engineering(MIE) at Chittagong University of Engineering and Technology(CUET). Besides education, i am working as a freelencer, web designer and developer, software development and game development since 3 years. </p>
                    </div>
                </div>
                <div class="mem-skill4">
                    <h4><span class="span4">Yasir Arafat Skill's</span></h4>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>HTML</span>
                                <span>85%</span>
                            </div>
                            <div class="line html4"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>CSS</span>
                                <span>75%</span>
                            </div>
                            <div class="line css4"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JavaScript</span>
                                <span>60%</span>
                            </div>
                            <div class="line js4"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Bootstrap</span>
                                <span>70%</span>
                            </div>
                            <div class="line bootstrap4"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JQuery</span>
                                <span>65%</span>
                            </div>
                            <div class="line jquery4"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mem-cha">
                <div class="mem-cha1">
                    <div class="mem-img1">
                        <img src="prit.jpg" />
                    </div>
                    <div class="mem-title5">
                        <h2>I am <span class="typing-4"></span></h2>
                        <p>I am a student and studying Department of Electrical and Electronic Engineering(EEE) at Chittagong University of Engineering and Technology(CUET). Besides education, i am working as a freelencer, web designer and developer, software development and game development since 3 years. </p>
                    </div>
                </div>
                <div class="mem-skill5">
                    <h4><span class="span5">Some-one Skill's</span></h4>
                    <div class="column right">
                        <div class="bars">
                            <div class="info">
                                <span>HTML</span>
                                <span>85%</span>
                            </div>
                            <div class="line html5"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>CSS</span>
                                <span>75%</span>
                            </div>
                            <div class="line css5"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JavaScript</span>
                                <span>60%</span>
                            </div>
                            <div class="line js5"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Bootstrap</span>
                                <span>70%</span>
                            </div>
                            <div class="line bootstrap5"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>JQuery</span>
                                <span>65%</span>
                            </div>
                            <div class="line jquery5"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="finish">
                <h6> Created By <span>Samshul Islam</span> | © 2021 All rights reserved.</h6>
            </div>


        </div>

    </nav>


    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="team.js"></script>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>