<?php

$conn = mysqli_connect("localhost","root", "", "proco"); 

                                $getCategorySql = "SELECT * FROM vaccancy";
                                 $catgoryResult = $conn->query($getCategorySql);
                                $catgoryList=mysqli_query($conn,$getCategorySql);
?>




<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fiction Multipage Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="plugins/themefisher-fonts/themefisher-fonts.css">
    <!-- Light Box -->
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <!-- animation css -->
    <link rel="stylesheet" href="plugins/animate/animate.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">

    <!-- Revolution Slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bstyles.css">
    <link rel="stylesheet" href="ccss/style.css">


    <style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map_canvas {
        height: 100%;
    }
    </style>
    <script src="plugins/modernizr.min.js"></script>
</head>

<body>


    <?php include 'header.php'; ?>

    <section class="page-header services-header" data-parallax="scroll"
        data-image-src="images/header/services-folding-img.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> Careers <br> Join us</h1>
                </div>
            </div>
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <?php  
                  foreach($catgoryList as$categoryItem )
               
               {?>
                        <div class="col-md-4">
                            <div class="today">
                                <div class="today-piece  top  day">
                                    <h3> <?php echo $categoryItem['vaccancy']; ?></h3>
                                </div>
                                <div class="today-piece  middle  month">
                                    <h4>Qualification: <?php echo $categoryItem['qualification']; ?></h4>
                                </div>
                                <div class="today-piece  middle  date">
                                    <h4>No of Vaccancy: <?php echo $categoryItem['no']; ?></h4>
                                </div>
                                <div class="today-piece  bottom  year">
                                    <h4><?php echo $categoryItem['description']; ?></h4>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>


    <script src="plugins/jquery.min.js"></script>

    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Lightbox -->
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax.min.js"></script>
    <!-- Video -->
    <script src="plugins/jquery.vide.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>


    <script src="js/script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>