<?php 
include "includes/top_section.php";
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
#fh5co-hotel-section .hotel-content .hotel-grid > div {
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
#fh5co-hotel-section .hotel-content .hotel-grid > div small {
  display: block;
  text-transform: uppercase;
  font-size: 11px;
}
#fh5co-hotel-section .hotel-content .hotel-grid > div span {
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
  background-color:#d0a772;
  transition:all 0.3s ease;
}
#fh5co-hotel-section .hotel-content .hotel-grid .book-now:hover, #fh5co-hotel-section .hotel-content .hotel-grid .book-now:focus {
  color: #fff !important;
  background-color:#000;
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
#fh5co-hotel-section .hotel-content:hover .hotel-grid > div, #fh5co-hotel-section .hotel-content:focus .hotel-grid > div {
  left: 0;
}
#fh5co-hotel-section .hotel-content:hover .hotel-grid .book-now, #fh5co-hotel-section .hotel-content:focus .hotel-grid .book-now {
  bottom: 0;
}
#fh5co-hotel-section .hotel-content:hover .desc, #fh5co-hotel-section .hotel-content:focus .desc {
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
                <h1>Rooms</h1>
            </div>
        </div>
    </div>
</div>
<!-- End All Pages -->
<div class="container">
            <div class="row">
               <div class="col-md-12">
                  <form class="form_book">
                     <div class="row">
                        <div class="col-md-4">
                           <label class="date">CHECK IN DATE</label>
                           <input class="book_n"  type="date" >
                        </div>
                        <div class="col-md-4">
                           <label class="date">CHECK OUT DATE</label>
                           <input class="book_n"  type="date" >
                        </div>
                        <div class="col-md-4">
                        <button class="btn btn-common book_btn" id="submit" type="submit">Search</button> 
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
<div id="fh5co-hotel-section" class="outer-box-rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
					<div class="hotel-content">
						<div class="hotel-grid" style="background-image: url(assets/images/raft.jpg);">
							<div class="price"><small>For as low as</small><span>$100/night</span></div>
							<a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
						</div>
						<div class="desc">
							<h3><a href="#">Hotel Name</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
            <div class="col-md-4">
					<div class="hotel-content">
						<div class="hotel-grid" style="background-image: url(assets/images/bunji.jpg);">
							<div class="price"><small>For as low as</small><span>$100/night</span></div>
							<a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
						</div>
						<div class="desc">
							<h3><a href="#">Hotel Name</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
            <div class="col-md-4">
					<div class="hotel-content">
						<div class="hotel-grid" style="background-image: url(assets/images/boat.jpg);">
							<div class="price"><small>For as low as</small><span>$100/night</span></div>
							<a class="book-now text-center" href="#"><i class="ti-calendar"></i> Book Now</a>
						</div>
						<div class="desc">
							<h3><a href="#">Hotel Name</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
        </div>
    </div>
</div>






















<?php 
include "includes/bottom_section.php";
?>