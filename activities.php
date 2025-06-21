<?php 
include "authentication.php";

include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="pop-up-msg">
        <?php include "message.php"; ?>
    </div>
    <?php include "navbar.php"; ?>

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Static | Activities</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->


    <section>
        <div class="container">
            <div class="owl-carousel">
                <div class="card" style="margin:60px 0;">
                    <img class="card-img-top hvr img-fluid" src="assets/images/raft.jpg" alt="Card image cap" style="height: 275px;">
                    <div class="card-body">
                        <h2 class="card-text">Activity : Rafting</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod placeat
                            adipisci consequatur atque sed beatae aliquid vel, voluptatum amet. Nemo.</p>

                    </div>
                </div>

                <div class="card" style="margin:60px 0;">
                    <img class="card-img-top hvr img-fluid" src="assets/images/bunji.jpg" alt="Card image cap" style="height: 275px;">
                    <div class="card-body">
                        <h2 class="card-text">Activity : Bunji jumping</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod placeat
                            adipisci consequatur atque sed beatae aliquid vel, voluptatum amet. Nemo.</p>
                    </div>
                </div>

                <div class="card" style="margin:60px 0;">
                    <img class="card-img-top hvr img-fluid" src="assets/images/boat.jpg" alt="Card image cap" style="height: 275px;">
                    <div class="card-body">
                        <h2 class="card-text">Activity : Boating</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod placeat
                            adipisci consequatur atque sed beatae aliquid vel, voluptatum amet. Nemo.</p>
                    </div>
                </div>

                <div class="card" style="margin:60px 0;">
                    <img class="card-img-top hvr img-fluid" src="assets/images/camp.jpg" alt="Card image cap" style="height: 275px;">
                    <div class="card-body">
                        <h2 class="card-text bold">Activity : Camp fire</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod placeat
                            adipisci consequatur atque sed beatae aliquid vel, voluptatum amet. Nemo.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Start QT -->
    <div class="qt-box qt-background">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                    <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">ROOMS</a>
                    </div>
                </div>
            </div>
    </div>
    <!-- End QT -->

     <!-- Start Customer Reviews -->
     <div class="customer-reviews-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Customer Reviews</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <div id="reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item text-center active">
                                <div class="test_box">
                                    <h4>Mark jonson</h4>
                                    <i><img src="assets/images/te1.png" alt="#" /></i>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour,</p>
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="test_box">
                                    <h4>Mark jonson</h4>
                                    <i><img src="assets/images/te1.png" alt="#" /></i>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour,</p>
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="test_box">
                                    <h4>Mark jonson</h4>
                                    <i><img src="assets/images/te1.png" alt="#" /></i>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour,</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Customer Reviews -->


    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>


    <?php include "footer.php"; ?>
    <!-- ALL JS FILES -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/jquery.superslides.min.js"></script>
    <script src="assets/js/images-loded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        loop: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    })
    </script>
</body>

</html>