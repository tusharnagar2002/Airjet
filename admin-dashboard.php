<?php
session_start();
?>
<?php include_once 'helpers/helper.php'; ?>
require 'helpers/init_conn_db.php';                      
?>
<?php
if (!isset($_SESSION['user_id'])) {
    header('Location:admin\admin-sign-in.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Panel</title>

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
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/apexcharts/css/apexcharts.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
	<!-- Sidebar START -->
	<nav class="navbar sidebar navbar-expand-xl navbar-light">
		<!-- Navbar brand for xl START -->
		<div class="d-flex align-items-center">
			<a class="navbar-brand" href="index.html">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
			</a>
		</div>
		<!-- Navbar brand for xl END -->
		
		<div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
			<div class="offcanvas-body sidebar-content d-flex flex-column pt-4">
	
				<!-- Sidebar menu START -->
				<ul class="navbar-nav flex-column" id="navbar-sidebar">
					<!-- Menu item -->
					<li class="nav-item"><a href="admin-dashboard.html" class="nav-link active">Dashboard</a></li>

					<!-- Title -->
					<li class="nav-item ms-2 my-2">Pages</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapsebooking" role="button" aria-expanded="false" aria-controls="collapsebooking">
						Bookings
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapsebooking" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="admin-booking-list.html">Booking List</a></li>
							<li class="nav-item"> <a class="nav-link" href="admin-booking-detail.html">Booking Detail</a></li>
						</ul>
					</li>
	
					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapseguest" role="button" aria-expanded="false" aria-controls="collapseguest">
						Guests
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapseguest" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="admin-guest-list.html">Guest List</a></li>
							<li class="nav-item"> <a class="nav-link" href="admin-guest-detail.html">Guest Detail</a></li>
						</ul>
					</li>

					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapseagent" role="button" aria-expanded="false" aria-controls="collapseagent">
						Agents
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapseagent" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="admin-agent-list.html">Agent List</a></li>
							<li class="nav-item"> <a class="nav-link" href="admin-agent-detail.html">Agent Detail</a></li>
						</ul>
					</li>
					
					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link" href="admin-reviews.html">Reviews</a></li>
	
					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link" href="admin-earnings.html">Earnings</a></li>
	
					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link" href="admin-settings.html">Admin Settings</a></li>
	
					<!-- Menu item -->
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="collapse" href="#collapseauthentication" role="button" aria-expanded="false" aria-controls="collapseauthentication">
							Authentication
						</a>
						<!-- Submenu -->
						<ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
							<li class="nav-item"> <a class="nav-link" href="sign-up.html">Sign Up</a></li>
							<li class="nav-item"> <a class="nav-link" href="sign-in.html">Sign In</a></li>
							<li class="nav-item"> <a class="nav-link" href="forgot-password.html">Forgot Password</a></li>
							<li class="nav-item"> <a class="nav-link" href="error.html">Error 404</a></li>
						</ul>
					</li>
	
					<!-- Title -->
					<li class="nav-item ms-2 my-2">Documentation</li>
	
					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link" href="docs/index.html">Documentation</a></li>
	
					<!-- Menu item -->
					<li class="nav-item"> <a class="nav-link" href="docs/changelog.html">Changelog</a></li>
				</ul>
				<!-- Sidebar menu end -->
	
				<!-- Sidebar footer START -->
				<div class="d-flex align-items-center justify-content-between text-primary-hover mt-auto p-3">
					<a class="h6 fw-light mb-0 text-body" href="sign-in.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Sign out">
						<i class="fa-solid fa-arrow-right-from-bracket"></i> Log out
					</a>
					<a class="h6 mb-0 text-body" href="admin-settings.html" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Settings">
						<i class="bi bi-gear-fill"></i>
					</a>
				</div>
				<!-- Sidebar footer END -->
				
			</div>
		</div>
	</nav>
	<!-- Sidebar END -->
	
	<!-- Page content START -->
	<div class="page-content">
	
		<!-- Top bar START -->
		<nav class="navbar top-bar navbar-light py-0 py-xl-3">
			<div class="container-fluid p-0">
				<div class="d-flex align-items-center w-100">
	
					<!-- Logo START -->
					<div class="d-flex align-items-center d-xl-none">
						<a class="navbar-brand" href="index.html">
							<img class="navbar-brand-item h-40px" src="assets/images/logo-icon.svg" alt="">
						</a>
					</div>
					<!-- Logo END -->
	
					<!-- Toggler for sidebar START -->
					<div class="navbar-expand-xl sidebar-offcanvas-menu">
						<button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
							<i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
						</button>
					</div>
					<!-- Toggler for sidebar END -->
					
					<!-- Top bar left -->
					<div class="navbar-expand-lg ms-auto ms-xl-0">
						<!-- Toggler for menubar START -->
						<button class="navbar-toggler ms-auto p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
							<i class="bi bi-search"></i>
						</button>
						<!-- Toggler for menubar END -->
	
						<!-- Topbar menu START -->
						<div class="collapse navbar-collapse w-100 z-index-1" id="navbarTopContent">
							<!-- Top search START -->
							<div class="nav my-3 my-xl-0 flex-nowrap align-items-center">
								<div class="nav-item w-100">
									<form class="position-relative">
										<input class="form-control bg-light pe-5" type="search" placeholder="Search" aria-label="Search">
										<button class="bg-transparent px-2 py-0 border-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
									</form>
								</div>
							</div>
							<!-- Top search END -->
						</div>
						<!-- Topbar menu END -->
					</div>
					<!-- Top bar left END -->
					
					<!-- Top bar right START -->
					<ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
						<!-- Dark mode options START -->
						<li class="nav-item dropdown ms-3">
							<button class="nav-notification lh-0 btn btn-light p-0 mb-0" id="bd-theme"
							type="button"
							aria-expanded="false"
							data-bs-toggle="dropdown"
							data-bs-display="static">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw theme-icon-active" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg>
							</button>

							<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
								<li class="mb-1">
									<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
										<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
											<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
											<use href="#"></use>
										</svg>Light						
									</button>
								</li>
								<li class="mb-1">
									<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
											<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
											<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
											<use href="#"></use>
										</svg>Dark
									</button>
								</li>
								<li>
									<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
											<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
											<use href="#"></use>
										</svg>Auto
									</button>
								</li>
							</ul>
						</li>
						<!-- Dark mode options END-->

						<!-- Notification dropdown START -->
						<li class="nav-item dropdown ms-3">
							<!-- Notification button -->
							<a class="nav-notification btn btn-light p-0 mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
								<i class="bi bi-bell fa-fw"></i>
							</a>
							<!-- Notification dote -->
							<span class="notif-badge animation-blink"></span>
		
							<!-- Notification dropdown menu START -->
							<div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md shadow-lg p-0">
								<div class="card bg-transparent">
									<!-- Card header -->
									<div class="card-header bg-transparent d-flex justify-content-between align-items-center border-bottom">
										<h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
										<a class="small" href="#">Clear all</a>
									</div>
		
									<!-- Card body START -->
									<div class="card-body p-0">
										<ul class="list-group list-group-flush list-unstyled p-2">
											<!-- Notification item -->
											<li>
												<a href="#" class="list-group-item list-group-item-action rounded notif-unread border-0 mb-1 p-3">
													<h6 class="mb-2">New! Booking flights from New York ✈️</h6>
													<p class="mb-0 small">Find the flexible ticket on flights around the world. Start searching today</p>
													<span>Wednesday</span>
												</a>
											</li>
											<!-- Notification item -->
											<li>
												<a href="#" class="list-group-item list-group-item-action rounded border-0 mb-1 p-3">
													<h6 class="mb-2">Sunshine saving are here 🌞 save 30% or more on a stay</h6>
													<span>15 Nov 2022</span>
												</a>
											</li>
										</ul>
									</div>
									<!-- Card body END -->
		
									<!-- Card footer -->
									<div class="card-footer bg-transparent text-center border-top">
										<a href="#" class="btn btn-sm btn-link mb-0 p-0">See all incoming activity</a>
									</div>
								</div>
							</div>
							<!-- Notification dropdown menu END -->
						</li>
						<!-- Notification dropdown END -->
		
						<!-- Profile dropdown START -->
						<li class="nav-item ms-3 dropdown">
							<!-- Avatar -->
							<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
								<img class="avatar-img rounded-2" src="assets/images/avatar/01.jpg" alt="avatar">
							</a>
		
							<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
								<!-- Profile info -->
								<li class="px-3 mb-3">
									<div class="d-flex align-items-center">
										<!-- Avatar -->
										<div class="avatar me-3">
											<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
										</div>
										<div>
											<a class="h6 mt-2 mt-sm-0" href="#">Lori Ferguson</a>
											<p class="small m-0">example@gmail.com</p>
										</div>
									</div>
								</li>
		
								<!-- Links -->
								<li> <hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-bookmark-check fa-fw me-2"></i>My Bookings</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-heart fa-fw me-2"></i>My Wishlist</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Settings</a></li>
								<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help Center</a></li>
								<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
							</ul>
						</li>
						<!-- Profile dropdown END -->
					</ul>
					<!-- Top bar right END -->
				</div>
			</div>
		</nav>
		<!-- Top bar END -->
	
		<!-- Page main content START -->
		<div class="page-content-wrapper p-xxl-4">
	
			<!-- Title -->
			<div class="row">
				<div class="col-12 mb-4 mb-sm-5">
					<div class="d-sm-flex justify-content-between align-items-center">
						<h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
						<div class="d-grid"><a href="#" class="btn btn-primary-soft mb-0"><i class="bi bi-plus-lg fa-fw"></i> New Booking</a></div>				
					</div>
				</div>
			</div>

			<!-- Counter boxes START -->
			<div class="row g-4 mb-5">
				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body bg-warning bg-opacity-10 border border-warning border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h4 class="mb-0">56</h4>
								<span class="h6 fw-light mb-0">Total Hotels</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class="fa-solid fa-hotel fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body bg-success bg-opacity-10 border border-success border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h4 class="mb-0">$836,789</h4>
								<span class="h6 fw-light mb-0">Total Incomes</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle bg-success text-white mb-0"><i class="fa-solid fa-hand-holding-dollar fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body bg-primary bg-opacity-10 border border-primary border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h4 class="mb-0">245</h4>
								<span class="h6 fw-light mb-0">Total Rooms</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle bg-primary text-white mb-0"><i class="fa-solid fa-bed fa-fw"></i></div>
						</div>
					</div>
				</div>

				<!-- Counter item -->
				<div class="col-md-6 col-xxl-3">
					<div class="card card-body bg-info bg-opacity-10 border border-info border-opacity-25 p-4 h-100">
						<div class="d-flex justify-content-between align-items-center">
							<!-- Digit -->
							<div>
								<h4 class="mb-0">147</h4>
								<span class="h6 fw-light mb-0">Booked Room</span>
							</div>
							<!-- Icon -->
							<div class="icon-lg rounded-circle bg-info text-white mb-0"><i class="fa-solid fa-building-circle-check fa-fw"></i></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Counter boxes END -->

			<!-- Hotel grid START -->
			<div class="row g-4 mb-5">
				<!-- Title -->
				<div class="col-12">
					<div class="d-flex justify-content-between">
						<h4 class="mb-0">Popular Hotels</h4>
						<a href="#" class="btn btn-primary-soft mb-0">View All</a>
					</div>	
				</div>

				<!-- Hotel item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="assets/images/category/hotel/4by3/10.jpg" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow" aria-labelledby="dropdownAction1">
											<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
											<li><a class="dropdown-item small" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Pride moon Village Resort & Spa</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
											<h5 class="fw-bold mb-0 me-1">$1586</h5>
											<span class="mb-0 me-2">/day</span>
										</div>
										<!-- Button -->
										<div class="hstack gap-2 mt-3 mt-sm-0">
											<a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-pencil-square fa-fw"></i></a>    
											<a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-slash-circle fa-fw"></i></a>    
										</div>                 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Hotel item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="assets/images/category/hotel/4by3/08.jpg" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow" aria-labelledby="dropdownAction2">
											<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
											<li><a class="dropdown-item small" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Courtyard by Marriott New York</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>258 W jimmy Street, New york - 24578</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
											<h5 class="fw-bold mb-0 me-1">$1025</h5>
											<span class="mb-0 me-2">/day</span>
										</div>
										<!-- Button -->
										<div class="hstack gap-2 mt-3 mt-sm-0">
											<a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-pencil-square fa-fw"></i></a>    
											<a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-slash-circle fa-fw"></i></a>    
										</div>                  
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Hotel item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="assets/images/category/hotel/4by3/09.jpg" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction3" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow" aria-labelledby="dropdownAction3">
											<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
											<li><a class="dropdown-item small" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Park Plaza Lodge Hotel</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>31J W Spark Street, California - 24578</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
											<h5 class="fw-bold mb-0 me-1">$958</h5>
											<span class="mb-0 me-2">/day</span>
										</div>
										<!-- Button -->
										<div class="hstack gap-2 mt-3 mt-sm-0">
											<a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-pencil-square fa-fw"></i></a>    
											<a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-slash-circle fa-fw"></i></a>    
										</div>                 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Hotel item -->
				<div class="col-lg-6">
					<div class="card shadow p-3">
						<div class="row g-4">
							<!-- Card img -->
							<div class="col-md-3">
								<img src="assets/images/category/hotel/4by3/07.jpg" class="rounded-2" alt="Card image">
							</div>

							<!-- Card body -->
							<div class="col-md-9">
								<div class="card-body position-relative d-flex flex-column p-0 h-100">

									<!-- Buttons -->
									<div class="list-inline-item dropdown position-absolute top-0 end-0">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-round btn-light" role="button" id="dropdownAction4" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-three-dots-vertical"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow" aria-labelledby="dropdownAction4">
											<li><a class="dropdown-item small" href="#"><i class="bi bi-info-circle me-2"></i>Report</a></li>
											<li><a class="dropdown-item small" href="#"><i class="bi bi-slash-circle me-2"></i>Disable</a></li>
										</ul>
									</div>

									<!-- Title -->
									<h5 class="card-title mb-0 me-5"><a href="hotel-detail.html">Royal Beach Resort</a></h5>
									<small><i class="bi bi-geo-alt me-2"></i>589 J Wall Street, London - 24578</small>

									<!-- Price and Button -->
									<div class="d-sm-flex justify-content-sm-between align-items-center mt-3 mt-md-auto">
										<!-- Price -->
										<div class="d-flex align-items-center">
											<h5 class="fw-bold mb-0 me-1">$1005</h5>
											<span class="mb-0 me-2">/day</span>
										</div>
										<!-- Button -->
										<div class="hstack gap-2 mt-3 mt-sm-0">
											<a href="#" class="btn btn-sm btn-primary-soft px-2 mb-0"><i class="bi bi-pencil-square fa-fw"></i></a>    
											<a href="#" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="bi bi-slash-circle fa-fw"></i></a>    
										</div>                  
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Hotel grid END -->
			
			<!-- Widget START -->
			<div class="row g-4">
				<!-- Booking Chart START -->
				<div class="col-xxl-8">
					<!-- Chart START -->
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="card-header-title">Guest Activity</h5>
						</div>

						<!-- Card body -->
						<div class="card-body">
							<!-- Content -->
							<div class="d-flex gap-4 mb-3">
								<h6><span class="fw-light"><i class="bi bi-square-fill text-primary"></i> Check-in:</span> 475 Guests</h6>
								<h6><span class="fw-light"><i class="bi bi-square-fill text-info"></i> Check-out:</span> 157 Guests</h6>
							</div>
							<!-- Apex chart -->
							<div id="ChartGuesttraffic" class="mt-2"></div>
						</div>
					</div>
					<!-- Chart END -->
				</div>
				<!-- Booking Chart END -->

				<!-- Booking graph START -->
				<div class="col-lg-6 col-xxl-4">
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom">
							<h5 class="card-header-title">Room Availability</h5>
						</div>

						<!-- Card body START -->
						<div class="card-body p-3">
							<!-- Chart -->
							<div class="col-sm-6 mx-auto">
								<div class="d-flex justify-content-center" id="ChartTrafficRooms"></div>
							</div>

							<!-- Content -->
							<ul class="list-group list-group-borderless mb-0">
								<li class="list-group-item d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="text-success fas fa-circle me-2"></i> Available</span>
									<span class="h6 fw-light mb-0">73 Rooms</span>
								</li>
								<li class="list-group-item d-flex justify-content-between">
									<span class="h6 fw-light mb-0"><i class="text-danger fas fa-circle me-2"></i> Sold Out</span>
									<span class="h6 fw-light mb-0">245 Rooms</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Booking graph END -->

				<!-- Rooms START -->
				<div class="col-lg-6 col-xxl-4">
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom d-flex justify-content-between align-items-center">
							<h5 class="card-header-title">Room Notifications</h5>
							<a href="#" class="btn btn-link p-0 mb-0">View all</a>
						</div>

						<!-- Card body START -->
						<div class="card-body">
							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/04.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Deluxe Pool View with Breakfast</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">18 Nov to 22 Nov</li>
											<li class="nav-item"><span class="text-success">Booked</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/05.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Deluxe Pool View</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">16 Nov</li>
											<li class="nav-item"><span class="text-danger">Booking cancel</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/06.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Luxury Room with Balcony</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">15 Nov to 20 Nov</li>
											<li class="nav-item"><span class="text-success">Booked</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/08.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Premium Room With Balcony</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">14 Nov to 16 Nov</li>
											<li class="nav-item"><span class="text-success">Booked</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/02.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Rock Family Suite</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">13 Nov</li>
											<li class="nav-item"><span class="text-danger">Booking cancel</span></li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->
						</div>
						<!-- Card body END -->
					</div>
				</div>
				<!-- Rooms END -->

				<!-- Upcoming Arrival START -->
				<div class="col-lg-6 col-xxl-4">
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
							<h5 class="card-header-title">Upcoming Arrivals</h5>
							<a href="#" class="btn btn-link p-0 mb-0">View all</a>
						</div>

						<!-- Card body START -->
						<div class="card-body p-3">

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Lori Stevens</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 25A</li>
											<li class="nav-item">24Nov - 28Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Dennis Barrett</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 12B</li>
											<li class="nav-item">21Nov - 23Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Jacqueline Miller</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 11A</li>
											<li class="nav-item">19Nov - 21Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Billy Vasquez</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 05A</li>
											<li class="nav-item">14Nov - 18Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Amanda Reed</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 9</li>
											<li class="nav-item">11Nov - 12Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>

							<hr><!-- Divider -->

							<!-- Arrival item -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Avatar and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="avatar avatar-md flex-shrink-0">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
									</div>
									<!-- Info -->
									<div class="ms-sm-2 mt-2 mt-sm-0">
										<h6 class="mb-1">Dennis Barrett</h6>
										<ul class="nav nav-divider small">
											<li class="nav-item">Room 10</li>
											<li class="nav-item">11Nov - 12Nov</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light mb-0 ms-3 px-2"><i class="fa-solid fa-chevron-right fa-fw"></i></a>
							</div>
						</div>
						<!-- Card body END -->
					</div>
				</div>
				<!-- Upcoming Arrival END -->

				<!-- Reviews START -->
				<div class="col-lg-6 col-xxl-4">
					<div class="card shadow h-100">
						<!-- Card header -->
						<div class="card-header border-bottom d-flex justify-content-between align-items-center p-3">
							<h5 class="card-header-title">Reviews</h5>
							<a href="#" class="btn btn-link p-0 mb-0">View all</a>
						</div>

						<!-- Card body START -->
						<div class="card-body p-3">

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/08.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Deluxe Pool View with Breakfast</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
											<li class="list-inline-item me-0">(35 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/09.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Deluxe Pool View</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
											<li class="list-inline-item me-0">(25 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/01.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Luxury Room with Balcony</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
											<li class="list-inline-item me-0">(18 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/05.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Premium Room With Balcony</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star-half-stroke text-warning"></i></li>
											<li class="list-inline-item me-0">(08 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->

							<hr><!-- Divider -->

							<!-- Rooms item START -->
							<div class="d-flex justify-content-between align-items-center">
								<!-- Image and info -->
								<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
									<!-- Avatar -->
									<div class="flex-shrink-0">
										<img src="assets/images/category/hotel/4by3/02.jpg" class="rounded h-60px" alt="">
									</div>
									<!-- Info -->
									<div class="ms-sm-3 mt-2 mt-sm-0">
										<h6 class="mb-1">Rock Family Suite</h6>
										<ul class="list-inline smaller mb-0">
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="far fa-star-half-stroke text-warning"></i></li>
											<li class="list-inline-item me-0">(11 reviews)</li>
										</ul>
									</div>
								</div>
								<!-- Button -->
								<a href="#" class="btn btn-sm btn-light flex-shrink-0 mb-0 ms-3">View</a>
							</div>
							<!-- Rooms item END -->
							
						</div>
						<!-- Card body END -->
					</div>
				</div>
				<!-- Reviews END -->
			</div>	
			<!-- Widget END -->
	
		</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->
	
	</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendor -->
<script src="assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>
<script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from booking.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Feb 2023 06:46:47 GMT -->
</html>