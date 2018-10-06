<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""/>
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page"/>
    <meta name="robots" content="index, follow"/>
    <title>NationsBook</title>

    <!-- Stylesheets
    ================================================= -->
    <?php include "style.php" ?>
</head>
<body>
<?php include 'header.php'?>
<!-- Landing Page Contents
   ================================================= -->
<div id="lp-register">
    <div class="container wrapper">
        <div class="row">
                <div class="col-md-2 static add-container">
                    <div class="suggestions sticky-sidebar">
                        <div class="my-Add">
                            <img class="img-responsive" src="images/p.png" alt="">
                        </div>
                        <div class="my-Add">
                            <img class="img-responsive" src="images/p.png" alt="">
                        </div>
                    </div>
            </div>
            <div class="col-md-5">
                <div class="intro-texts">
                    <h1 class="text-white">Make Cool Friends !!!</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ducimus eum facilis, fuga itaque minima nam, numquam odio quia quo quod rem sit totam. Inventore magnam minus perspiciatis porro reprehenderit?
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda blanditiis debitis dolore eligendi exercitationem labore nam, nobis odit perspiciatis placeat qui ratione repellendus sed tempore ullam voluptates! Cumque, omnis?
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="reg-form-container">

                    <!-- Register/Login Tabs-->
                    <div class="reg-options">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                            <li><a href="#login" data-toggle="tab">Login</a></li>
                        </ul><!--Tabs End-->
                    </div>

                    <!--Registration Form Contents-->
                    <div class="tab-content">
                        <div class="tab-pane active" id="register">
                            <h3>Register Now !!!</h3>
                            <p class="text-muted">Be cool and join today. Meet millions</p>

                            <!--Register Form-->
                            <form name="registration_form" id='registration_form' class="form-inline">

                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        <label for="username" class="sr-only">Username</label>
                                        <input id="username" class="form-control input-group-lg" type="text"
                                               name="username" title="Enter Username" placeholder="Username"/>
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="email" class="sr-only">Email</label>
                                        <input id="email" class="form-control input-group-lg" type="text" name="Email"
                                               title="Enter Email" placeholder="Your Email"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        <label for="password" class="sr-only">Password</label>
                                        <input id="password" class="form-control input-group-lg" type="password"
                                               name="password" title="Enter password" placeholder="Password"/>
                                    </div>
                                    <div class="form-group col-xs-6">
                                        <label for="c-password" class="sr-only">Confirm password</label>
                                        <input id="c-password" class="form-control input-group-lg" type="password"
                                               name="password" title="Enter password again"
                                               placeholder="Enter password again"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="edit-profile-photo">
                                            <img class="profile-pic pic2" src="images/user-avatar.jpg"
                                                 alt="">
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                    <input type="file" class="upload file-upload up2"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-xs-6">
                                        <div class="row">
                                            <div class="form-group col-xs-12">
                                                <label for="firstname" class="sr-only">First Name</label>
                                                <input id="firstname" class="form-control input-group-lg" type="text"
                                                       name="firstname" title="Enter first name" placeholder="First name"/>
                                            </div>
                                            <div class="form-group col-xs-12">
                                                <label for="lastname" class="sr-only">Last Name</label>
                                                <input id="lastname" class="form-control input-group-lg" type="text"
                                                       name="lastname" title="Enter last name" placeholder="Last name"/>
                                            </div>
                                        </div>
                                        <div class="form-group gender">
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio" checked>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Female
                                            </label>
                                        </div>
                                        <button class="btn btn-primary mt-20">Register Now</button>
                                    </div>
                                </div>
                            </form><!--Register Now Form Ends-->
                            <!--                            <p><a href="#">Already have an account?</a></p>-->
                        </div><!--Registration Form Contents Ends-->

                        <!--Login-->
                        <div class="tab-pane" id="login">
                            <h3>Login</h3>
                            <p class="text-muted">Log into your account</p>

                            <!--Login Form-->
                            <form name="Login_form" id='Login_form'>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="my-email" class="sr-only">Email</label>
                                        <input id="my-email" class="form-control input-group-lg" type="text"
                                               name="Email" title="Enter Email" placeholder="Your Email"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="my-password" class="sr-only">Password</label>
                                        <input id="my-password" class="form-control input-group-lg" type="password"
                                               name="password" title="Enter password" placeholder="Password"/>
                                    </div>
                                </div>
                            </form><!--Login Form Ends-->
                            <p><a href="#">Forgot Password?</a></p>
                            <button class="btn btn-primary">Login Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--preloader-->
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>


<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky-kit.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>

<script src="js/script.js"></script>

</body>

</html>
