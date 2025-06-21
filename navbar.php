
<!-- Start header -->
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="food.php">Menu</a>
								<a class="dropdown-item" href="rooms.php">Rooms</a>
								<a class="dropdown-item" href="reservation.php">Reservation</a>
								<a class="dropdown-item" href="activities.php">Activities</a>
								<a class="dropdown-item" href="gallery.php">Gallery</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item dropdown">
						<?php if(isset($_SESSION["auth"])){ ?>
								<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">
								<?php echo $_SESSION["auth_user"]["user_name"]; ?> 
								</a>
								<?php } 
								else{ ?>
								<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">
								<?php echo "Not logged in !"; ?> 
								</a>
								<?php } ?>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								
								<a href="view_profile.php" class="dropdown-item"><button type="button"
								style="border:0;background:none">View profile</button></a>
								<a href="view_bookings.php" class="dropdown-item"><button type="button"
								style="border:0;background:none">My bookings</button></a>
								
								<form  action="code.php" method="POST">
								<a class="dropdown-item"><button type="submit" name="logout_user"
								style="border:0;background:none">Log out</button></a>
								</form>
								
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->