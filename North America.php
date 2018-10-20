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
<script src="js/north-america.js"></script>
<script>
    var data = [
        ['gl', 0],
        ['lc', 1],
        ['um', 2],
        ['us', 3],
        ['vi', 4],
        ['ca', 5],
        ['cu', 6],
        ['kn', 7],
        ['ni', 8],
        ['gd', 9],
        ['dm', 10],
        ['ag', 11],
        ['tt', 12],
        ['sw', 13],
        ['bb', 14],
        ['jm', 15],
        ['bu', 16],
        ['bs', 17],
        ['vc', 18],
        ['ht', 19],
        ['sv', 20],
        ['hn', 21],
        ['do', 22],
        ['mx', 23],
        ['bz', 24],
        ['gt', 25],
        ['cr', 26],
        ['pr', 27],
        ['pa', 28]
    ];


    // Create the chart
    Highcharts.mapChart('map-container', {
        chart: {
            map: 'custom/north-america',
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
