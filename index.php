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
<?php include "header.php"?>
<!--Header End-->

<div id="page-contents">
    <div class="container">
        <div class="row">

            <!-- Newsfeed Common Side Bar Left
            ================================================= -->
            <div class="col-md-3 static">
                <div class="profile-card">
                    <img src="images/users/user-12.jpg" alt="user" class="profile-photo"/>
                    <h5><a href="#">Hamza abo aitah</a></h5>
                    <p class="m-0">Happy world</p>
                </div><!--profile card ends-->
                <div class="nav-news-container relative">
                    <h5>My Office </h5>
                <ul class="nav-news-feed">
                    <li><i class="icon ion-chatboxes"></i>
                        <div class="profile-message-num relative">
                            <a class="relative" href="#">Messages
                                <span>5</span>
                            </a>

                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li><i><img src="images/meeting.svg" alt=""></i>
                        <div><a href="#">Meetings and Tasks</a></div>
                    </li>
                    <li><i class="icon ion-ios-people"></i>
                        <div><a href="#">Partner and Clients</a></div>
                    </li>
                    <li><i><img src="images/staff.svg" alt=""></i>
                        <div><a href="#">My Staff</a></div>
                    </li>
                    <li><i><img src="images/meeting-room.svg" alt=""></i>
                        <div><a href="#">Our Meeting Room</a></div>
                    </li>
                    <li><i><img src="images/jobs.svg"></i>
                        <div><a href="#">Our Vacancies</a></div>
                    </li>
                    <li><i><img src="images/myadd.svg"></i>
                        <div><a href="#">My Ads on N</a></div>
                    </li>
                    <li><i><img src="images/support.svg"></i>
                        <div><a href="#">My Logistic Services</a></div>
                    </li>
                    <!--                    <li><i class="icon ion-images"></i>-->
                    <!--                        <div><a href="newsfeed-images.html">Images</a></div>-->
                    <!--                    </li>-->
                    <!--                    <li><i class="icon ion-ios-videocam"></i>-->
                    <!--                        <div><a href="newsfeed-videos.html">Videos</a></div>-->
                    <!--                    </li>-->
                </ul><!--news-feed links ends-->
                </div>
            </div>
            <div class="col-md-7">
                <!-- Post Content
                ================================================= -->
                <div class="post-content">
                    <div id="map-container"></div>
                </div>

            </div>
            <div class="col-md-2 static">
                <div class="my-Add">
                    <h2>AD</h2>
                </div>
                <div class="my-Add">
                    <h2>AD</h2>
                </div>
            </div>

            <!-- Newsfeed Common Side Bar Right
            ================================================= -->

        </div>
    </div>
</div>

<!-- Footer
================================================= -->
<?php include "footer.php" ?>
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
<script src="js/script.js"></script>
<script src="js/highmaps.js"></script>
<script src="js/exporting.js"></script>
<script src="js/world-continents.js"></script>
<script>
    var data = [
        ['eu', 0],
        ['oc', 1],
        ['af', 2],
        ['as', 3],
        ['na', 4],
        ['sa', 5]
    ];

    // Create the chart
    Highcharts.mapChart('map-container', {
        chart: {
            map: 'custom/world-continents',

        },
        title: {
            text: ''
        },
        mapNavigation: {
            enabled: false,
        },
        colorAxis: {
            min: 0
        },

        series: [{
            data: data,
            name: 'Random data',
            states: {
                hover: {
                    color: '#BADA55'
                }
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }]
    });

</script>
</body>

</html>
