<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
require 'helpers/init_conn_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>About Airjet</title>

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

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style>
	a:hover {
	text-decoration: underline;
	}
	.card-element-hover .card-img-wrapper {
    position: relative;
    overflow: hidden;
	border-radius: 1rem;
	}

	.card-element-hover .card-img-wrapper img {
		transition: transform 0.5s ease;
	}

	.card-element-hover .card-img-wrapper:hover img {
		transform: scale(1.1);
	}
	</style>

</head>
<body>
<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main banner START -->
<section>
	<div class="container">
		<div class="row mb-5">
			<div class="col-xl-10 mx-auto text-center">
				<!-- Title -->
				<h1>AIRJET</h1>
				<p class="lead">Airjet is India’s largest passenger airline with a market share of 94.6% as of January, 2023. We primarily operate in India’s domestic air travel market as a low-cost carrier with focus on our three pillars – offering low fares, being on-time and delivering a courteous and hassle-free experience.<br>
				<br>Since our inception in August 2010, we have grown from a carrier with one plane to a fleet of 300 aircraft today. A uniform fleet for each type of operation, high operational reliability and an award winning service make us one of the most reliable airlines in India.<br>
				<br>Airjet has a total of 74 domestic destinations making it India’s only Airline Service that operates in 70+ cities.<br></p>
				<!-- Meta -->
				<div class="hstack gap-3 flex-wrap justify-content-center">
					<!-- Item -->
					<h6 class="bg-mode shadow rounded-2 fw-normal d-inline-block py-2 px-4">
						<img src="assets/images/element/06.svg" class="h-20px me-2" alt="">
						282M+ Global Customers
					</h6>

					<!-- Item -->
					<h6 class="bg-mode shadow rounded-2 fw-normal d-inline-block py-2 px-4">
						<img src="assets/images/element/07.svg" class="h-20px me-2" alt="">
						97% Happy Customers
					</h6>
				</div>
			</div>
			<div class="col-xl-10 mx-auto text-center">
				<!-- Title -->
				<h1>The preferred airline</h1>
				<p class="lead">Airjet is not only the most efficient low fare operator domestically but is also comparable with global low cost airlines.<br>
				<br>We are constantly enhancing our engagement with our passengers to augment their travel experience.<br>
				<br>From multichannel direct sales (including <a href="index.php">online flight booking</a>, call centers and airport counters), to online flight status checking, an exclusive Airjet app for Android, we have transformed air travel in India.<br>
				<br>Today, we are India’s most preferred airline. At Airjet, low fares come with high quality.<br></p>
			</div>
			<div class="col-xl-10 mx-auto text-center">
				<!-- Title -->
				<h1>Great Place to Work</h1>
				<p class="lead">A highly engaged and motivated workforce leads to higher levels of customer service.<br>
				<br>Our state-of-the-art ‘ifly’ facility is designed to deliver a real-time training experience to all our new recruits.<br>
				<br>This training facility is considered to be one the best aviation training facilities in India.<br>
				<br>With our people-friendly culture at the heart of all we do, we continuously help the company staff find work-life balance.<br>
				<br>Having won ‘Companies with Great Managers’ award three years in a row and being ‘Great place to work - Certified’ in 2021, is testimonial to the culture we have, making us one of the best launchpads for future leaders.<br></p>			
			</div>
			<div class="col-xl-10 mx-auto">
				<!-- Title -->
				<h1 class="text-center">Facts and Figures</h1>
				<p class="lead">Market share of <strong>94.6%</strong> as of January, 2023.<br>
				<br>Named as <strong>Aon</strong> Hewitt Best Employers India for the year 2016 and 2017.<br>
				<br><strong>Fleet</strong> of 300 aircraft including 161 new generation A320 NEOs, 23 A320 CEOs, 39 ATRs and 79 A321 NEO.<br>
				<br>Best Low-Cost Airline, in India by <strong>SKYTRAX World Airline</strong> Awards for 10 consecutive years (2010-2019).<br>
				<br>Recognized as <strong>‘Great Place to Work’</strong> for in India’ for 8 years in a row (2008- 2015) and for the 9th time in 2021.<br>
				<br><strong>Airjet</strong> has been ranked as the 4th most punctual airline globally in 2018, 6th most punctual airline globally in 2019 and 3rd most punctual airline globally in 2021 by <strong>OAG Punctuality League</strong>.<br>
				<br>Airjet has been recognized among the most valuable and strongest airline brands worldwide, as per the <strong>Brand Finance Airlines 50 report</strong> for two consecutive years. We ranked #43 in year 2020 and moved up 7 positions to #36 in the year 2021.<br>
			</div>
		</div>
		<!-- Row END -->
	</div>
</section>
<!-- =======================
Main banner START -->

