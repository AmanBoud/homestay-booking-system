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

    <style>
    .profile-box {
        margin-top:60px;
        margin-bottom:60px;
    }
    </style>
</head>

<body>
    <!-- Start header -->
    <?php include "navbar.php" ?>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>My Profile</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->


   <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 profile-box inner-column">
                <?php
                $user_curr_id = $_SESSION["auth_user"]["user_id"];
                $view_profile_query="SELECT * FROM user WHERE id=  '$user_curr_id'"; 
                $run_view_profile_query = mysqli_query($conn,$view_profile_query);
            
                while($row = $run_view_profile_query->fetch_assoc()) { ?>
          
          <form  method="POST" action="update_profile.php">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
                                    <p>Name</p>
									<input disabled value="<?php echo $row['name']; ?>" type="text" class="form-control" id="name" name="name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
                            <div class="col-md-12">
								<div class="form-group">
                                    <p>Email</p>
									<input disabled value="<?php echo $row['email']; ?>" type="text" class="form-control" id="name" name="email" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
                            <div class="col-md-12">
								<div class="form-group">
                                    <p>Phone</p>
									<input disabled value="<?php echo $row['phone']; ?>" type="text" class="form-control" id="name" name="phone" required data-error="Please enter your phone">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
                            <div class="col-md-12">
								<div class="form-group">
                                    <p>Adhar</p>    
									<input disabled value="<?php echo $row['adhar']; ?>" type="text" class="form-control" id="name" name="adhar" required data-error="Please enter your adhar">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
                            <div class="col-md-12">
								<div class="form-group">
                                    <p>Password</p>
									<input disabled value="<?php echo $row['password']; ?>" type="text" class="form-control" id="name" name="password" required data-error="Please enter your password">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							
							<div class="col-md-12">
								<div class="submit-button text-center">
                                    <button class="btn btn-common" type="button" onclick="history.back()" style="margin-right:10px">Go Back</button>
									<button class="btn btn-common" id="submit" name="edit_profile" type="submit">Edit profile</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>

                <?php } ?>    

            </div>
            <div class="col-3"></div>
        </div>
    </div>










    <!-- Start Footer -->
    <?php include "footer.php" ?>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->

    <script src="assets/js/jquery.superslides.min.js"></script>
    <script src="assets/js/images-loded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/baguetteBox.min.js"></script>
    <script src="assets/js/jquery.mapify.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>