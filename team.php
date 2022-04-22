<!DOCTYPE html>
<html lang="en">
<?php
$connect = mysqli_connect("localhost", "root", "", "proco");
$sql = "SELECT * FROM staff ";
$result = $connect->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Constra - Construction Html5 Template</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="images/favicon.png">



    <link href="sassets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="sassets/vendor/aos/aos.css" rel="stylesheet">
    <link href="sassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="sassets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="sassets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="sassets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">






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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/css/form.css">

    <link href="sassets/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">9051 Constra Incorporate, USA</p>
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
        <!--/ Header end -->
        <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
            <div class="banner-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-heading">
                                <h1 class="banner-title">Our Team</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="team.php">Team</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                                    </ol>
                                </nav>
                            </div>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Banner text end -->
        </div><!-- Banner area end -->


        <section class="main-container pb-4">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h3 class="section-sub-title">OUR TEAM</h3>
                    </div>
                </div>
                <!--/ Title row end -->
                <section id="team">
                    <div class="container" data-aos="fade-up">
                        <div class="section-header">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                        </div>

                        <div class="row">

                            <?php   // LOOP TILL END OF DATA 
                        while ($rows = $result->fetch_assoc()) {
                        ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="member" data-aos="fade-up" data-aos-delay="100">
                                    <?php $imageURL = 'admin/staff/' . $rows['image']; ?>
                                    <img src="<?php echo $imageURL; ?>" alt="" class="img-fluid" />
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <h4><?php echo $rows['staff']; ?></h4>
                                            <span><?php echo $rows['job']; ?></span>
                                            <div class="social">
                                                <a href=""><i class="bi bi-instagram"></i></a>
                                                <a href=""><i class="bi bi-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                        ?>




                        </div>

                    </div>
                </section><!-- End Team Section -->




            </div><!-- Container end -->
        </section><!-- Main container end -->

        <?php include 'footer.php'; ?>


        <!-- Javascript Files
  ================================================== -->

        <script src="sassets/vendor/purecounter/purecounter.js"></script>
        <script src="sassets//vendor/aos/aos.js"></script>
        <script src="sassets//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="sassets//vendor/glightbox/js/glightbox.min.js"></script>
        <script src="sassets//vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="sassets//vendor/swiper/swiper-bundle.min.js"></script>
        <script src="sassets//vendor/waypoints/noframework.waypoints.js"></script>
        <script src="sassets//vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="sassets//js/main.js"></script>






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


        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer>
        </script>
        <!-- Google Map Plugin-->
        <script src="plugins/google-map/map.js" defer></script>

        <!-- Template custom -->
        <script src="js/script.js"></script>

    </div><!-- Body inner end -->
</body>

</html>