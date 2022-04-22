<?php

$conn = mysqli_connect("localhost","root", "", "proco"); 

                                $getCategorySql = "SELECT * FROM category";
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bstyles.css">

    <style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map_canvas {
        height: 100%;
    }

    /* Optional: Makes the sample page fill the window. */
    </style>
    <script src="plugins/modernizr.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Loader to display before content Load-->


    <!-- <img src="img/loader.gif" alt=""> -->



    <!-- Navigation -section
  =========================-->
    <?php include 'header.php'; ?>

    <section class="page-header services-header" data-parallax="scroll"
        data-image-src="images/header/services-folding-img.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> Our Services. <br> We Ensure Quality Design.</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Item Sections 
  =========================-->
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">

            <div class="row gx-0">
                <?php  
                  foreach($catgoryList as$categoryItem )
               
               {?>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="service-single.php?id=<?php echo $categoryItem['cat_id']; ?>">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2"><?php echo $categoryItem['category']; ?></div>

                            </div>
                        </div>
                        <img class="img-fluid" src="sassets/img/portfolio-1.jpg" alt="..." />
                    </a>
                </div>
                <?php } ?>
            </div>

        </div>
    </section>



    <!-- Pricing Table Sections 
  =========================-->
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

    <script src="js/script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>