﻿<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,400;1,500&family=Rubik:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <!-- Jquery-->
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <title>HOME</title>
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
                    <li><a href="#">Education</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <div class="header-info d-flex align-items-center">
                    
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
    <div class="first-section">

        <div class="text1">
            <p class="text2">Hello, my name is</p><br />
            <p class="text3">Samshul Islam</p><br />
            <p class="text4">And I'm a <span class="typing"></span></p><br />
        </div>
        <div class="pic1">
            <img src="sam1.jpg" />
        </div>
    </div>
    <div class="second-section">
        <div class="second1">
            <h2>About me</h2><br />
            <h5>--- <span style="color:red">Who i am</span> --- </h5>
        </div>
        <div class="second2">
            <div class="pic2">
                <img src="3.jpg" />
            </div>
            <div class="text6">
                <p style="font-weight:500;font-family: 'Rubik', sans-serif;font-size:20pt;"> I'm Shakil and I'm a <span class="typing-2"></span></p>
                <p style="font-family: 'Noto Sans JP', sans-serif;padding-right:65px">
                    I am a professional responsive web designer and developer using HTML,CSS,Javascript,jQuery,Bootsrap since two years.Besides that, i am app and game developer using python and java. I am studying Dept. of Electrical and Electronic Engineering at Chittagong University of Engineering and Technology.
                </p>
                <p class="cvbtn"><a href="#">Download CV</a></p>
            </div>
        </div>
    </div>
    <section class="teams" id="teams">
        <div class="third-Section">
            <div class="second12">
                <h2>My Teams</h2><br />
                <h5>--- <span style="color:red">Who with me</span> --- </h5>
            </div>
            <div class="carousel owl-carousel">
                <div class="wrapper">
                    <div class="wrapper__background">

                    </div>
                    <div class="item-bg"></div>
                    <div class="mem-slider">
                        <div class="mem-slider__wrp swiper-wrapper">
                            <div class="mem-slider__item swiper-slide">
                                <div class="card">
                                    <div class="box">
                                        <span class="card-img"><img src="sam1.jpg" /></span>
                                        <p class="card-text">Samshul Islam</p>
                                    </div>

                                    <p class="card-des">
                                        CEO and Founder of SAE Developer Company
                                    </p>
                                </div>
                            </div>

                            <div class="mem-slider__item swiper-slide">
                                <div class="card">
                                    <div class="box">
                                        <span class="card-img"><img src="ena1.jpg" /></span>
                                        <p class="card-text">Md Enamul Haque</p>
                                    </div>

                                    <p class="card-des">
                                        Co-Founder of SAE Developer Company
                                    </p>
                                </div>
                            </div>

                            <div class="mem-slider__item swiper-slide">
                                <div class="card">
                                    <div class="box">
                                        <span class="card-img"><img src="ara1.jpg" /></span>
                                        <p class="card-text">Yasir Arafat</p>
                                    </div>

                                    <p class="card-des">
                                        Professional responsive Web desiner and app developer
                                    </p>
                                </div>
                            </div>

                            <div class="mem-slider__item swiper-slide">
                                <div class="card">
                                    <div class="box">
                                        <span class="card-img"><img src="prit1.jpg" /></span>
                                        <p class="card-text">Some One name</p>
                                    </div>

                                    <p class="card-des">
                                        Professional responsive Web desiner and app developer
                                    </p>
                                </div>
                            </div>

                            <div class="mem-slider__item swiper-slide">
                                <div class="card">
                                    <div class="box">
                                        <span class="card-img"><img src="ala1.jpg" /></span>
                                        <p class="card-text">Md alamin Islam</p>
                                    </div>

                                    <p class="card-des">
                                        Co-Founder of SAE Developer Company
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="mem-slider__ctr">
                            <div class="mem-slider__arrows">
                                <button class="mem-slider__arrow mem-slider-prev">
                                    <span class="icon-font">
                                        <svg class="icon icon-arrow-left">
                                            <use xlink:href="#icon-arrow-left"></use>
                                        </svg>
                                    </span>
                                </button>
                                <button class="mem-slider__arrow mem-slider-next">
                                    <span class="icon-font">
                                        <svg class="icon icon-arrow-right">
                                            <use xlink:href="#icon-arrow-right"></use>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="mem-slider__pagination"></div>
                        </div>
                    </div>
                </div>

                <svg hidden="hidden">
                    <defs>
                        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                            <title>arrow-left</title>
                            <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
                        </symbol>
                        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                            <title>arrow-right</title>
                            <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
                        </symbol>
                    </defs>
                </svg>
            </div>
        </div>
    </section>
    <div class="four-section">
        <div class="second13">
            <h2>Our Services</h2><br />
            <h5>-- <span style="color:red">What we provide</span> -- </h5>
        </div>
        <div class="div3">
            <div class="div0">
                <div class="sub-div0">
                    <i class="fas fa-paint-brush fa-3x"></i>
                    <h4>Web Design</h4>
                </div>
            </div>
            <div class="div1">
                <div class="sub-div1">
                    <i class="fas fa-cogs fa-3x"></i>
                    <h4>Software Development</h4>
                </div>
            </div>
            <div class="div2">
                <div class="sub-div2">
                    <i class="fas fa-dice-d6 fa-3x"></i>
                    <h4>Game Development</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="finish">
        <h6> Created By <span>Samshul Islam</span> | © 2021 All rights reserved.</h6>
    </div>


    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html> 