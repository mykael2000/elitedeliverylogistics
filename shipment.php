<?php
include 'connection.php';
$tracking_id = $_POST['tracking_id'];
if (empty($tracking_id)) {
    header('location:tracking.html');
}
$sql = "SELECT * FROM shipments WHERE tracking_id = '$tracking_id'";
$query = mysqli_query($con, $sql);
if ($query->num_rows < 1) {
    echo "<script>alert('Invalid Tracking Number, please re-enter a new Tracking Number!')</script>";
    header("refresh:1;tracking.html");
}
$fetch = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">


<!-- Mirrored from bolt-cargologistics.com/tracking by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 01:13:08 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- TITLE -->
    <title>Tracking - Elite Delivery Logistics Company</title>

    <!--  FAVICON  -->
    <link rel="shortcut icon" href="images/icons/favicon.png">

    <!-- FONT AWESOME ICONS LIBRARY -->
    <link rel="stylesheet" href="fonts/css/all.min.css">

    <!-- CSS LIBRARY STYLES -->
    <link rel="stylesheet" href="css/lib/bootstrap.min.css">
    <link rel='stylesheet' href="css/lib/flickity.min.css">
    <link rel='stylesheet' href="css/lib/magnific-popup.min.css">
    <link rel="stylesheet" href="css/lib/owl.carousel.min.css">
    <link rel="stylesheet" href="css/lib/slick.min.css">
    <link rel="stylesheet" href="css/lib/aos.min.css">
    <link rel="stylesheet" href="css/navbar.css">

    <!-- CSS TEMPLATE STYLES -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../code.jquery.com/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="js/lib/main.js"></script>
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- MODERNIZR LIBRARY -->
    <script src="js/modernizr-custom.js"></script>

    <style>
    .spin-hide {
        display: none;
    }
    </style>

</head>

