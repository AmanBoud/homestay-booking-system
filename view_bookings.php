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
        margin-top: 60px;
        margin-bottom: 60px;
    }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
                    <h1>My Bookings</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->

    <div class="container" style="margin : 60px auto;">
    <table id="myTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Room</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Phone</th>
                <th>Adhar</th>
                <th>Price</th>
            </tr>
        </thead>
 
        <tbody id="mytable">
            <?php
            $i=1;
            $user_curr_name = $_SESSION["auth_user"]["user_name"];
            $view_booking_query="SELECT * FROM booking WHERE u_name= '$user_curr_name' ";
            $run_view_booking_query = mysqli_query($conn,$view_booking_query);
            if($run_view_booking_query){
            while($row = $run_view_booking_query->fetch_assoc()) {
            ?>
            <tr>
                <td> <?= $i ?> </td>
                <td> <?=$row["u_name"]?> </td>
                <td> <?=$row["room_type"]?> </td>
                <td> <?=$row["check_in"]?> </td>
                <td> <?=$row["check_out"]?> </td>
                <td> <?=$row["phone"]?> </td>
                <td> <?=$row["adhar"]?> </td>
                <td> <?=$row["final_price"]?> </td>
            </tr>
            <?php 
            $i++;
            } }
            else{
                echo "no run q";
            }
            ?>
        </tbody>
    </table>
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
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
</body>

</html>