<?php 
include "includes/top_section.php";
$date = date('Y-m-d');
?>

<style>
#fh5co-hotel-section .hotel-content .hotel-grid {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    width: 100%;
    height: 300px;
    position: relative;
    display: block;
    overflow: hidden;
}

#fh5co-hotel-section .hotel-content .hotel-grid .price small {
    color: rgba(255, 255, 255, 0.5);
}

#fh5co-hotel-section .hotel-content .hotel-grid>div {
    width: 110px;
    position: absolute;
    top: 0;
    left: -110px;
    padding: 10px;
    background: #ff5722;
    color: #fff;
    -webkit-transition: 0.1s;
    -o-transition: 0.1s;
    transition: 0.1s;
}

#fh5co-hotel-section .hotel-content .hotel-grid>div small {
    display: block;
    text-transform: uppercase;
    font-size: 11px;
}

#fh5co-hotel-section .hotel-content .hotel-grid>div span {
    display: block;
    font-size: 18px;
}

#fh5co-hotel-section .hotel-content .hotel-grid .book-now {
    position: absolute;
    bottom: -47px;
    right: 0;
    color: #fff;
    width: 120px;
    padding: 7px 0;
    background: #3c4146;
    -webkit-transition: 0.1s;
    -o-transition: 0.1s;
    transition: 0.1s;
    background-color: #d0a772;
    transition: all 0.3s ease;
}

#fh5co-hotel-section .hotel-content .hotel-grid .book-now:hover,
#fh5co-hotel-section .hotel-content .hotel-grid .book-now:focus {
    color: #fff !important;
    background-color: #000;
}

#fh5co-hotel-section .hotel-content .desc {
    border: 1px solid #e6e6e6;
    border-top: 0;
    padding: 20px;
    margin-bottom: 40px;
    -webkit-transition: 0.1s;
    -o-transition: 0.1s;
    transition: 0.1s;
}

@media screen and (max-width: 992px) {
    #fh5co-hotel-section .hotel-content .desc {
        margin-bottom: 40px;
    }
}

#fh5co-hotel-section .hotel-content .desc h3 {
    font-size: 20px;
    margin: 0 0 20px 0;
}

#fh5co-hotel-section .hotel-content .desc h3 a {
    color: rgba(0, 0, 0, 0.7);
}

#fh5co-hotel-section .hotel-content:hover .hotel-grid>div,
#fh5co-hotel-section .hotel-content:focus .hotel-grid>div {
    left: 0;
}

#fh5co-hotel-section .hotel-content:hover .hotel-grid .book-now,
#fh5co-hotel-section .hotel-content:focus .hotel-grid .book-now {
    bottom: 0;
}

#fh5co-hotel-section .hotel-content:hover .desc,
#fh5co-hotel-section .hotel-content:focus .desc {
    -webkit-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.06);
    -moz-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.06);
    -ms-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.06);
    -o-box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.06);
    box-shadow: 0px 2px 1px 0px rgba(0, 0, 0, 0.06);
}

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



/** banner section **/
</style>


<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Search Rooms</h1>
            </div>
        </div>
    </div>
</div>
<!-- End All Pages -->
<div class="container" style="margin: 60px auto;">
    <div class="row">
        <div class="col-md-12">
            <form class="form_book" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
<?php
if(isset($_POST["chk_avail"])){
    $in_s=$_POST["in"];
    $out_s=$_POST["out"];
    
    if($in_s =="" || $out_s==""){
        $msg="Please enter the dates !";
        $_SESSION["message"]=$msg;
        echo "<script>window.location='reservation.php';</script>";
        exit(0);
    }
    if($in_s > $out_s){
        $msg="Please the dates correctly!";
        $_SESSION["message"]=$msg;
        echo "<script>window.location='reservation.php';</script>";
        exit(0);
    }

    $check_avail_query="SELECT * FROM stay WHERE room_type NOT IN (
    SELECT room_type FROM booking WHERE 
        (check_in < '$out_s' and check_out >= '$out_s' ) 
    OR  (check_in<='$in_s' and check_out>'$in_s') 
    OR  (check_in>='$in_s' and check_out<='$out_s'))";
    $run_check_avail_query = mysqli_query($conn,$check_avail_query);
