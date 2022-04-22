<?php

$conn =mysqli_connect("localhost", "root", "", "proco");

$getCategorySql = "SELECT * FROM category";
$catgoryResult = $conn->query($getCategorySql);
$catgoryList=mysqli_query($conn,$getCategorySql);
	?>


<section>
    <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6 footer-widget footer-about">
                        <h3 class="widget-title">ADDRESS</h3>
                        <img loading="lazy" width="200px" class="footer-logo" src="images/footer-logo.png"
                            alt="Constra">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done
                            idunt ut
                            labore et dolore magna aliqua.</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                </li>
                                <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://github.com/themefisher" aria-label="whatsapp"><i
                                            class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div><!-- Footer social end -->
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                        <h3 class="widget-title">Working Hours</h3>
                        <div class="working-hours">
                            We work 7 days a week, every day excluding major holidays. Contact us if you have an
                            emergency, with our
                            Hotline and Contact form.
                            <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                            <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                            <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                        <?php  
                  foreach($catgoryList as$categoryItem )
               
               {?>
                        <ul class="list-arrow">
                            <li><?php echo $categoryItem['category']; ?>
                            </li>

                        </ul>
                        <?php } ?>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->

        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-info text-center text-md-left">
                            <span>Copyright &copy; <script>
                                document.write(new Date().getFullYear())
                                </script> PROCO-FIBERS
                        </div>
                    </div>


                </div><!-- Row end -->

                <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                    <button class="btn btn-primary" title="Back to Top">
                        <i class="fa fa-angle-double-up"></i>
                    </button>
                </div>

            </div><!-- Container end -->
        </div><!-- Copyright end -->
    </footer><!-- Footer end -->
</section>