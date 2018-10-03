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

<div id="page-contents">
    <div class="container">
        <div class="row">

            <!-- Newsfeed Common Side Bar Left
            ================================================= -->

            <div class="col-md-2 static">
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
                <!-- Post Content
                ================================================= -->
                <div class="post-content newsfeed-page">

                    <div class="central-meta item comment-post-container">
                        <div class="new-postbox">
                            <figure>
                                <img src="images/users/user-12.jpg" alt="">
                            </figure>
                            <div class="newpst-input">
                                <form method="post">
                                    <textarea rows="2" placeholder="write something"></textarea>
                                    <div class="attachments">
                                        <ul>
                                            <li>
                                                <i class="fa fa-music"></i>
                                                <label class="fileContainer">
                                                    <input type="file">
                                                </label>
                                            </li>
                                            <li>
                                                <i class="fa fa-image"></i>
                                                <label class="fileContainer">
                                                    <input type="file">
                                                </label>
                                            </li>
                                            <li>
                                                <i class="fa fa-video-camera"></i>
                                                <label class="fileContainer">
                                                    <input type="file">
                                                </label>
                                            </li>
                                            <li>
                                                <i class="fa fa-camera"></i>
                                                <label class="fileContainer">
                                                    <input type="file">
                                                </label>
                                            </li>
                                            <li>
                                                <button type="submit" class="btn btn-primary ">Publish</button>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- add post new box -->

                    <div class="central-meta item">
                        <div class="user-post">
                            <div class="friend-info">
                                <figure>
                                    <img src="images/users/user-12.jpg" alt="">
                                </figure>
                                <div class="friend-name">
                                    <ins><a href="#" title="">Janice Griffith</a></ins>
                                    <span>published: june,2 2018 19:PM</span>
                                </div>
                                <div class="post-meta">
                                    <img src="images/album/10.jpg" alt="">
                                    <div class="we-video-info">
                                        <ul>

                                            <li>
																<span class="views" data-toggle="tooltip" title="views">
																	<i class="fa fa-eye"></i>
																	<ins>1.2k</ins>
																</span>
                                            </li>
                                            <li>
																<span class="comment" data-toggle="tooltip"
                                                                      title="Comments">
																	<i class="fa fa-comments-o"></i>
																	<ins>52</ins>
																</span>
                                            </li>
                                            <li>
																<span class="like" data-toggle="tooltip" title="like">
																	<i class="fa fa-heart-o"></i>
																	<ins>2.2k</ins>
																</span>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="description">

                                        <p>
                                            Curabitur world's most beautiful car in <a href="#" title="">#test drive
                                                booking !</a> the most beatuiful car available in america and the saudia
                                            arabia, you can book your test drive by our official website
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="coment-area">
                                <ul class="we-comet">
                                    <li class="line-has-child">
                                        <div class="comet-avatar">
                                            <img src="images/users/user-5.jpg" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="#" title="">Jason borne</a></h5>
                                                <span>1 year ago</span>
                                                <a class="we-reply" href="#" title="Reply"><i
                                                            class="fa fa-reply"></i></a>
                                            </div>
                                            <p>we are working for the dance and sing songs. this car is very awesome for
                                                the youngster. please vote this car and like our post</p>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="comet-avatar">
                                                    <img src="images/users/user-4.jpg" alt="">
                                                </div>
                                                <div class="we-comment">
                                                    <div class="coment-head">
                                                        <h5><a href="#" title="">alexendra dadrio</a></h5>
                                                        <span>1 month ago</span>

                                                    </div>
                                                    <p>yes, really very awesome car i see the features of this car in
                                                        the official website of <a href="#" title="">#Mercedes-Benz</a>
                                                        and really impressed :-)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comet-avatar">
                                                    <img src="images/users/user-3.jpg" alt="">
                                                </div>
                                                <div class="we-comment">
                                                    <div class="coment-head">
                                                        <h5><a href="#" title="">Olivia</a></h5>
                                                        <span>16 days ago</span>
                                                    </div>
                                                    <p>i like lexus cars, lexus cars are most beautiful with the awesome
                                                        features, but this car is really outstanding than lexus</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comet-avatar">
                                            <img src="images/users/user-2.jpg" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="#" title="">Donald Trump</a></h5>
                                                <span>1 week ago</span>
                                                <a class="we-reply" href="#" title="Reply"><i
                                                            class="fa fa-reply"></i></a>
                                            </div>
                                            <p>we are working for the dance and sing songs. this video is very awesome
                                                for the youngster. please vote this video and like our channel
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" title="" class="showmore underline">more comments</a>
                                    </li>
                                    <li class="post-comment">
                                        <div class="comet-avatar">
                                            <img src="images/users/user-1.jpg" alt="">
                                        </div>
                                        <div class="post-comt-box">
                                            <form method="post">
                                                <textarea placeholder="Post your comment"></textarea>

                                                <button type="submit" class="btn btn-primary ">comment</button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="central-meta item">
                        <div class="user-post">
                            <div class="friend-info">
                                <figure>
                                    <img src="images/users/user-12.jpg" alt="">
                                </figure>
                                <div class="friend-name">
                                    <ins><a href="#" title="">Hamza</a></ins>
                                    <span>published: june,2 2018 19:PM</span>
                                </div>
                                <div class="post-meta">
                                    <ul id="imageGallery">
                                        <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                            <img src="images/album/1.jpg" />
                                        </li>
                                        <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                            <img src="images/album/3.jpg" />
                                        </li>
                                        <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                            <img src="images/album/1.jpg" />
                                        </li>
                                        <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                            <img src="images/album/3.jpg" />
                                        </li>
                                        <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                            <img src="images/album/1.jpg" />
                                        </li>
                                        <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                            <img src="images/album/3.jpg" />
                                        </li>
                                        <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                            <img src="images/album/1.jpg" />
                                        </li>
                                        <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                            <img src="images/album/3.jpg" />
                                        </li>
                                    </ul>
                                    <div class="we-video-info">
                                        <ul>

                                            <li>
																<span class="views" data-toggle="tooltip" title="views">
																	<i class="fa fa-eye"></i>
																	<ins>1.2k</ins>
																</span>
                                            </li>
                                            <li>
																<span class="comment" data-toggle="tooltip"
                                                                      title="Comments">
																	<i class="fa fa-comments-o"></i>
																	<ins>52</ins>
																</span>
                                            </li>
                                            <li>
																<span class="like" data-toggle="tooltip" title="like">
																	<i class="fa fa-heart-o"></i>
																	<ins>2.2k</ins>
																</span>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="description">

                                        <p>
                                            Curabitur world's most beautiful car in <a href="#" title="">#test drive
                                                booking !</a> the most beatuiful car available in america and the saudia
                                            arabia, you can book your test drive by our official website
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="coment-area">
                                <ul class="we-comet">
                                    <li class="line-has-child">
                                        <div class="comet-avatar">
                                            <img src="images/users/user-5.jpg" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="#" title="">Jason borne</a></h5>
                                                <span>1 year ago</span>
                                                <a class="we-reply" title="Reply" data-toggle="collapse" data-target="#demo"><i
                                                            class="fa fa-reply"></i></a>
                                            </div>
                                            <p>we are working for the dance and sing songs. this car is very awesome for
                                                the youngster. please vote this car and like our post</p>
                                        </div>
                                        <div id="demo" class="collapse">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="comet-avatar">
                                                    <img src="images/users/user-4.jpg" alt="">
                                                </div>
                                                <div class="we-comment">
                                                    <div class="coment-head">
                                                        <h5><a href="#" title="">alexendra dadrio</a></h5>
                                                        <span>1 month ago</span>

                                                    </div>
                                                    <p>yes, really very awesome car i see the features of this car in
                                                        the official website of <a href="#" title="">#Mercedes-Benz</a>
                                                        and really impressed :-)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comet-avatar">
                                                    <img src="images/users/user-3.jpg" alt="">
                                                </div>
                                                <div class="we-comment">
                                                    <div class="coment-head">
                                                        <h5><a href="#" title="">Olivia</a></h5>
                                                        <span>16 days ago</span>
                                                    </div>
                                                    <p>i like lexus cars, lexus cars are most beautiful with the awesome
                                                        features, but this car is really outstanding than lexus</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comet-avatar">
                                            <img src="images/users/user-2.jpg" alt="">
                                        </div>
                                        <div class="we-comment">
                                            <div class="coment-head">
                                                <h5><a href="#" title="">Donald Trump</a></h5>
                                                <span>1 week ago</span>
                                                <a class="we-reply" href="#" title="Reply"><i
                                                            class="fa fa-reply"></i></a>
                                            </div>
                                            <p>we are working for the dance and sing songs. this video is very awesome
                                                for the youngster. please vote this video and like our channel
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" title="" class="showmore underline">more comments</a>
                                    </li>
                                    <li class="post-comment">
                                        <div class="comet-avatar">
                                            <img src="images/users/user-1.jpg" alt="">
                                        </div>
                                        <div class="post-comt-box">
                                            <form method="post">
                                                <textarea placeholder="Post your comment"></textarea>

                                                <button type="submit" class="btn btn-primary ">comment</button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
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

<!-- Footer
================================================= -->
<div class="copyright">
    <p>NationsBook © 2018. All rights reserved</p>
</div>
<!--preloader-->
<div id="spinner-wrapper">
    <div class="spinner"></div>
</div>


<!-- Scripts
================================================= -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky-kit.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/lightslider.min.js"></script>
<script src="js/lightgallery-all.min.js"></script>
<script src="js/script.js"></script>
<script>
    $(document).ready(function () {
        $('#imageGallery').lightSlider({
            gallery: true,
            item: 1,
            loop: true,
            thumbItem: 9,
            slideMargin: 0,
            enableDrag: false,
            currentPagerPosition: 'left',
            onSliderLoad: function (el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }
        });
    });
</script>
</body>

</html>
