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
<script src="js/europe.js"></script>
<script>
    var data = [
        ['dk', 0],
        ['fo', 1],
        ['hr', 2],
        ['nl', 3],
        ['ee', 4],
        ['bg', 5],
        ['es', 6],
        ['it', 7],
        ['sm', 8],
        ['va', 9],
        ['tr', 10],
        ['mt', 11],
        ['fr', 12],
        ['no', 13],
        ['de', 14],
        ['ie', 15],
        ['ua', 16],
        ['fi', 17],
        ['se', 18],
        ['ru', 19],
        ['gb', 20],
        ['cy', 21],
        ['pt', 22],
        ['gr', 23],
        ['lt', 24],
        ['si', 25],
        ['ba', 26],
        ['mc', 27],
        ['al', 28],
        ['cnm', 29],
        ['nc', 30],
        ['rs', 31],
        ['ro', 32],
        ['me', 33],
        ['li', 34],
        ['at', 35],
        ['sk', 36],
        ['hu', 37],
        ['ad', 38],
        ['lu', 39],
        ['ch', 40],
        ['be', 41],
        ['kv', 42],
        ['pl', 43],
        ['mk', 44],
        ['lv', 45],
        ['by', 46],
        ['is', 47],
        ['md', 48],
        ['cz', 49]
    ];


    // Create the chart
    Highcharts.mapChart('map-container', {
        chart: {
            map: 'custom/europe',
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
