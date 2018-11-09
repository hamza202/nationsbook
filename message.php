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
                    <!-- Friend List
                    ================================================= -->
                    <div class="px-15 friend-list city-section">
                        <div class="chat-room">
                            <div  class="row">
                                <div class="col-md-5">

                                    <!-- Contact List in Left-->
                                    <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
                                        <li class="active">
                                            <a href="#contact-1" data-toggle="tab">
                                                <div class="contact">
                                                    <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left"/>
                                                    <div class="msg-preview">
                                                        <h6>Linda Lohan</h6>
                                                        <p class="text-muted">Hi there, how are you</p>
                                                        <small class="text-muted">a min ago</small>
                                                        <div class="chat-alert">1</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#contact-2" data-toggle="tab">
                                                <div class="contact">
                                                    <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left"/>
                                                    <div class="msg-preview">
                                                        <h6>Julia Cox</h6>
                                                        <p class="text-muted">see you soon</p>
                                                        <small class="text-muted">an hour ago</small>
                                                        <div class="seen"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#contact-3" data-toggle="tab">
                                                <div class="contact">
                                                    <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left"/>
                                                    <div class="msg-preview">
                                                        <h6>Sophia Lee</h6>
                                                        <p class="text-muted">Okay fine. thank you</p>
                                                        <small class="text-muted">13 hour ago</small>
                                                        <div class="replied"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#contact-4" data-toggle="tab">
                                                <div class="contact">
                                                    <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left"/>
                                                    <div class="msg-preview">
                                                        <h6>John Doe</h6>
                                                        <p class="text-muted">hey anybody there</p>
                                                        <small class="text-muted">Yesterday</small>
                                                        <div class="chat-alert">1</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#contact-5" data-toggle="tab">
                                                <div class="contact">
                                                    <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left"/>
                                                    <div class="msg-preview">
                                                        <h6>Anna Young</h6>
                                                        <p class="text-muted">I gotta go</p>
                                                        <small class="text-muted">2 days ago</small>
                                                        <div class="seen"></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#contact-6" data-toggle="tab">
                                                <div class="contact">
                                                    <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left"/>
                                                    <div class="msg-preview">
                                                        <h6>Richard Bell</h6>
                                                        <p class="text-muted">Hey there?</p>
                                                        <small class="text-muted">2 days ago</small>
                                                        <div class="chat-alert">1</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul><!--Contact List in Left End-->

                                </div>
                                <div class="col-md-7">

                                    <!--Chat Messages in Right-->
                                    <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                                        <div class="tab-pane active" id="contact-1">
                                            <div class="chat-body">
                                                <ul class="chat-message">
                                                    <li class="left">
                                                        <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Linda Lohan</h5>
                                                                <small class="text-muted">3 days ago</small>
                                                            </div>
                                                            <p>Hi honey, how are you doing???? Long time no see. Where have you been?</p>
                                                        </div>
                                                    </li>
                                                    <li class="right">
                                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Sarah Cruiz</h5>
                                                                <small class="text-muted">3 days ago</small>
                                                            </div>
                                                            <p>I have been on vacation</p>
                                                        </div>
                                                    </li>
                                                    <li class="right">
                                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Sarah Cruiz</h5>
                                                                <small class="text-muted">3 days ago</small>
                                                            </div>
                                                            <p>it was a great time for me. we had a lot of fun </p>
                                                        </div>
                                                    </li>
                                                    <li class="left">
                                                        <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Linda Lohan</h5>
                                                                <small class="text-muted">3 days ago</small>
                                                            </div>
                                                            <p>that's cool I wish I were you </p>
                                                        </div>
                                                    </li>
                                                    <li class="right">
                                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Sarah Cruiz</h5>
                                                                <small class="text-muted">3 days ago</small>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                                        </div>
                                                    </li>
                                                    <li class="left">
                                                        <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Linda Lohan</h5>
                                                                <small class="text-muted">a min ago</small>
                                                            </div>
                                                            <p>Hi there, how are you</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contact-2">
                                            <div class="chat-body">
                                                <ul class="chat-message">
                                                    <li class="left">
                                                        <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Julia Cox</h5>
                                                                <small class="text-muted">a day ago</small>
                                                            </div>
                                                            <p>Hi</p>
                                                        </div>
                                                    </li>
                                                    <li class="right">
                                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Sarah Cruiz</h5>
                                                                <small class="text-muted">a day ago</small>
                                                            </div>
                                                            <p>hellow</p>
                                                        </div>
                                                    </li>
                                                    <li class="left">
                                                        <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Julia Cox</h5>
                                                                <small class="text-muted">an hour ago</small>
                                                            </div>
                                                            <p>good</p>
                                                        </div>
                                                    </li>
                                                    <li class="right">
                                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Sarah Cruiz</h5>
                                                                <small class="text-muted">an hour ago</small>
                                                            </div>
                                                            <p>see you soon</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contact-3">
                                            <div class="chat-body">
                                                <ul class="chat-message">
                                                    <li class="right">
                                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Sarah</h5>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                                        </div>
                                                    </li>
                                                    <li class="left">
                                                        <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Sophia Lee</h5>
                                                                <small class="text-muted">a day ago</small>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                                                        </div>
                                                    </li>
                                                    <li class="right">
                                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Sarah  Cruiz</h5>
                                                                <small class="text-muted">13 hours ago</small>
                                                            </div>
                                                            <p>Okay fine. thank you</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contact-4">
                                            <div class="chat-body">
                                                <ul class="chat-message">
                                                    <li class="left">
                                                        <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>John Doe</h5>
                                                                <small class="text-muted">a day ago</small>
                                                            </div>
                                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                                                        </div>
                                                    </li>
                                                    <li class="left">
                                                        <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>John Doe</h5>
                                                                <small class="text-muted">a day ago</small>
                                                            </div>
                                                            <p>hey anybody there</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contact-5">
                                            <div class="chat-body">
                                                <ul class="chat-message">
                                                    <li class="left">
                                                        <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Anna Young</h5>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>
                                                        </div>
                                                    </li>
                                                    <li class="left">
                                                        <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Anna Young</h5>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                        </div>
                                                    </li>
                                                    <li class="right">
                                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Sarah Cruiz</h5>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <p>I gotta go</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contact-6">
                                            <div class="chat-body">
                                                <ul class="chat-message">
                                                    <li class="left">
                                                        <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Richard Bell</h5>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <p>Hello</p>
                                                        </div>
                                                    </li>
                                                    <li class="left">
                                                        <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Richard Bell</h5>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <p>Hi</p>
                                                        </div>
                                                    </li>
                                                    <li class="left">
                                                        <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Richard Bell</h5>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <p>Hey</p>
                                                        </div>
                                                    </li>
                                                    <li class="left">
                                                        <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                                                        <div class="chat-item">
                                                            <div class="chat-item-header">
                                                                <h5>Richard Bell</h5>
                                                                <small class="text-muted">2 days ago</small>
                                                            </div>
                                                            <p>Hey there</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!--Chat Messages in Right End-->

                                    <div class="send-message">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type your message">
                                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Send</button>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
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
<script src="js/jquery.sticky-kit.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>
