<?php
$connect = mysqli_connect("localhost", "root", "", "proco");
$sql = "SELECT * FROM staff ";
$result = $connect->query($sql);


$bsql = "SELECT * FROM banner ";
$bresult = $connect->query($bsql);
$projectData = $bresult->fetch_assoc();


$getCategorySql = "SELECT * FROM category";
$catgoryResult = $connect->query($getCategorySql);
$catgoryList=mysqli_query($connect,$getCategorySql);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>PROCO FIBERS</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <!-- CSS
================================================== -->
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
    <link rel="stylesheet" href="css/bstyles.css">
    <link rel="stylesheet" href="css/slideshow.css">


</head>

<body>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">Proco-Fibers</p>
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
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="images/slide1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">

                <img src="images/slide2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">

                <img src="images/slide3.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Services</h3>
                    <h2 class="mb-5">What We Offer</h2>
                </div>
                <div class="row gx-4 gx-lg-5">

                    <?php  
                  foreach($catgoryList as$categoryItem )
               
               {?>

                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <a href="service-single.php?id=<?php echo $categoryItem['cat_id']; ?>">
                            <span
                                class="service-icon rounded-circle mx-auto mb-3"><?php $imageURL = 'admin/category/' . $categoryItem['image']; ?>
                                <img class="services-image" src=" <?php echo $imageURL; ?>" alt="" width="100"
                                    height="100" /></span>
                            <h4><strong> <?php echo $categoryItem['category']; ?></strong></h4>
                        </a>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </section>

        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="column-title">Who We Are</h3>
                        <p>when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a
                            horrible vermin.</p>
                        <blockquote>
                            <p>Semporibus autem quibusdam et aut officiis debitis aut rerum est aut optio cumque nihil
                                necessitatibus autemn ec tincidunt nunc posuere ut</p>
                        </blockquote>
                        <p>He lay on his armour-like back, and if he lifted. ultrices ultrices sapien, nec tincidunt
                            nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. If you are going
                            to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing.</p>

                    </div><!-- Col end -->

                    <div class="col-lg-6 mt-5 mt-lg-0">

                        <div id="page-slider" class="page-slider small-bg">

                            <div class="item" style="background-image:url(images/slider-pages/slide-page1.jpg)">
                                <div class="container">
                                    <div class="box-slider-content">
                                        <div class="box-slider-text">
                                            <h2 class="box-slide-title">Leadership</h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Item 1 end -->

                            <div class="item" style="background-image:url(images/slider-pages/slide-page2.jpg)">
                                <div class="container">
                                    <div class="box-slider-content">
                                        <div class="box-slider-text">
                                            <h2 class="box-slide-title">Relationships</h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Item 1 end -->

                            <div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
                                <div class="container">
                                    <div class="box-slider-content">
                                        <div class="box-slider-text">
                                            <h2 class="box-slide-title">Performance</h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Item 1 end -->
                        </div>

                    </div><!-- Col end -->
                </div><!-- Content row end -->

            </div><!-- Container end -->
        </section><!-- Main container end -->


        <section id="facts" class="facts-area dark-bg">
            <div class="container">
                <div class="facts-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 ts-facts">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp">
                                        <?php echo $projectData['projects']; ?></span></h2>
                                <h3 class="ts-facts-title">Total Projects</h3>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp">
                                        <?php echo $projectData['staffs']; ?></span>
                                </h2>
                                <h3 class="ts-facts-title">Staff Members</h3>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" "> <?php echo $projectData['hours']; ?></span></h2>
                                <h3 class=" ts-facts-title">Hours of Work</h3>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" "> <?php echo $projectData['countries']; ?></span></h2>
                                <h3 class=" ts-facts-title">Countries Experience</h3>
                            </div>
                        </div><!-- Col end -->

                    </div> <!-- Facts end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section><!-- Facts end -->

        <section id="ts-team" class="ts-team">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2 class="section-title">Quality Service</h2>
                        <h3 class="section-sub-title">Our Team</h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-lg-12">
                        <div id="team-slide" class="team-slide">
                            <?php   // LOOP TILL END OF DATA 
                        while ($rows = $result->fetch_assoc()) {
                        ?>
                            <div class="item">
                                <div class="ts-team-wrapper">
                                    <div class="team-img-wrapper">
                                        <?php $imageURL = 'admin/staff/' . $rows['image']; ?>
                                        <img src="<?php echo $imageURL; ?>" alt="" width="100" height="100" />
                                    </div>
                                    <div class="ts-team-content">
                                        <h3 class="ts-name"><?php echo $rows['staff']; ?></h3>
                                        <p class="ts-designation"><?php echo $rows['job']; ?></p>

                                        <!--/ social-icons-->
                                    </div>
                                </div>
                                <!--/ Team wrapper end -->
                            </div><!-- Team 1 end -->
                            <?php
                        }
                        ?>
                        </div><!-- Team slide end -->
                    </div>
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section>
        <!--/ Team end -->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Portfolio</h3>
                    <h2 class="mb-5">Recent Projects</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Stationary</div>
                                    <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="sassets/img/portfolio-1.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Ice Cream</div>
                                    <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice
                                        cream cone!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="sassets/img/portfolio-2.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Strawberries</div>
                                    <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar
                                        on top!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="sassets/img/portfolio-3.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Workspace</div>
                                    <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.
                                    </p>
                                </div>
                            </div>
                            <img class="img-fluid" src="sassets/img/portfolio-4.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>







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
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer>
        </script>
        <!-- Google Map Plugin-->
        <script src="plugins/google-map/map.js" defer></script>

        <!-- Template custom -->
        <script src="js/script.js"></script>
        <script src="js/scripts.js"></script>
        <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 6000); // Change image every 2 seconds
        }
        </script>

    </div><!-- Body inner end -->
</body>

</html>