<body>

    <!-- PRELOADER START -->
    <div id="loader-wrapper">
        <div class="loader" id="cube"></div>
    </div>
    <!-- PRELOADER END -->

    <header>
        <!-- TOP HEADER START -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="top-social">
                            <li><a href="#"><i class="fab fa-periscope"></i></a></li>
                            <li><a href="#">1085 Rosemont Avenue, Lake Mary Florida United States</a></li>
                            <li><a href="#"><i class="fab fa-iv"></i></a></li>
                            <li><a href="#"><i class="fab fa-iv"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="top-contact">
                            <li class="email">support@elitedeliverylogistics.com</li>
                            <li><a class="btn btn-default" href="contact.html" role="button">Get Quote</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- TOP HEADER END -->

        <!-- NAV START -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a href="index.html" class="navbar-brand"><img src="images/logos/logo2.png" alt=""></a>

                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <a href="index.html" class="nav-link">HOME</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link" data-toggle="dropdown">ABOUT</a>
                            <div class="dropdown-menu">
                                <a href="about-us.html" class="dropdown-item">About Us</a>
                                <a href="faq.html" class="dropdown-item">FAQ</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link" data-toggle="dropdown">EXTRAS</a>
                            <div class="dropdown-menu">
                                <a href="services.html" class="dropdown-item">Services</a>
                                <a href="careers.html" class="dropdown-item">Careers</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link" data-toggle="dropdown">SERVICES</a>
                            <div class="dropdown-menu">
                                <a href="air-freight.html" class="dropdown-item">Air Freight</a>
                                <a href="ground-freight.html" class="dropdown-item">Ground Freight</a>
                                <a href="maritime-freight.html" class="dropdown-item">Maritime Freight</a>
                                <a href="railway-freight.html" class="dropdown-item">Railway Freight</a>
                                <a href="packging.html" class="dropdown-item">Packaging</a>
                                <a href="warehousing.html" class="dropdown-item">Warehousing</a>
                            </div>
                        </li>
                        <li class="dropdown active">
                            <a href="tracking.html" class="nav-link">TRACKING</a>
                        </li>
                        <li class="dropdown">
                            <a href="contact.html" class="nav-link">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- NAV END -->

        <!-- PAGE NAV START -->
        <div class="pages-hero tracking">
            <div class="container">
                <div class="pages-title">
                    <h1>Tracking</h1>
                    <div class="page-nav">
                        <p>Home &nbsp; | &nbsp; Tracking</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE NAV END -->
    </header>

    <!-- CONTENT START -->
    <div class="container mt-5 mb-5">
        <div class="row">

            <!-- FREIGHT CONTENT START -->
            <div class="col-lg-8 order-first order-md-9">
                <div class="services-description">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/international-shopping.png" alt="">
                                </figure>
                                <h4>Products</h4>
                                <p><?php echo $fetch['products']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/packege-protection.png" alt="">
                                </figure>
                                <h4>Details</h4>
                                <p><?php echo $fetch['details']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/package-tracking.png" alt="">
                                </figure>
                                <h4>Sender's Name</h4>
                                <p><?php echo $fetch['sender_name']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/delivery-van.png" alt="">
                                </figure>
                                <h4>Sender's Phone Number</h4>
                                <p><?php echo $fetch['sender_phone']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/international-shopping.png" alt="">
                                </figure>
                                <h4>Sender's Address</h4>
                                <p><?php echo $fetch['sender_address']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/packege-protection.png" alt="">
                                </figure>
                                <h4>Receiver's Name</h4>
                                <p><?php echo $fetch['receiver_name']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/package-tracking.png" alt="">
                                </figure>
                                <h4>Receiver's Phone Number</h4>
                                <p><?php echo $fetch['receiver_phone']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/delivery-van.png" alt="">
                                </figure>
                                <h4>Receiver's Address</h4>
                                <p><?php echo $fetch['receiver_address']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/international-shopping.png" alt="">
                                </figure>
                                <h4>Status</h4>
                                <p><?php echo $fetch['status']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/packege-protection.png" alt="">
                                </figure>
                                <h4>Estimated Delivery Date</h4>
                                <p><?php echo $fetch['estimated_delivery']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/package-tracking.png" alt="">
                                </figure>
                                <h4>Delivery Fee</h4>
                                <p>$<?php echo $fetch['delivery_fee']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/package-tracking.png" alt="">
                                </figure>
                                <h4>Item weight</h4>
                                <p><?php echo $fetch['weightt']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/package-tracking.png" alt="">
                                </figure>
                                <h4>Item Length</h4>
                                <p><?php echo $fetch['lengthh']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-us-box" data-aos="fade-up">
                                <figure class="why-us-icon">
                                    <img src="images/icons/package-tracking.png" alt="">
                                </figure>
                                <h4>Mode of Payment</h4>
                                <p><?php echo $fetch['mode_of_payment']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FREIGHT CONTENT END -->
        </div>
    </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-contact-col">
                            <div class="fc-circle">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="fc-caption">
                                <h5><a href="tel:+12137894764"> +12137894764</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 spacing-sm-center">
                        <div class="footer-contact-col">
                            <div class="fc-circle">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="fc-caption">
                                <h5><a
                                        href="mailto:support@elitedeliverylogistics.com">support@elitedeliverylogistics.com</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-contact-col">
                            <div class="fc-circle">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="fc-caption">
                                <h5>1085 Rosemont Avenue, Lake Mary Florida United States</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer-divider">
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-col fooler-left-col">
                        <figure class="footer-logo">
                            <img src="images/logos/logo2.png" alt="">
                        </figure>
                        <div class="footer-caption">
                            <p>We have a solution for every need to send or supply products in any mode of freight
                                transport land, sea and air We are an integrated logistics service company with a direct
                                presence in more than 130 countries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 spacing-md">
                    <div class="footer-col">
                        <h5>About</h5>
                        <ul class="footer-bulletlist">
                            <li><a href="about-us.html">Our Company</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 spacing-md ">
                    <div class="footer-col">
                        <h5>Company</h5>
                        <ul class="footer-bulletlist">
                            <li><a href="air-freight.html">Air Freight</a></li>
                            <li><a href="ground-freight.html">Ground Freight</a></li>
                            <li><a href="maritime-freight.html">Maritime Freight</a></li>
                            <li><a href="railway-freight.html">Railway Freight</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 spacing-md">
                    <div class="footer-col">
                        <h5>Newsletter</h5>
                        <div class="newsletter">
                            <form action="#" method="post" name="sign-up">
                                <input type="email" class="input" id="email" name="email"
                                    placeholder="Your email address" required>
                                <input type="submit" class="button" id="submit" value="SIGN UP">
                            </form>
                        </div>
                        <p class="newsletter">
                            Subscribe to our newsletter to receive the
                            latest news about our services.
                        </p>
                    </div>
                </div>
            </div>
            <hr class="footer-divider">
            <p class="footer-bootom">Copyright © 2024 Elite Delivery Logistics</p>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!--SCROLL TOP START-->
    <a href="#0" class="cd-top">Top</a>
    <!--SCROLL TOP START-->

    <!-- JAVASCRIPTS -->
    <script src="js/lib/jquery-3.6.0.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/lib/plugins.js"></script>
    <script src="js/lib/nav.fixed.top.js"></script>
    <script src="js/lib/contact.js"></script>
    <script src="js/main.js"></script>
    <!-- JAVASCRIPTS END -->

</body>


<!-- Mirrored from quickdevs.com/demo/Elite Delivery Logistics/contact by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Aug 2024 13:29:39 GMT -->

<!-- Mirrored from bolt-cargologistics.com/tracking by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 01:13:11 GMT -->

</html>