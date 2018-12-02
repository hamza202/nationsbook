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
                                        <!-- Nav tabs -->
                                        <!-- Tab panes -->
                                        <div class="attachments">
                                            <ul>
                                                <li>
                                                    <a title="attachment" data-toggle="collapse" data-target="#dd">
                                                        <i class="fa fa-paperclip"></i>
                                                    </a>

                                                </li>
                                                <li>
                                                    <button type="submit" class="btn btn-primary ">Publish</button>
                                                </li>
                                            </ul>
                                            <div id="dd" class="collapse mt-20">
                                                <div class="input-group mb-20">
                                                    <span class="input-group-addon y-add"><i
                                                                class="fa fa-youtube-play"></i></span>
                                                    <input id="youtube-link" type="text" class="form-control"
                                                           name="youtube-link"
                                                           placeholder="https://www.youtube.com/watch?v=sdfdfdgd356">
                                                </div>
                                                <input id="input-b3" name="input-b3[]" type="file" class="file" multiple
                                                       data-show-upload="false" data-show-caption="true"
                                                       data-msg-placeholder="Select {files} for upload...">
                                            </div>
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
                                        <div class="description">

                                            <p>
                                                Curabitur world's most beautiful car in <a href="#" title="">#test drive
                                                    booking !</a> the most beatuiful car available in america and the
                                                saudia
                                                arabia, you can book your test drive by our official website
                                            </p>
                                        </div>
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
                                                    <a class="we-reply" title="Reply" data-toggle="collapse"
                                                       data-target="#demo4">
                                                        Reply
                                                    </a>
                                                </div>
                                                <p>we are working for the dance and sing songs. this car is very awesome
                                                    for
                                                    the youngster. please vote this car and like our post</p>
                                            </div>
                                            <div id="demo4" class="collapse">
                                                <ul>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/users/user-1.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Reply"></textarea>

                                                                <button type="submit" class="btn btn-primary ">Reply
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                        <p>yes, really very awesome car i see the features of this car
                                                            in
                                                            the official website of <a href="#"
                                                                                       title="">#Mercedes-Benz</a>
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
                                                        <p>i like lexus cars, lexus cars are most beautiful with the
                                                            awesome
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
                                                    <a class="we-reply" title="Reply" data-toggle="collapse"
                                                       data-target="#demo3">
                                                        Reply
                                                    </a>
                                                </div>
                                                <p>we are working for the dance and sing songs. this video is very
                                                    awesome
                                                    for the youngster. please vote this video and like our channel
                                                </p>
                                            </div>
                                            <div id="demo3" class="collapse">
                                                <ul>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/users/user-1.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Reply"></textarea>

                                                                <button type="submit" class="btn btn-primary ">Reply
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                        <div class="description">

                                            <p>
                                                Curabitur world's most beautiful car in <a href="#" title="">#test drive
                                                    booking !</a> the most beatuiful car available in america and the
                                                saudia
                                                arabia, you can book your test drive by our official website
                                            </p>
                                        </div>
                                        <iframe width="100%" height="315"
                                                src="https://www.youtube.com/embed/Ss5Yelj0pKs" frameborder="0"
                                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        <div style="display:none;" id="video1">
                                            <video class="lg-video-object lg-html5" controls preload="none">
                                                <source src="vedio/video.mp4" type="video/mp4">
                                                Your browser does not support HTML5 video.
                                            </video>
                                        </div>
                                        <ul class="imageGallery">

                                            <li class="video-icon" data-poster="vedio/thumb-v-y-1.jpg"
                                                data-thumb="vedio/thumb-v-y-1.jpg" data-html="#video1">
                                                <img src="vedio/thumb-v-y-1.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                                <img src="images/album/3.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                                <img src="images/album/1.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                                <img src="images/album/3.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                                <img src="images/album/1.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                                <img src="images/album/3.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                                <img src="images/album/1.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                                <img src="images/album/3.jpg"/>
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
                                                    <a class="we-reply" title="Reply" data-toggle="collapse"
                                                       data-target="#demo">
                                                        Reply
                                                    </a>
                                                </div>
                                                <p>we are working for the dance and sing songs. this car is very awesome
                                                    for
                                                    the youngster. please vote this car and like our post</p>
                                            </div>
                                            <div id="demo" class="collapse">
                                                <ul>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/users/user-1.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Reply"></textarea>

                                                                <button type="submit" class="btn btn-primary ">Reply
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                        <p>yes, really very awesome car i see the features of this car
                                                            in
                                                            the official website of <a href="#"
                                                                                       title="">#Mercedes-Benz</a>
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
                                                        <p>i like lexus cars, lexus cars are most beautiful with the
                                                            awesome
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
                                                    <a class="we-reply" title="Reply" data-toggle="collapse"
                                                       data-target="#demo2">
                                                        Reply
                                                    </a>
                                                </div>
                                                <p>we are working for the dance and sing songs. this video is very
                                                    awesome
                                                    for the youngster. please vote this video and like our channel
                                                </p>
                                            </div>
                                            <div id="demo2" class="collapse">
                                                <ul>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/users/user-1.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Reply"></textarea>

                                                                <button type="submit" class="btn btn-primary ">Reply
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                        <div class="description">

                                            <p>
                                                Curabitur world's most beautiful car in <a href="#" title="">#test drive
                                                    booking !</a> the most beatuiful car available in america and the
                                                saudia
                                                arabia, you can book your test drive by our official website
                                            </p>
                                        </div>
                                        <iframe width="100%" height="315"
                                                src="https://www.youtube.com/embed/Ss5Yelj0pKs" frameborder="0"
                                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        <div style="display:none;" id="video1">
                                            <video class="lg-video-object lg-html5" controls preload="none">
                                                <source src="vedio/video.mp4" type="video/mp4">
                                                Your browser does not support HTML5 video.
                                            </video>
                                        </div>
                                        <ul class="imageGallery">

                                            <li class="video-icon" data-poster="vedio/thumb-v-y-1.jpg"
                                                data-thumb="vedio/thumb-v-y-1.jpg" data-html="#video1">
                                                <img src="vedio/thumb-v-y-1.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                                <img src="images/album/3.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                                <img src="images/album/1.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                                <img src="images/album/3.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                                <img src="images/album/1.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                                <img src="images/album/3.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/1.jpg" data-src="images/album/1.jpg">
                                                <img src="images/album/1.jpg"/>
                                            </li>
                                            <li data-thumb="images/album/3.jpg" data-src="images/album/3.jpg">
                                                <img src="images/album/3.jpg"/>
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
                                                    <a class="we-reply" title="Reply" data-toggle="collapse"
                                                       data-target="#demo">
                                                        Reply
                                                    </a>
                                                </div>
                                                <p>we are working for the dance and sing songs. this car is very awesome
                                                    for
                                                    the youngster. please vote this car and like our post</p>
                                            </div>
                                            <div id="demo" class="collapse">
                                                <ul>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/users/user-1.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Reply"></textarea>

                                                                <button type="submit" class="btn btn-primary ">Reply
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                                        <p>yes, really very awesome car i see the features of this car
                                                            in
                                                            the official website of <a href="#"
                                                                                       title="">#Mercedes-Benz</a>
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
                                                        <p>i like lexus cars, lexus cars are most beautiful with the
                                                            awesome
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
                                                    <a class="we-reply" title="Reply" data-toggle="collapse"
                                                       data-target="#demo2">
                                                        Reply
                                                    </a>
                                                </div>
                                                <p>we are working for the dance and sing songs. this video is very
                                                    awesome
                                                    for the youngster. please vote this video and like our channel
                                                </p>
                                            </div>
                                            <div id="demo2" class="collapse">
                                                <ul>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="images/users/user-1.jpg" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Reply"></textarea>

                                                                <button type="submit" class="btn btn-primary ">Reply
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
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