<!-- =======================
Team START -->
<section class="pt-0">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12">
				<h2 class="mb-0">Our Team</h2>
			</div>
		</div>

		<!-- Team START -->
		<div class="row g-4">
			<!-- Team item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card card-element-hover bg-transparent">
				<a href="atharva.php">
					<div class="position-relative">
						<!-- Image -->
						<div class="card-img-wrapper"  style="height: 325px;">
							<img src="assets/images/atharva.png" class="card-img" alt="Atharva Kadam">
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title">Atharva Kadam</h5>
						<span>Co-Founder, Airjet.</span>
					</div>
				</a>
				</div>
			</div>
			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card card-element-hover bg-transparent">
				<a href="ayushi.php">
					<div class="position-relative">
						<!-- Image -->
						<div class="card-img-wrapper"  style="height: 325px;">
							<img src="assets/images/ayushi.jpeg" class="card-img" alt="Ayushi Janwalkar">
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title">Ayushi Janwalkar</h5>
						<span>Graphic Designer Head, Airjet.</span>
					</div>
				</a>
				</div>
			</div>

			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card card-element-hover bg-transparent">
				<a href="dipanshu.php">
					<div class="position-relative">
						<!-- Image -->
						<div class="card-img-wrapper" style="height: 325px;">
							<img src="assets/images/dipanshu.jpeg" class="card-img" alt="Dipanshu Singh">
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title">Dipanshu Singh</h5>
						<span>Director in Chief, Airjet.</span>
					</div>
				</a>
				</div>
			</div>
			<!-- Team item END -->

			<!-- Team item START -->
			<div class="col-sm-6 col-lg-3">
				<div class="card card-element-hover bg-transparent">
				<a href="tushar.php">
					<div class="position-relative">
						<!-- Image -->
						<div class="card-img-wrapper" style="height: 325px;">
							<img src="assets/images/tushar.jpg" class="card-img" alt="Vishal Prajapati">
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2 pb-0">
						<h5 class="card-title">Tushar Nagar</h5>
						<span>Founder & CEO, Airjet.</span>
					</div>
				</a>
				</div>
			</div>
			<!-- Team item END -->
		</div>
		<!-- Team END -->
		<div class="justify content-center mt-6" style="text-align: center;">
           <h3>Our Team</h3>
          <img src="assets/images/group.jpeg" class="img-fluid" style="height: 350px;">
         </div>

	</div>
</section>
<!-- =======================
Team END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer>
	<div class="container">
		<div class="bg-dark rounded-top py-5 p-sm-5 mx-0">
    <div class="row g-4 align-items-center text-center text-lg-start">
			<!-- Copyright -->
			<div class="col-lg-5">
				<ul class="nav list-inline text-primary-hover justify-content-center justify-content-lg-start mb-0">
					<li class="list-inline-item"><a class="nav-link text-muted" href="about.php">About</a></li>
					<li class="list-inline-item"><a class="nav-link text-muted" href="policy.php">Policy</a></li>
					<li class="list-inline-item"><a class="nav-link text-muted pe-0" href="tnc.php">Terms & Condition</a></li>
				</ul>
			</div>
			
			<!-- Logo -->
			<div class="col-lg-3 text-center">
				<!-- Logo -->
				<a class="me-0" href="index.php">
					<img class="h-60px" src="assets/images/Whitelogo.png" alt="footer logo">
				</a>
				<div class="text-muted text-primary-hover mt-2">Copyright, 2023. All rights reserved.</div>
			</div>

			<!-- Social links -->
			<div class="col-lg-4">
				<ul class="nav text-primary-hover hstack gap-2 justify-content-center justify-content-lg-end">
					<li class="nav-item">
						<a class="nav-link fs-5 text-muted" href="#"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link fs-5 text-muted" href="#"><i class="fab fa-twitter"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link fs-5 text-muted" href="#"><i class="fab fa-instagram"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link fs-5 text-muted" href="#"><i class="fab fa-linkedin-in"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link fs-5 text-muted" href="#"><i class="fab fa-github"></i></a>
					</li>
				</ul>
			</div>
			<!-- Payment and card -->
			<div class="row g-4 justify-content-between mt-0 mt-md-2">

			<!-- Payment card -->
			<div class="col-sm-7 col-md-6 col-lg-4">
				<h5 class="text-white mb-2">Payment & Security</h5>
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/paypal.svg" class="h-30px" alt=""></a></li>
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/visa.svg" class="h-30px" alt=""></a></li>
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/mastercard.svg" class="h-30px" alt=""></a></li>
					<li class="list-inline-item"> <a href="#"><img src="assets/images/element/expresscard.svg" class="h-30px" alt=""></a></li>
				</ul>
			</div>

			<!-- Social media icon -->
			<div class="col-sm-5 col-md-6 col-lg-3 text-sm-end">
				<h5 class="text-white mb-2">Follow us on</h5>
				<ul class="list-inline mb-0 mt-3">
					<li class="list-inline-item"> <a class="btn btn-sm px-2 bg-facebook mb-0" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-instagram mb-0" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-twitter mb-0" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm shadow px-2 bg-linkedin mb-0" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>	
			</div>
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
</html>