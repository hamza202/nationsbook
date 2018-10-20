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

<div id="page-contents" class="index-container">
    <div class="container">
        <div class="row">

            <!-- Newsfeed Common Side Bar Left
            ================================================= -->
            <div class="col-md-2 static add-container">
                <div class="my-Add">
                    <img class="img-responsive" src="images/p.png" alt="">
                </div>
                <div class="my-Add">
                    <img class="img-responsive" src="images/p.png" alt="">
                </div>
            </div>
            <div class="col-md-8 map-section">
                <!-- Post Content
                ================================================= -->
                <div class="post-content">
                    <div id="map-container"></div>
                </div>

            </div>
            <?php include 'sidebar.php'?>
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
<script src="js/annotations.js"></script>
<script src="js/exporting.js"></script>
<script src="js/au-all.js"></script>
<script>
    var data = [
        ['au-nt', 0],
        ['au-wa', 1],
        ['au-ct', 2],
        ['au-sa', 3],
        ['au-ql', 4],
        ['au-ts', 6],
        ['au-jb', 7],
        ['au-ns', 8],
        ['au-vi', 9]
    ];


    // Create the chart
    Highcharts.mapChart('map-container', {
        chart: {
            map: 'countries/au/au-all',
            height: 460,
        },

        title: {
            text: ''
        },
        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
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
            point:{
                events:{
                    click: function(){
                        location.href = 'http://localhost/' +
                            this.name + '.php';
                    }
                }
            },
            dataLabels: {
                y: 20,
                enabled: true,
                format: '{point.name}'
            },
        }]
    });

</script>
</body>

</html>
