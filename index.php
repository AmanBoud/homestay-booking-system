<?php 
include "authentication.php";

include "database.php";

$date = date('Y-m-d');
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

    <style>
        /** banner section **/

.form_book {
    background: #fff;
    /* margin-top: -104px; */
    padding: 30px 8px 0px 60px;
    border-radius: 40px 40px 0px 0px;
}

.form_book .date {
    color: #7e7e7e;
    font-weight: bold;
    font-size: 15px;
    text-transform: uppercase;
    padding-left: 17px;
}

.book_n {
    border: inherit;
    border-radius: 20px;
    background-color: #eeeeee;
    width: 100%;
    font-size: 16px;
    height: auto;
    line-height: normal;
    padding: 10px 20px;
    -webkit-appearance: none !important;
    outline: none;
}


.book_btn {
    width: 100%;
    text-align: center;
    display: inline-block;
    border-radius: 10px;
    margin-top: 33px;
}

    </style>

</head>

<body>
    <div class="pop-up-msg">
        <?php include "message.php"; ?>
    </div>
    <?php include "navbar.php"; ?>

    <!-- Start slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <?php
    		$sql = "SELECT * FROM home_slider";
    		$res = mysqli_query($conn,  $sql);
            if (mysqli_num_rows($res) > 0) {
                while ($images = mysqli_fetch_assoc($res)) {  ?>
            <li class="text-center">
                <img src="assets/images/home_slider/<?=$images['image_url']?>" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong><?=$images['title']?></strong></h1>
                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <?php } }?>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End slides -->

    <!-- Start About -->
    <!-- <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="assets/images/about-img.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>Welcome To <span>Yamifood Restaurant</span></h1>
                        <h4>Little Story</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit
                            feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend
                            luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                        <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a
                            pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem
                            pulvinar.</p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End About -->

    <!-- Start QT -->
    <!-- <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-left">
                    <p class="lead ">
                        " If you're not the one cooking, stay out of the way and compliment the chef. "
                    </p>
                    <span class="lead">Michael Strahan</span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End QT -->

    <!-- search stay rooms -->
    <div class="container" style="margin: 60px auto;">
        <div class="row">
            <div class="col-md-12">
                <form class="form_book" action="reservation.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <label class="date">CHECK IN DATE</label>
                        <input class="book_n" type="date" min="<?php echo $date; ?>" name="in">
                    </div>
                    <div class="col-md-4">
                        <label class="date">CHECK OUT DATE</label>
                        <input class="book_n" type="date" min="<?php echo $date; ?>" name="out">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-common book_btn" id="submit" type="submit"
                            name="chk_avail">Search</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Puttur | Home Stay</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".Breakfast">Break fast</button>
                            <button data-filter=".Lunch">Lunch</button>
                            <button data-filter=".Snacks">Snacks</button>
                            <button data-filter=".Dinner">Dinner</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <?php  
                $view_food_query="SELECT * FROM food";
                $run_view_food_query = mysqli_query($conn, $view_food_query);
                if (mysqli_num_rows($run_view_food_query) > 0) {
                while ($data = mysqli_fetch_assoc($run_view_food_query)) { 
                ?>
                <div class="col-lg-4 col-md-6 special-grid <?=$data['category']?>">
                    <div class="gallery-single fix">
                        <img src="assets/images/food/<?=$data['image']?>" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4><?=$data['name']?></h4>
                            <p><?=$data['ingredients']?></p>
                            <h5> $ <?=$data['price']?></h5>
                        </div>
                    </div>
                </div>
                <?php } } ?>
            </div>
        </div>
    </div>
    <!-- End Menu -->

    <!-- Start Gallery -->
    <div class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Gallery</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="tz-gallery">
                <div class="row">
                    <?php  
                    $view_gallery_query="SELECT * FROM gallery";
                    $run_view_gallery_query = mysqli_query($conn, $view_gallery_query);
                    if (mysqli_num_rows($run_view_gallery_query) > 0) {
                    while ($data = mysqli_fetch_assoc($run_view_gallery_query)) { 
                    ?>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="assets/images/gallery/<?=$data['image']?>">
                            <img class="img-fluid" src="assets/images/gallery/<?=$data['image']?>" alt="Gallery Images">
                        </a>
                    </div>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

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

    <!-- Start Contact info -->
    <!-- <div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, US
						</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
    <!-- End Contact info -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>


    <?php include "footer.php"; ?>
    <!-- ALL JS FILES -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/jquery.superslides.min.js"></script>
    <script src="assets/js/images-loded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>