?>
<div id="fh5co-hotel-section" class="outer-box-rooms">
    <div class="container">
        <div class="row">
            <?php
            if($run_check_avail_query){
            while($data = $run_check_avail_query->fetch_assoc()) {
            ?>
            <div class="col-md-4">
                <div class="hotel-content">
                    <div class="hotel-grid" style="background-image: url(assets/images/rooms/<?=$data['image']?> );">
                        <div class="price"><h3 id="price_id<?=$data['id']?>"><?=$data['price']?></h3>/night</div>
                        <a data-toggle="modal" onclick="send(<?=$data['id']?>)" data-target="#exampleModalCenter" class="book-now text-center"
                            href="#"><i class="ti-calendar"></i> Book Now</a>
                    </div>
                    <div class="desc">
                        <h3 id="r_type_id<?=$data['id']?>" style="margin:0;"><?=$data['room_type']?></h3>
                        <p style="color:green; font-weight:700;margin:0;">Available</p>
                        <p><?=$data['description']?></p>
                    </div>
                </div>
            </div>
            <?php } }  } ?>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="code.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your Name</label>
                        <input name="u_name"  type="text" class="form-control" id="exampleInputEmail1" 
                           value="<?php echo $_SESSION["auth_user"]["user_name"];  ?>"  readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your Room</label>
                        <input name="room"  readonly="readonly" type="text"  class="form-control" id="room_t" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Check In</label>
                        <input name="in" type="date" class="form-control" id="in_id" aria-describedby="emailHelp"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Check Out</label>
                        <input type="hidden"  class="form-control" id="set_p" aria-describedby="emailHelp"
                            placeholder="">
                        <input type="hidden" name="phone" value="<?php echo $_SESSION["auth_user"]["user_phone"];  ?>">
                        <input type="hidden" name="adhar" value="<?php echo $_SESSION["auth_user"]["user_adhar"];  ?>">

                        <input name="out" onchange="no_nights()" type="date" class="form-control" id="out_id" aria-describedby="emailHelp"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No of nights</label>
                        <input name="no_of_nights" type="text" readonly="readonly" class="form-control" id="no_of_n" aria-describedby="emailHelp"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Final Price</label>
                        <input name="f_price" type="text"  readonly="readonly" class="form-control" id="f_price" aria-describedby="emailHelp"
                            placeholder="">
                    </div>
                    <button class="btn btn-common book_btn" type="submit" name="book_stay">Book</button>
                    <button class="btn btn-common book_btn" type="button" data-dismiss="modal">Close</button>
                  </form>
            </div>
        </div>
    </div>
</div>

<!-- Start QT -->
<div class="qt-box qt-background">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-left">
                <p class="lead ">
                    Note: Check In Time : 12:00 AM <br> Check Out Time : 11:30 AM
                </p>
                <span class="lead">There will be no cancelization or refund once you reserve your stay</span>
            </div>
        </div>
    </div>
</div>
<!-- End QT -->



<script>
  function send(id){
    var type = document.getElementById("r_type_id"+id).innerHTML;
    document.getElementById("room_t").value=type;

    var temp_p = document.getElementById("price_id"+id).innerHTML;
    document.getElementById("set_p").value = temp_p;
  }
  
  function no_nights(){
    var date1 = new Date($('#in_id').val());
    var date2 = new Date($('#out_id').val());
    var day1 = date1.getDate();
    var day2 = date2.getDate();

    var no_of_stay = day2 - day1;
    document.getElementById("no_of_n").value=no_of_stay;

    var f_price=document.getElementById("set_p").value;
    var total = no_of_stay * f_price ;

    document.getElementById("f_price").value=total;
  }
</script>
















<?php 
include "includes/bottom_section.php";
?>
