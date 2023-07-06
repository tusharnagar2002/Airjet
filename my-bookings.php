<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
require 'helpers/init_conn_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>My Bookings</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.png">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Content START -->
<?php
if(isset($_SESSION['userId'])) {
	require 'helpers/init_conn_db.php';  
	// Get user ID from session
	$user_id = $_SESSION['userId'];
?>
<section class="pt-3">
	<div class="container">
		<div class="row g-2 g-lg-4">
			<!-- Sidebar START -->
			<div class="col-lg-4 col-xl-3">
				<!-- Responsive offcanvas body START -->
				<div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasSidebar" >
					<!-- Offcanvas header -->
					<div class="offcanvas-header justify-content-end pb-2">
						<button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
					</div>

					<!-- Offcanvas body -->
					<div class="offcanvas-body p-3 p-lg-0">
						<div class="card bg-light w-100">

							<!-- Edit profile button -->
							<div class="position-absolute top-0 end-0 p-3">
								<a href="#" class="text-primary-hover" data-bs-toggle="tooltip" data-bs-title="Edit profile">
									<i class="bi bi-pencil-square"></i>
								</a>
							</div>

							<!-- Card body START -->
							<div class="card-body p-3">
								<!-- Avatar and content -->
								<div class="text-center mb-3">
									<!-- Avatar -->
									<div class="avatar avatar-xl mb-2">
										<img class="avatar-img rounded-circle border border-2 border-white" src="assets/images/avatar/01.jpg" alt="">
									</div>
									<h6 class="mb-0"><?php echo $_SESSION['userUid']?></h6>
									<a href="#" class="text-reset text-primary-hover small"><?php echo $_SESSION['userMail']?></a>
									<hr>
								</div>

								<!-- Sidebar menu item START -->
								<ul class="nav nav-pills-primary-soft flex-column">
									<li class="nav-item">
										<a class="nav-link" href="account-profile.html"><i class="bi bi-person fa-fw me-2"></i>My Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="account-bookings.html"><i class="bi bi-ticket-perforated fa-fw me-2"></i>My Bookings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-travelers.html"><i class="bi bi-people fa-fw me-2"></i>Travelers</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-payment-details.html"><i class="bi bi-wallet fa-fw me-2"></i>Payment Details</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-wishlist.html"><i class="bi bi-heart fa-fw me-2"></i>Wishlist</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-settings.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="account-delete.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
									</li>
								</ul>
								<!-- Sidebar menu item END -->
							</div>
							<!-- Card body END -->
						</div>
					</div>
				</div>	
				<!-- Responsive offcanvas body END -->	
			</div>
			<!-- Sidebar END -->

			<!-- Main content START -->
			<div class="col-lg-8 col-xl-9 ps-xl-5">

				<!-- Offcanvas menu button -->
				<div class="d-grid mb-0 d-lg-none w-100">
					<button class="btn btn-primary mb-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i> Menu
					</button>
				</div>

				<div class="card border bg-transparent">
					<!-- Card header -->
					<div class="card-header bg-transparent border-bottom">
						<h4 class="card-header-title">My Bookings</h4>
					</div>

					<!-- Card body START -->
					<div class="card-body p-0">

						<!-- Tabs -->
						<ul class="nav nav-tabs nav-bottom-line nav-responsive nav-justified">
							<li class="nav-item"> 
								<a class="nav-link mb-0 active" data-bs-toggle="tab" href="#tab-1"><i class="bi bi-briefcase-fill fa-fw me-1"></i>Upcoming Booking</a> 
							</li>
							<li class="nav-item">
								<a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-2"><i class="bi bi-x-octagon fa-fw me-1"></i>Canceled Booking</a> 
								</li>
							<li class="nav-item"> 
								<a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-3"><i class="bi bi-patch-check fa-fw me-1"></i>Completed Booking</a> 
							</li>
						</ul>

						<!-- Tabs content START -->
						<div class="tab-content p-2 p-sm-4" id="nav-tabContent">

							<!-- Tab content item START -->
							<div class="tab-pane fade show active" id="tab-1">
                <!-- Card item START -->
								<?php
								$sql = "SELECT t.ticket_id, t.flight_id, t.user_id, t.seat_no, t.cost, t.class, f.departure, f.arrival, f.departure_date, f.arrival_date, f.departure_time, f.arrival_time, p.f_name, p.m_name, p.l_name, p.dob, py.card_no, py.expire_date
								FROM ticket t
								JOIN flight f ON t.flight_id = f.flight_id
								JOIN passenger_profile p ON t.user_id = p.user_id AND t.flight_id = p.flight_id
								JOIN payment py ON t.user_id = py.user_id AND t.flight_id = py.flight_id
								WHERE t.user_id = ?";
						
								// Create prepared statement object
								$stmt = mysqli_prepare($conn, $sql);
								
								// Bind user ID parameter
								mysqli_stmt_bind_param($stmt, "i", $user_id);
								
								// Execute prepared statement
								mysqli_stmt_execute($stmt);
								
								// Get result set
								$result = mysqli_stmt_get_result($stmt);
								
								// Check if any results were returned
								if (mysqli_num_rows($result) > 0) {
								// Loop through the result set and display all the tickets
								while ($row = mysqli_fetch_assoc($result)) {
									?>
								<div class="card border mb-4">
									<!-- Card header -->
									<div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
										<!-- Icon and Title -->
										<div class="d-flex align-items-center">
											<div class="icon-lg bg-light rounded-circle flex-shrink-0"><i class="fa-solid fa-plane"></i></div>	
											<!-- Title -->
											<div class="ms-2">
												<h6 class="card-title mb-0"><?= $row['departure'] ?> to <?= $row['arrival'] ?></h6>
												<ul class="nav nav-divider small">
													<li class="nav-item">Booking ID: <?= $row['ticket_id'] ?></li>
													<li class="nav-item"><?= $row['class'] ?></li>
												</ul>
											</div>
										</div>
	
										<!-- Button -->
										<div class="mt-2 mt-md-0">
											<a href="#" class="btn btn-primary-soft mb-0">Manage Booking</a>
										</div>
									</div>
	
									<!-- Card body -->
									<div class="card-body">
										<div class="row g-3">
											<div class="col-sm-6 col-md-4">
												<span>Departure Date & Time</span>
												<h6 class="mb-0"><?= date('F j, Y', strtotime($row['departure_date'])) ?> | <?= date('h:i A', strtotime($row['departure_time'])) ?></h6>
											</div>
	
											<div class="col-sm-6 col-md-4">
												<span>Arrival Date & Time</span>
												<h6 class="mb-0"><?= date('F j, Y', strtotime($row['arrival_date'])) ?> | <?= date('h:i A', strtotime($row['arrival_time'])) ?></h6>
											</div>
	
											<div class="col-md-4">
												<span>Passenger Name</span>
												<h6 class="mb-0"><?= $row['f_name'] ?> <?= $row['m_name'] ?> <?= $row['l_name'] ?></h6>
											</div>
										</div>
									</div>
								</div>
								<?php }}}?>
								<!-- Card item END -->
							</div>
							<!-- Tabs content item END -->

							<!-- Tab content item START -->
							<div class="tab-pane fade" id="tab-2">
								<h6>Cancelled booking (1)</h6>
	
								<!-- Card item START -->
								<div class="card border">
									<!-- Card header -->
									<div class="card-header border-bottom d-md-flex justify-content-md-between align-items-center">
										<!-- Icon and Title -->
										<div class="d-flex align-items-center">
											<div class="icon-lg bg-light rounded-circle flex-shrink-0"><i class="fa-solid fa-hotel"></i></div>
												<!-- Title -->
											<div class="ms-2">
												<h6 class="card-title mb-0">Courtyard by Marriott New York</h6>
												<ul class="nav nav-divider small">
													<li class="nav-item">Booking ID: CGDSUAHA12548</li>
													<li class="nav-item">AC</li>
												</ul>
											</div>
										</div>
	
										<!-- Button -->
										<div class="mt-2 mt-md-0">
											<a href="#" class="btn btn-primary-soft mb-0">Manage Booking</a>
											<p class="text-danger text-md-end mb-0">Booking cancelled</p>
										</div>
									</div>
	
									<!-- Card body -->
									<div class="card-body">
										<div class="row g-3">
											<div class="col-sm-6 col-md-4">
												<span>Check in time</span>
												<h6 class="mb-0">Tue 05 Aug 12:00 AM</h6>
											</div>
	
											<div class="col-sm-6 col-md-4">
												<span>Check out time</span>
												<h6 class="mb-0">Tue 12 Aug 4:00 PM</h6>
											</div>
	
											<div class="col-md-4">
												<span>Booked by</span>
												<h6 class="mb-0">Frances Guerrero</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- Card item END -->
							</div>
							<!-- Tabs content item END -->
	
							<!-- Tab content item START -->
							<div class="tab-pane fade" id="tab-3">
                <div class="bg-mode shadow p-4 rounded overflow-hidden">
									<div class="row g-4 align-items-center">
										<!-- Content -->
										<div class="col-md-9">
											<h6>Looks like you have never booked with BOOKING</h6>
											<h4 class="mb-2">When you book your trip will be shown here.</h4>
											<a href="hotel-list.html" class="btn btn-primary-soft mb-0">Start booking now</a>
										</div>
										<!-- Image -->
										<div class="col-md-3 text-end">
											<img src="assets/images/element/17.svg" class="mb-n5" alt="">
										</div>
									</div>
								</div>
								
							</div>
							<!-- Tabs content item END -->
						</div>

					</div>
					<!-- Card body END -->
				</div>

			</div>
			<!-- Main content END -->
		</div>
	</div>
</section> ';
}?>
<!-- =======================
Content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark p-3">
	<div class="container">
		<div class="row align-items-center">

			<!-- Widget -->
			<div class="col-md-4">
				<div class="text-center text-md-start mb-3 mb-md-0">
					<a href="index.html"> <img class="h-30px" src="assets/images/logo-light.svg" alt="logo"> </a>
				</div> 
			</div>
			
			<!-- Widget -->
			<div class="col-md-4">
				<div class="text-muted text-primary-hover"> Copyrights ©2023 Booking. Build by <a href="https://www.webestica.com/" class="text-muted">Webestica</a>. </div>
			</div>

			<!-- Widget -->
			<div class="col-md-4">
				<ul class="list-inline mb-0 text-center text-md-end">
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-facebook"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-instagram"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-linkedin-in"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from booking.webestica.com/account-bookings.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Feb 2023 06:46:43 GMT -->
</html>