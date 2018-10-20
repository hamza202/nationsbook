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
<script src="js/africa.js"></script>
<script>
    var data = [
        ['ug', 0],
        ['ng', 1],
        ['st', 2],
        ['tz', 3],
        ['sl', 4],
        ['gw', 5],
        ['cv', 6],
        ['sc', 7],
        ['tn', 8],
        ['mg', 9],
        ['ke', 10],
        ['cd', 11],
        ['fr', 12],
        ['mr', 13],
        ['dz', 14],
        ['er', 15],
        ['gq', 16],
        ['mu', 17],
        ['sn', 18],
        ['km', 19],
        ['et', 20],
        ['ci', 21],
        ['gh', 22],
        ['zm', 23],
        ['na', 24],
        ['rw', 25],
        ['sx', 26],
        ['so', 27],
        ['cm', 28],
        ['cg', 29],
        ['eh', 30],
        ['bj', 31],
        ['bf', 32],
        ['tg', 33],
        ['ne', 34],
        ['ly', 35],
        ['lr', 36],
        ['mw', 37],
        ['gm', 38],
        ['td', 39],
        ['ga', 40],
        ['dj', 41],
        ['bi', 42],
        ['ao', 43],
        ['gn', 44],
        ['zw', 45],
        ['za', 46],
        ['mz', 47],
        ['sz', 48],
        ['ml', 49],
        ['bw', 50],
        ['sd', 51],
        ['ma', 52],
        ['eg', 53],
        ['ls', 54],
        ['ss', 55],
        ['cf', 56]
    ];


    // Create the chart
    Highcharts.mapChart('map-container', {
        chart: {
            map: 'custom/africa',
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
