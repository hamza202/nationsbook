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

<!-- Header
================================================= -->
<?php include "header.php" ?>
<!--Header End-->
<div class="">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="timeline-cover"
                     style="background: url(images/covers/3.jpg) no-repeat; background-position: center; background-size: cover;">
                    <!--Timeline Menu for Large Screens-->
                    <div class="change-photo-btn cover-time-btn">
                        <div class="photoUpload">
                            <span><i class="fa fa-picture-o"></i> Change Cover Image</span>
                            <input type="file" class="upload file-upload ">
                        </div>
                    </div>
                    <div class="timeline-nav-bar hidden-sm hidden-xs">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-info profile-info-time profile-info-time-big">
                                    <div class="edit-profile-photo">
                                        <img class="profile-pic pic2 img-responsive profile-photo"
                                             src="images/user-avatar.jpg " alt="">
                                        <div class="change-photo-btn">
                                            <div class="photoUpload">
                                                <span><i class="fa fa-upload"></i> Chose image</span>
                                                <input type="file" class="upload file-upload up2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-info-time-name">
                                        <h3>Hamza Abo aitah</h3>
                                        <p class="text-muted"><i class="fa fa-briefcase"></i>Creative Director</p>
                                        <p class="text-muted"><i class="fa fa-map-marker"></i>Creative Director</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="list-inline profile-menu">
                                    <?php include 'profile-menu.php'?>
                                </ul>
                                <ul class="follow-me list-inline">
                                    <li>1,299 people following her</li>
                                    <li>
                                        <button class="btn-primary">Add Friend</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--Timeline Menu for Large Screens End-->

                    <!--Timeline Menu for Small Screens-->
                    <div class="navbar-mobile hidden-lg hidden-md">
                        <div class="profile-info profile-info-time">
                            <div class="edit-profile-photo">
                                <img class="profile-pic pic3 img-responsive profile-photo" src="images/user-avatar.jpg"
                                     alt="">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Chose image</span>
                                        <input type="file" class="upload file-upload up3">
                                    </div>
                                </div>
                            </div>
                            <h4>Hamza Abo aitah</h4>
                            <p class="text-muted">Creative Director</p>
                        </div>
                        <div class="mobile-menu">
                            <ul class="list-inline">
                                <?php include 'profile-menu.php'?>
                            </ul>
                            <button class="btn-primary">Add Friend</button>
                        </div>
                    </div><!--Timeline Menu for Small Screens End-->

                </div>

            </div>
        </div>
    </div>
    <div id="page-contents" class="timeline-container">

        <div class="container">
            <div class="row">

                <!-- Newsfeed Common Side Bar Left
                ================================================= -->

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
                <div class="col-md-8">
                   <div class="row">
                       <div class="col-xs-12">
                           <div class="menu friend-search">
                           <form class="navbar-form ">
                               <div class="form-group">
                                   <i class="icon ion-android-search"></i>
                                   <input type="text" class="form-control" placeholder="Search friends">
                               </div>
                           </form>
                           </div>
                       </div>
                   </div>
                    <!-- Friend List
                    ================================================= -->
                    <div class="px-15 friend-list">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="friend-card">
                                    <img src="images/covers/1.jpg" alt="profile-cover" class="img-responsive cover">
                                    <div class="card-info">
                                        <img src="images/users/user-3.jpg" alt="user" class="profile-photo-lg">
                                        <div class="friend-info">
                                            <a href="#" class="pull-right text-green">My Friend</a>
                                            <h5><a href="#" class="profile-link">Sophia Lee</a></h5>
                                            <p>Student at Harvard</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="friend-card">
                                    <img src="images/covers/3.jpg" alt="profile-cover" class="img-responsive cover">
                                    <div class="card-info">
                                        <img src="images/users/user-4.jpg" alt="user" class="profile-photo-lg">
                                        <div class="friend-info">
                                            <a href="#" class="pull-right text-green">My Friend</a>
                                            <h5><a href="#" class="profile-link">John Doe</a></h5>
                                            <p>Traveler</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="friend-card">
                                    <img src="images/covers/5.jpg" alt="profile-cover" class="img-responsive cover">
                                    <div class="card-info">
                                        <img src="images/users/user-7.jpg" alt="user" class="profile-photo-lg">
                                        <div class="friend-info">
                                            <a href="#" class="pull-right text-green">My Friend</a>
                                            <h5><a href="timelime.html" class="profile-link">Robert Cook</a></h5>
                                            <p>Photographer at Photography</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="friend-card">
                                    <img src="images/covers/6.jpg" alt="profile-cover" class="img-responsive cover">
                                    <div class="card-info">
                                        <img src="images/users/user-8.jpg" alt="user" class="profile-photo-lg">
                                        <div class="friend-info">
                                            <a href="#" class="pull-right text-green">My Friend</a>
                                            <h5><a href="#" class="profile-link">Richard Bell</a></h5>
                                            <p>Graphic Designer at Envato</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="friend-card">
                                    <img src="images/covers/7.jpg" alt="profile-cover" class="img-responsive cover">
                                    <div class="card-info">
                                        <img src="images/users/user-2.jpg" alt="user" class="profile-photo-lg">
                                        <div class="friend-info">
                                            <a href="#" class="pull-right text-green">My Friend</a>
                                            <h5><a href="#" class="profile-link">Linda Lohan</a></h5>
                                            <p>Software Engineer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="friend-card">
                                    <img src="images/covers/8.jpg" alt="profile-cover" class="img-responsive cover">
                                    <div class="card-info">
                                        <img src="images/users/user-9.jpg" alt="user" class="profile-photo-lg">
                                        <div class="friend-info">
                                            <a href="#" class="pull-right text-green">My Friend</a>
                                            <h5><a href="#" class="profile-link">Anna Young</a></h5>
                                            <p>Musician</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="friend-card">
                                    <img src="images/covers/9.jpg" alt="profile-cover" class="img-responsive cover">
                                    <div class="card-info">
                                        <img src="images/users/user-6.jpg" alt="user" class="profile-photo-lg">
                                        <div class="friend-info">
                                            <a href="#" class="pull-right text-green">My Friend</a>
                                            <h5><a href="#" class="profile-link">James Carter</a></h5>
                                            <p>CEO at IT Farm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="friend-card">
                                    <img src="images/covers/10.jpg" alt="profile-cover" class="img-responsive cover">
                                    <div class="card-info">
                                        <img src="images/users/user-5.jpg" alt="user" class="profile-photo-lg">
                                        <div class="friend-info">
                                            <a href="#" class="pull-right text-green">My Friend</a>
                                            <h5><a href="#" class="profile-link">Alexis Clark</a></h5>
                                            <p>Traveler</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include 'sidebar.php' ?>
                <!-- Newsfeed Common Side Bar Right
                ================================================= -->

            </div>
        </div>
    </div>
</div>

<div>


</div>
<!--preloader-->
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>


<!-- Scripts
================================================= -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky-kit.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/lightslider.min.js"></script>
<script src="js/lightgallery-all.min.js"></script>
<script src="js/fileinput.min.js"></script>
<script src="js/script.js"></script>
<script>
    $(document).ready(function () {
        $('.imageGallery').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            thumbItem: 9,
            slideMargin: 0,
            enableDrag: false,
            currentPagerPosition: 'left',
            onSliderLoad: function (el) {
                $('.lSSlideOuter li a img[src*="vedio/"]').parent().parent().addClass('video-icon');
                el.lightGallery({
                    selector: '.imageGallery .lslide'
                });
            }
        });
    });
    $(document).on('ready', function () {
        $("#input-b3").fileinput({});
    });
</script>
<script>
    $(document).ready(function() {


        var readURL = function(input=['file']) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.pic3').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        };


        $(".up3").on('change', function(){
            readURL(this);
        });




    });
</script>
</body>

</html>
