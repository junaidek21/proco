<?php

$conn =mysqli_connect("localhost", "root", "", "proco");

$sqll= "SELECT * FROM project";


$projectList = mysqli_query($conn, $sqll);
	?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>PROCO-FIBERS</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- CSS
================================================== -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">






    <!-- Bootstrap -->

    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link href="assets/css/pstyle.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/pstyle.css">


</head>

<body>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">Kerala,India</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->
                    <?php include 'social.php'; ?>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->
        <!-- Header start -->
        <?php include 'header.php'; ?>
        <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-heading">
                                <h1 class="banner-title">Projects</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="projects.php">Project</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Projects</li>
                                    </ol>
                                </nav>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Portolio</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h3>Check our <span>Portfolio</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas
                        atque vitae autem.</p>
                </div>

                <div class="row">


                    <div class="row portfolio-container">
                        <?php
	  while ($row = $projectList->fetch_assoc()) {
		$project_id=$row['project_id'];

	?>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <?php $imageURL = 'admin/uploads/' . $row['image']; ?>
                            <img src="<?php echo $imageURL; ?>" class="img-fluid" alt="" ">
                            <div class=" portfolio-info">
                            <h4> <?php echo $row['project'];?></a>
                            </h4>
                            <a href="projects-single.php?id=<?php echo $project_id;?>" class="details-link"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                    <?php } ?>


                </div>

            </div>
        </section><!-- End Portfolio Section -->


        <?php include 'footer.php'; ?>


        <!-- Javascript Files
  ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="plugins/jQuery/jquery.min.js"></script>
        <!-- Bootstrap jQuery -->
        <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
        <!-- Slick Carousel -->
        <script src="plugins/slick/slick.min.js"></script>
        <script src="plugins/slick/slick-animation.min.js"></script>
        <!-- Color box -->
        <script src="plugins/colorbox/jquery.colorbox.js"></script>
        <!-- shuffle -->
        <script src="plugins/shuffle/shuffle.min.js" defer></script>



        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/glightbox/js/glightbox.min.js"></script>
        <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="vendor/swiper/swiper-bundle.min.js"></script>
        <script src="vendor/php-email-form/validate.js"></script>



        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer>
        </script>
        <!-- Google Map Plugin-->
        <script src="plugins/google-map/map.js" defer></script>



        <!-- Template custom -->
        <script src="js/script.js"></script>
        <script src="js/pmain.js"></script>

    </div><!-- Body inner end -->
</body>

</html>