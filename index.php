<!-- Top alert START -->
<div class="alert alert-warning py-2 m-0 bg-primary border-0 rounded-0 alert-dismissible fade show text-center overflow-hidden" role="alert">
	<p class="text-white m-0">Get updated information on COVID-19 travel guidance and restrictions.<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/travel-advice" class="btn btn-xs btn-danger ms-2 mb-0">Learn more!</a></p>
	<!-- Close button -->
	<button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<!-- Top alert END -->
<?php 
require 'helpers/helper.php'; 
subview('header.php'); 
require 'helpers/init_conn_db.php';
?>
<head>
	<title>Airjet</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<!-- **************** MAIN CONTENT START **************** -->
<main>	
<!-- =======================
Main Banner START -->
<section class="py-0">
	<div class="rounded-3 p-3 p-sm-5">
		<!-- Booking form START -->
			<div class="bg-mode position-relative px-3 px-sm-4 pt-4 mb-4 mb-sm-0">
				<!-- Svg decoration -->
				<figure class="position-absolute top-0 start-0 h-100 ms-n2 ms-sm-n1">
					<svg class="h-100" viewBox="0 0 12.9 324" style="enable-background:new 0 0 12.9 324;">
						<path class="fill-mode" d="M9.8,316.4c1.1-26.8,2-53.4,1.9-80.2c-0.1-18.2-0.8-36.4-1.2-54.6c-0.2-8.9-0.2-17.7,0.8-26.6 c0.5-4.5,1.1-9,1.4-13.6c0.1-1.9,0.1-3.7,0.1-5.6c-0.2-0.2-0.6-1.5-0.2-3.1c-0.3-1.8-0.4-3.7-0.4-5.5c-1.2-3-1.8-6.3-1.7-9.6 c0.9-19,0.5-38.1,0.8-57.2c0.3-17.1,0.6-34.2,0.2-51.3c-0.1-0.6-0.1-1.2-0.1-1.7c0-0.8,0-1.6,0-2.4c0-0.5,0-1.1,0-1.6 c0-1.2,0-2.3,0.2-3.5H0v11.8c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V31c3.3,0,6.1,2.7,6.1,6.1S3.3,43.3,0,43.3v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 s-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V324h9.5C9.6,321.4,9.7,318.8,9.8,316.4z"/>
					</svg>
				</figure>
				<!-- Svg decoration -->
				<figure class="position-absolute top-0 end-0 h-100 rotate-180 me-n2 me-sm-n1">
					<svg class="h-100" viewBox="0 0 21 324" style="enable-background:new 0 0 21 324;">
						<path class="fill-mode" d="M9.8,316.4c1.1-26.8,2-53.4,1.9-80.2c-0.1-18.2-0.8-36.4-1.2-54.6c-0.2-8.9-0.2-17.7,0.8-26.6 c0.5-4.5,1.1-9,1.4-13.6c0.1-1.9,0.1-3.7,0.1-5.6c-0.2-0.2-0.6-1.5-0.2-3.1c-0.3-1.8-0.4-3.7-0.4-5.5c-1.2-3-1.8-6.3-1.7-9.6 c0.9-19,0.5-38.1,0.8-57.2c0.3-17.1,0.6-34.2,0.2-51.3c-0.1-0.6-0.1-1.2-0.1-1.7c0-0.8,0-1.6,0-2.4c0-0.5,0-1.1,0-1.6 c0-1.2,0-2.3,0.2-3.5H0v11.8c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V31c3.3,0,6.1,2.7,6.1,6.1S3.3,43.3,0,43.3v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 s-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9 c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.7,6.1,6.1 c0,3.4-2.8,6.1-6.1,6.1v6.9c3.3,0,6.1,2.8,6.1,6.1c0,3.4-2.8,6.1-6.1,6.1V324h9.5C9.6,321.4,9.7,318.8,9.8,316.4z"/>
					</svg>
				</figure>
				<div class="row g-4 position-relative">
					<!-- Nav tabs START -->
					<div class="col-lg-6">
						<ul class="nav nav-pills nav-pills-dark d-flex align-items-center" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link rounded-start rounded-0 mb-0 active" id="pills-one-way-tab" data-bs-toggle="pill" data-bs-target="#pills-one-way" type="button" role="tab" aria-selected="true">One Way</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link rounded-end rounded-0 mb-0" id="pills-round-trip-tab" data-bs-toggle="pill" data-bs-target="#pills-round-trip" type="button" role="tab" aria-selected="false">Round Trip</button>
							</li>
						</ul>
					</div>
					<!-- Nav tabs END -->

					<!-- Tab content START -->
					<div class="tab-content mt-4" id="pills-tabContent">
						<!-- One way tab START -->
						<?php
						$sql = 'SELECT * FROM Cities';
						$stmt = mysqli_stmt_init($conn);
						mysqli_stmt_prepare($stmt,$sql);         
						mysqli_stmt_execute($stmt);          
						$result = mysqli_stmt_get_result($stmt);
						?>
						<div class="tab-pane fade show active" id="pills-one-way" role="tabpanel" aria-labelledby="pills-one-way-tab">
						<form action="book_flight.php" method="post" onsubmit="return validateForm()">
						<input type="hidden" name="type" value="one">
							<div class="row g-4">
								<div class="col-md-6 col-lg-3 position-relative">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<!-- Input field -->
										<label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
										<select class="form-select js-choice" data-search-enabled="true" name="departure" id="departure" required>
										<option value="" selected disabled >Select Location</option>
										<?php while ($row = mysqli_fetch_assoc($result)): ?>
											<option value="<?php echo $row['city']; ?>"><?php echo $row['city']; ?></option>
										<?php endwhile; ?>
										</select>
									</div>
								</div>

								<?php
									// Reset the result set pointer to the beginning
									mysqli_data_seek($result, 0);
								?>

								<!-- Going To -->
								<div class="col-md-6 col-lg-3">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
									<!-- Input field -->
									<label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
										<select class="form-select js-choice" data-search-enabled="true" name="arrival" id="arrival" required>
										<option value="" selected disabled>Select Location</option>
										<?php while ($row = mysqli_fetch_assoc($result)): ?>
											<option value="<?php echo $row['city']; ?>"><?php echo $row['city']; ?></option>
										<?php endwhile; ?>
										</select>
									</div>
								</div>
								
								<!-- Passengers -->
								<div class="col-md-6 col-lg-3">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<!-- Input field -->
										<label class="mb-1"><i class="bi bi-people me-2"></i>Passengers</label>
										<div class="input-group">
										<button class="btn btn-outline-secondary minus-btn" type="button">-</button>
										<input type="number" name="passengers" class="form-control text-center" required value="1">
										<button class="btn btn-outline-secondary plus-btn" type="button">+</button>
										</div>
									</div>
								</div>

								<script>
								// Get the input field and buttons
								const input = document.querySelector("input[name='passengers']");
								const minusBtn = document.querySelector(".minus-btn");
								const plusBtn = document.querySelector(".plus-btn");

								// Add event listeners for the buttons
								minusBtn.addEventListener("click", function() {
									if(input.value > 1) {
									input.value--;
									}
								});

								plusBtn.addEventListener("click", function() {
									if(input.value < 9) {
									input.value++;
									}
								});
								</script>
								<!-- Departure -->
								<div class="col-lg-3">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<label class="mb-1"><i class="bi bi-calendar me-2"></i>Departure</label>
										<input type="date" name="departure_date" class="form-control" id="datepicker" placeholder="Select Date" required="" min="<?php echo date('Y-m-d'); ?>">
									</div>
								</div>
								<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
								<script>
									function validateForm() {
									var departureDate = document.getElementById("datepicker").value;
									if (departureDate == "") {
										alert("Please select a departure date.");
										return false;
									}
								}
									flatpickr("#datepicker", {
										minDate: "today",
										maxDate: new Date().fp_incr(90),
									});
								</script>
								<div class="col-12 text-end pt-0">
									<button type="submit" value="Search Flights" name="find_tickets" class="btn btn-primary mb-n4">Find tickets <i class="bi bi-arrow-right ps-3"></i></button>
								</div>
							</div>
						</form>
						</div>
						<!-- One way tab END -->

						<!-- Round way tab START -->
						<div class="tab-pane fade" id="pills-round-trip" role="tabpanel" aria-labelledby="pills-round-trip-tab">
						<form action="book_flight.php" method="post">
						<input type="hidden" name="type" value="round">
							<div class="row g-4">
							<!-- Leaving From -->
								<div class="col-md-6 col-lg-3 position-relative">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
									<!-- Input field -->
										<label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
										<select class="form-select js-choice" data-search-enabled="true" name="departure" id="departure" required>
										<option value="" selected disabled>Select Location</option>
										<?php
											// Retrieve city data from database
											$sql = "SELECT city FROM cities";
											$result = mysqli_query($conn, $sql);

											// Populate dropdown menu with city data
											if (mysqli_num_rows($result) > 0) {
											while ($row = mysqli_fetch_assoc($result)) {
												echo "<option value='" . $row['city'] . "'>" . $row['city'] . "</option>";
											}
											}

											mysqli_close($conn);
										?>
										</select>
									</div>
								</div>

								<?php
									// Reset the result set pointer to the beginning
									mysqli_data_seek($result, 0);
								?>

								<!-- Going To -->
								<div class="col-md-6 col-lg-3">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
									<!-- Input field -->
										<label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
											<select class="form-select js-choice" data-search-enabled="true" name="arrival" id="arrival" required>
											<option value="" selected disabled>Select Location</option>
											<?php while ($row = mysqli_fetch_assoc($result)): ?>
												<option value="<?php echo $row['city']; ?>"><?php echo $row['city']; ?></option>
											<?php endwhile; ?>                    
										</select>
									</div>
								</div>

								<!-- Passengers -->
								<div class="col-md-6 col-lg-2">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<!-- Input field -->
										<label class="mb-1"><i class="bi bi-people me-2"></i>Passengers</label>
										<div class="input-group">
										<button class="btn btn-outline-secondary minus-btn" type="button">-</button>
										<input type="number" name="passengers" class="form-control text-center" required value="1">
										<button class="btn btn-outline-secondary plus-btn" type="button">+</button>
										</div>
									</div>
								</div>

								<script>
								// Get the input field and buttons
								const input = document.querySelector("input[name='passengers']");
								const minusBtn = document.querySelector(".minus-btn");
								const plusBtn = document.querySelector(".plus-btn");

								// Add event listeners for the buttons
								minusBtn.addEventListener("click", function() {
									if(input.value > 1) {
									input.value--;
									}
								});

								plusBtn.addEventListener("click", function() {
									if(input.value < 9) {
									input.value++;
									}
								});
								</script>

								<!-- Departure -->
								<div class="col-md-6 col-lg-2">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<label class="mb-1"><i class="bi bi-calendar me-2"></i>Departure</label>
										<input type="text" name="departure_date" class="form-control flatpickr" id="departure_date" placeholder="Select date" required>
									</div>
								</div>
								<!-- Return -->
								<div class="col-md-6 col-lg-2">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<label class="mb-1"><i class="bi bi-calendar me-2"></i>Return</label>
										<input type="text" name="return_date" class="form-control flatpickr" id="return_date" placeholder="Select date" required>
									</div>
								</div>
								<script>
								var departure_date = document.getElementById("departure_date");
								var return_date = document.getElementById("return_date");

								// Initialize flatpickr for departure date input
								flatpickr(departure_date, {
									minDate: "today",
									onClose: function(selectedDates, dateStr, instance) {
										// If a departure date is selected, enable the return date input
										if (selectedDates.length > 0) {
											return_date.disabled = false;
											return_date._flatpickr.set("minDate", selectedDates[0]);
											return_date._flatpickr.set("maxDate", selectedDates[0].fp_incr(90));
										} else {
											// If no departure date is selected, disable the return date input
											return_date.disabled = true;
											return_date._flatpickr.clear();
										}
									}
								});

								// Initialize flatpickr for return date input, initially disabled
								flatpickr(return_date, {
									minDate: "departure_date",
									maxDate: new Date().fp_incr(90),
									disabled: true
								});
								</script>
								<div class="col-12 text-end pt-0">
									<button type="submit" value="Search Flights" name="find_tickets" class="btn btn-primary mb-n4">Find tickets <i class="bi bi-arrow-right ps-3"></i></button>
								</div>
							</div>
						</form>
						</div>
						<!-- Round way tab END -->
          </div>
          <!-- Tab content END -->
        </div>
		</div>
			<!-- Booking from END -->
			<!-- Banner title -->
			<div class="row"> 
				<div class="col-md-10 mx-auto text-center"> 
					<h1 class="text-light display-10 pt-sm-5 my-5">Ready to take off?</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Main Banner END -->

<section class="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1>Give the Gift of Travel</h1>
        <p class="lead">Surprise your loved ones with a gift voucher from <strong>Airjet</strong>.</p>
        <a href="gift-voucher.php" class="btn btn-primary btn-lg">Create Gift Voucher</a>
      </div>
      <div class="col-md-6">
        <a href="gift-voucher.php">
        <img src="assets\images\gift_voucher.jpg" alt="Gift voucher image" class="img-fluid rounded" style="border: 5px solid #f1f1f1; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);">
        </a>
      </div>
    </div>
  </div>
</section>
<!-- =======================
Special offer START -->
<section>
	<div class="container">

		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12">
				<h4 class="mb-0">Special Offers</h4>
			</div>
		</div>

		<div class="row g-4">
			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card bg-success bg-opacity-10 h-100 p-4">
					<!-- Image -->
					<img src="assets/images/client/07.svg" class="w-75" alt="">
					<!-- Card body START -->
					<div class="card-body mt-4 p-0">
						<span class="mb-1">Flat</span>
						<h4 class="mb-1">$899 off</h4>
						<h6 class="fw-normal">On Domestic Flights</h6>

						<div class="d-flex justify-content-between align-items-center mt-4">
							<div class="bg-primary bg-opacity-10 border border-2 border-primary border-dashed rounded-2 px-3 py-2">
							 <h5 class="fw-normal user-select-all mb-0">LOG125F</h5>
							</div>
						</div>
					</div>
					<!-- Card body END -->
				</div>
			</div>

			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card bg-danger bg-opacity-10 h-100 p-4">
					<!-- Image -->
					<img src="assets/images/client/08.svg" class="w-75" alt="">
					<!-- Card body START -->
					<div class="card-body mt-4 p-0">
						<span class="mb-1">Flat</span>
						<h4 class="mb-1">13% off</h4>
						<h6 class="fw-normal">On Domestic Flights</h6>

						<div class="d-flex justify-content-between align-items-center mt-4">
							<div class="bg-primary bg-opacity-10 border border-2 border-primary border-dashed rounded-2 px-3 py-2">
							 <h5 class="fw-normal user-select-all mb-0">LOG125F</h5>
							</div>
							 <a href="#" class="btn btn-lg btn-white btn-round mb-0"><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
					<!-- Card body END -->
				</div>
			</div>

			<!-- Card item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card bg-info bg-opacity-10 h-100 p-4">
					<!-- Image -->
					<img src="assets/images/client/09.svg" class="w-75" alt="">
					<!-- Card body START -->
					<div class="card-body mt-4 p-0">
						<span class="mb-1">Flat</span>
						<h4 class="mb-1">$2,400 off</h4>
						<h6 class="fw-normal">On International Flights</h6>

						<div class="d-flex justify-content-between align-items-center mt-4">
							<div class="bg-primary bg-opacity-10 border border-2 border-primary border-dashed rounded-2 px-3 py-2">
							 <h5 class="fw-normal user-select-all mb-0">LOG125F</h5>
							</div>
							 <a href="#" class="btn btn-lg btn-white btn-round mb-0"><i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
					<!-- Card body END -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Special offer END -->

<!-- =======================
Popular Destinations START -->
<section class="pt-0 pt-lg-5">
	<div class="container">

		<!-- Title -->
		<div class="row mb-4">
			<div class="col-12 text-center">
				<h2 class="mb-0">Popular Destinations</h2>
			</div>
		</div>

		<div class="row g-4">
			<!-- Destination item START -->
			<div class="col-sm-6 col-lg-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">	
					<!-- Card format icon -->
					<div class="position-absolute top-0 end-0 p-3 z-index-9">
						<a tabindex="0" class="mb-0 btn btn-white btn-round" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="left" data-bs-content="COVID-19 test required Vaccinated travelers can visit">
							<i class="bi bi-info-circle"></i>
						</a>
					</div>

					<!-- Image -->
					<div class="card-img-scale-wrapper rounded-3">
						<img src="assets/images/category/flight/01.jpg" class="card-img" alt="hotel image">
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="card-title"><a href="flight-list.html" class="stretched-link">Thailand</a></h5>
							<h6 class="mb-0">4.3<i class="fas fa-star text-warning ms-1"></i></h6>
						</div>
						<!-- Content -->
						<span class="mb-0">The next flight is on 26th Dec</span>
					</div>
				</div>
				<!-- Card END -->
			</div>
			<!-- Destination item END -->

			<!-- Destination item START -->
			<div class="col-sm-6 col-lg-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image -->
					<div class="card-img-scale-wrapper rounded-3">
						<img src="assets/images/category/flight/03.jpg" class="card-img" alt="">
					</div>
					
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="card-title"><a href="flight-list.html" class="stretched-link">Hong Kong</a></h5>
							<h6 class="mb-0">4.6<i class="fas fa-star text-warning ms-1"></i></h6>
						</div>
						<!-- Content -->
						<p class="mb-0">Daily 1 flight</p>
					</div>
				</div>
				<!-- Card END -->
			</div>
			<!-- Destination item END -->

			<!-- Destination item START -->
			<div class="col-sm-6 col-lg-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Card format icon -->
					<div class="position-absolute top-0 end-0 p-3 z-index-9">
						<a tabindex="0" class="mb-0 btn btn-white btn-round z-index-2" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="left" data-bs-content="Vaccinated travelers can visit. Masks required">
							<i class="bi bi-info-circle"></i>
						</a>
					</div>

					<!-- Image -->
					<div class="card-img-scale-wrapper rounded-3">
						<img src="assets/images/category/flight/02.jpg" class="card-img" alt="hotel image">
					</div>

					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="card-title"><a href="flight-list.html" class="stretched-link">Maldives</a></h5>
							<h6 class="mb-0">4.3<i class="fas fa-star text-warning ms-1"></i></h6>
						</div>
						<!-- Content -->
						<p class="mb-0">2 flights every week</p>
					</div>
				</div>
				<!-- Card END -->
			</div>
			<!-- Destination item END -->

			<!-- Destination item START -->
			<div class="col-sm-6 col-lg-3">
				<!-- Card START -->
				<div class="card card-img-scale overflow-hidden bg-transparent">
					<!-- Image -->
					<div class="card-img-scale-wrapper rounded-3">
						<img src="assets/images/category/flight/04.jpg" class="card-img" alt="">
					</div>
					
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Title -->
						<div class="d-flex justify-content-between align-items-center">
							<h5 class="card-title"><a href="flight-list.html" class="stretched-link">Switzerland</a></h5>
							<h6 class="mb-0">4.3<i class="fas fa-star text-warning ms-1"></i></h6>
						</div>
						<!-- Content -->
						<p class="mb-0">Filling fast, next available flight on 2nd Oct</p>
					</div>
				</div>
				<!-- Card END -->
			</div>
			<!-- Destination item END -->
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Popular Destinations END -->

<!-- =======================
Steps START -->
<section class="pt-0">
	<div class="container">
		<div class="row g-4 g-lg-5 justify-content-center">
			<!-- Step item -->
			<div class="col-sm-6 col-md-4 text-center position-relative">
				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-100 translate-middle mt-8 d-none d-lg-block">
					<svg width="154px" height="83px">
						<path class="fill-secondary opacity-4" d="M142.221,83.016 L140.251,81.082 L148.020,73.376 C146.847,73.405 145.665,73.402 144.479,73.353 L144.548,70.637 C145.888,70.692 147.217,70.676 148.535,70.628 L139.384,62.839 L141.165,60.792 L153.787,71.539 L142.221,83.016 ZM131.667,71.378 L132.327,68.751 C134.373,69.284 136.418,69.712 138.402,70.022 L138.015,72.707 C135.938,72.383 133.803,71.936 131.667,71.378 ZM119.489,67.036 L120.594,64.564 C122.531,65.433 124.480,66.221 126.383,66.905 L125.482,69.458 C123.509,68.751 121.493,67.935 119.489,67.036 ZM108.113,60.978 L109.540,58.677 C111.340,59.784 113.170,60.834 114.978,61.800 L113.698,64.186 C111.840,63.193 109.961,62.115 108.113,60.978 ZM99.302,55.005 C98.712,54.567 98.124,54.125 97.540,53.680 L99.203,51.541 C99.776,51.978 100.352,52.412 100.933,52.843 C102.031,53.657 103.148,54.459 104.282,55.243 L102.729,57.461 C101.568,56.659 100.426,55.841 99.302,55.005 ZM87.631,45.617 L89.413,43.574 C91.015,44.943 92.626,46.298 94.258,47.629 L92.525,49.714 C90.877,48.369 89.247,47.000 87.631,45.617 ZM78.063,37.231 L79.883,35.221 L84.635,39.423 L82.823,41.439 L78.063,37.231 ZM68.521,28.905 L70.295,26.853 C71.914,28.227 73.520,29.618 75.118,31.017 L73.310,33.038 C71.724,31.648 70.130,30.268 68.521,28.905 ZM58.688,21.003 L60.328,18.848 C62.036,20.128 63.717,21.440 65.378,22.781 L63.659,24.875 C62.023,23.557 60.369,22.263 58.688,21.003 ZM48.288,13.967 L49.683,11.647 C51.494,12.727 53.321,13.891 55.111,15.108 L53.575,17.340 C51.832,16.155 50.053,15.019 48.288,13.967 ZM38.981,9.077 C38.372,8.799 37.760,8.531 37.146,8.268 L38.204,5.775 C38.838,6.046 39.469,6.325 40.098,6.611 C41.429,7.216 42.746,7.854 44.046,8.521 L42.810,10.930 C41.547,10.283 40.272,9.664 38.981,9.077 ZM25.330,4.320 L25.934,1.679 C27.985,2.168 30.080,2.771 32.161,3.471 L31.314,6.042 C29.311,5.369 27.298,4.791 25.330,4.320 ZM13.076,2.706 L13.084,-0.012 C15.208,0.029 17.387,0.197 19.559,0.487 L19.234,3.180 C17.166,2.905 15.094,2.745 13.076,2.706 ZM0.759,1.270 C2.660,0.821 4.623,0.487 6.593,0.273 L6.939,2.975 C5.080,3.177 3.230,3.493 1.439,3.914 L0.759,1.270 Z"/>
					</svg>
				</figure>
		
				<div class="px-4">
					<!-- Image -->
					<img src="assets/images/element/step-3.svg" class="w-150px mb-3" alt="">
					<!-- Title -->
					<h5>Domestic + International Flights</h5>
					<p class="mb-0">Total 630+ destinations</p>
				</div>	
			</div>
		
			<!-- Step item -->
			<div class="col-sm-6 col-md-4 position-relative text-center pt-0 pt-lg-5">
				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-100 translate-middle d-none d-lg-block mt-n9">
					<svg class="fill-secondary opacity-4" width="161px" height="79px">
						<path d="M158.107,15.463 L157.135,5.449 C156.369,6.347 155.573,7.235 154.736,8.101 L152.599,6.579 C153.544,5.600 154.425,4.592 155.272,3.574 L142.859,6.243 L142.411,3.796 L159.535,0.118 L160.985,15.028 L158.107,15.463 ZM131.614,21.310 C133.615,20.323 135.558,19.284 137.387,18.222 L138.833,20.282 C136.938,21.383 134.927,22.459 132.858,23.479 L131.614,21.310 ZM119.450,26.438 C121.550,25.684 123.624,24.876 125.616,24.039 L126.674,26.293 C124.626,27.153 122.496,27.983 120.340,28.758 L119.450,26.438 ZM107.366,32.761 L106.764,30.352 C107.500,30.158 108.237,29.959 108.974,29.755 C110.367,29.370 111.762,28.963 113.155,28.535 L113.894,30.904 C112.468,31.343 111.042,31.759 109.615,32.153 C108.867,32.359 108.116,32.563 107.366,32.761 ZM93.778,33.405 C95.956,32.941 98.128,32.461 100.295,31.955 L100.806,34.386 C98.616,34.898 96.421,35.383 94.222,35.850 L93.778,33.405 ZM80.657,36.053 L87.229,34.752 L87.633,37.206 L81.049,38.509 L80.657,36.053 ZM67.485,38.736 C69.678,38.262 71.876,37.807 74.074,37.362 L74.484,39.816 C72.299,40.256 70.119,40.708 67.942,41.181 L67.485,38.736 ZM54.349,41.900 C56.526,41.309 58.711,40.754 60.906,40.230 L61.433,42.656 C59.274,43.174 57.122,43.718 54.979,44.301 L54.349,41.900 ZM41.404,46.011 C43.490,45.232 45.654,44.489 47.835,43.801 L48.597,46.164 C46.472,46.834 44.363,47.557 42.331,48.315 L41.404,46.011 ZM30.259,53.613 L28.967,51.468 C29.611,51.137 30.259,50.813 30.912,50.495 C32.293,49.821 33.691,49.176 35.102,48.558 L36.207,50.792 C34.838,51.392 33.483,52.016 32.143,52.670 C31.511,52.978 30.883,53.292 30.259,53.613 ZM17.425,58.480 C19.198,57.202 21.090,55.953 23.052,54.765 L24.549,56.794 C22.662,57.937 20.844,59.138 19.142,60.364 L17.425,58.480 ZM7.428,67.231 C8.888,65.655 10.488,64.107 12.182,62.630 L14.128,64.332 C12.516,65.738 10.995,67.211 9.607,68.707 L7.428,67.231 ZM0.172,77.195 C1.089,75.523 2.140,73.865 3.293,72.267 L5.697,73.469 C4.610,74.977 3.620,76.539 2.755,78.114 L0.172,77.195 ZM149.871,12.613 C148.214,13.999 146.419,15.364 144.535,16.669 L142.867,14.750 C144.671,13.499 146.390,12.194 147.973,10.869 L149.871,12.613 Z"/>
						</svg>
				</figure>
		
				<div class="px-4">
					<!-- Image -->
					<img src="assets/images/element/step-2.svg" class="w-150px mb-3" alt="">

					<!-- Title -->
					<h5>Select Destination</h5>
					<p class="mb-0">One-Way, Round Trip and Multi-City</p>
				</div>
			</div>
		
			<!-- Step item -->
			<div class="col-sm-6 col-md-4 text-center">
				<div class="px-4">
					<!-- Image -->
					<img src="assets/images/element/step-1.svg" class="w-150px mb-3" alt="">

					<!-- Title -->
					<h5>Easy to Book</h5>
					<p class="mb-0">Easy and fast ticket purchase process</p>
				</div>	
			</div>
		</div>
	</div>
</section>
<!-- =======================
Steps END -->

<!-- =======================
Action box START -->
<section class="py-0">
	<div class="container position-relative">
		<div class="bg-light rounded-3 position-relative p-4 p-sm-5">

			<!-- Svg decoration -->
			<figure class="position-absolute top-50 start-50 d-none d-lg-block mt-n4 ms-9">
				<svg class="fill-primary" width="138px" height="33px">
					<path	d="M105.158,32.490 L107.645,20.515 L101.600,21.873 L108.218,14.263 L110.496,2.974 L137.327,32.728 L105.158,32.490 ZM97.722,13.092 C96.678,12.477 95.604,11.881 94.529,11.319 L94.235,11.166 L94.543,10.576 L94.837,10.730 C95.922,11.296 97.006,11.898 98.060,12.519 L98.346,12.687 L98.009,13.260 L97.722,13.092 ZM91.250,9.714 C90.131,9.202 89.001,8.723 87.890,8.290 L87.581,8.170 L87.822,7.550 L88.132,7.671 C89.254,8.108 90.396,8.592 91.527,9.109 L91.829,9.247 L91.553,9.852 L91.250,9.714 ZM84.453,7.073 C83.279,6.699 82.117,6.374 80.943,6.092 L80.620,6.014 L80.776,5.368 L81.099,5.445 C82.287,5.730 83.465,6.060 84.655,6.439 L84.971,6.539 L84.770,7.173 L84.453,7.073 ZM77.372,5.388 C76.150,5.201 74.933,5.073 73.757,5.007 L73.425,4.988 L73.462,4.324 L73.794,4.343 C74.992,4.409 76.230,4.540 77.473,4.730 L77.802,4.781 L77.701,5.438 L77.372,5.388 ZM66.526,5.421 L66.199,5.480 L66.080,4.826 L66.407,4.766 C67.599,4.550 68.838,4.405 70.090,4.336 L70.422,4.318 L70.458,4.982 L70.126,5.000 C68.902,5.068 67.690,5.209 66.526,5.421 ZM59.574,7.498 L59.267,7.625 L59.014,7.010 L59.321,6.883 C60.448,6.418 61.621,6.003 62.809,5.646 L63.128,5.551 L63.318,6.188 L63.000,6.283 C61.833,6.633 60.681,7.042 59.574,7.498 ZM59.311,8.479 C60.126,9.473 60.795,10.540 61.300,11.649 L61.438,11.952 L60.833,12.228 L60.695,11.925 C60.214,10.868 59.575,9.851 58.797,8.901 L58.586,8.644 L59.100,8.222 L59.311,8.479 ZM54.714,31.225 L54.415,31.370 L54.126,30.771 L54.425,30.626 C55.435,30.137 56.398,29.436 57.287,28.542 L57.522,28.306 L57.993,28.775 L57.759,29.011 C56.816,29.959 55.792,30.703 54.714,31.225 ZM56.229,6.392 C55.322,5.672 54.309,5.004 53.218,4.408 L52.926,4.248 L53.245,3.665 L53.537,3.824 C54.662,4.439 55.706,5.128 56.643,5.871 L56.903,6.078 L56.489,6.599 L56.229,6.392 ZM56.268,8.312 L56.584,8.897 L56.292,9.055 C55.219,9.636 54.178,10.276 53.199,10.957 L52.926,11.147 L52.546,10.601 L52.819,10.411 C53.819,9.715 54.881,9.063 55.976,8.470 L56.268,8.312 ZM51.033,32.098 C50.331,32.098 49.622,32.004 48.925,31.819 C48.925,31.819 48.924,31.819 48.923,31.818 C48.397,31.678 47.868,31.483 47.351,31.238 L47.051,31.096 L47.336,30.495 L47.636,30.637 C48.117,30.865 48.608,31.046 49.095,31.176 C49.096,31.176 49.096,31.176 49.097,31.176 C49.737,31.347 50.389,31.433 51.034,31.433 L51.366,31.433 L51.366,32.098 L51.033,32.098 ZM47.808,15.784 L47.592,16.037 L47.087,15.605 L47.303,15.352 C48.086,14.437 48.962,13.546 49.905,12.704 L50.154,12.483 L50.596,12.979 L50.348,13.200 C49.426,14.022 48.572,14.892 47.808,15.784 ZM49.926,2.908 C48.822,2.493 47.656,2.136 46.459,1.846 L46.136,1.768 L46.293,1.121 L46.616,1.200 C47.836,1.495 49.031,1.861 50.160,2.285 L50.471,2.402 L50.237,3.024 L49.926,2.908 ZM44.153,21.953 L44.048,22.268 L43.418,22.058 L43.523,21.742 C43.892,20.634 44.428,19.496 45.115,18.362 L45.287,18.077 L45.856,18.421 L45.683,18.706 C45.022,19.798 44.507,20.891 44.153,21.953 ZM42.888,1.188 C41.701,1.034 40.482,0.940 39.265,0.907 L38.933,0.898 L38.951,0.233 L39.283,0.242 C40.523,0.275 41.764,0.372 42.974,0.528 L43.303,0.571 L43.218,1.230 L42.888,1.188 ZM32.021,1.426 L31.694,1.482 L31.582,0.827 L31.910,0.770 C33.121,0.564 34.357,0.414 35.583,0.326 L35.915,0.302 L35.962,0.965 L35.630,0.989 C34.426,1.076 33.212,1.223 32.021,1.426 ZM25.072,3.458 L24.766,3.588 L24.506,2.976 L24.812,2.845 C25.949,2.362 27.122,1.942 28.300,1.598 L28.619,1.505 L28.805,2.143 L28.485,2.237 C27.333,2.573 26.185,2.984 25.072,3.458 ZM18.761,7.025 L18.490,7.219 L18.103,6.679 L18.374,6.485 C19.387,5.759 20.435,5.087 21.492,4.488 L21.781,4.324 L22.108,4.902 L21.819,5.067 C20.783,5.654 19.754,6.313 18.761,7.025 ZM13.280,11.802 L13.050,12.042 L12.570,11.581 L12.801,11.341 C13.668,10.439 14.568,9.579 15.475,8.786 L15.725,8.567 L16.163,9.067 L15.913,9.286 C15.020,10.067 14.134,10.913 13.280,11.802 ZM8.648,17.428 L8.455,17.699 L7.914,17.314 L8.106,17.043 C8.831,16.023 9.585,15.035 10.349,14.106 L10.560,13.849 L11.073,14.271 L10.862,14.528 C10.109,15.445 9.364,16.420 8.648,17.428 ZM4.796,23.630 L4.637,23.922 L4.053,23.605 L4.212,23.313 C4.803,22.223 5.426,21.149 6.064,20.120 L6.240,19.837 L6.805,20.187 L6.629,20.470 C5.998,21.488 5.381,22.551 4.796,23.630 ZM1.658,30.231 L1.532,30.539 L0.917,30.286 L1.044,29.979 C1.508,28.850 2.011,27.714 2.539,26.603 L2.682,26.303 L3.282,26.588 L3.140,26.888 C2.617,27.989 2.118,29.113 1.658,30.231 ZM43.602,25.437 C43.661,26.716 44.055,27.783 44.772,28.607 L44.990,28.858 L44.488,29.295 L44.270,29.044 C43.452,28.104 43.004,26.901 42.937,25.468 L42.922,25.136 L43.586,25.104 L43.602,25.437 ZM60.942,22.425 L61.047,22.110 L61.678,22.319 L61.573,22.634 C61.175,23.834 60.657,24.979 60.033,26.037 L59.864,26.323 L59.291,25.986 L59.461,25.699 C60.061,24.681 60.559,23.580 60.942,22.425 ZM61.816,17.509 C61.836,16.777 61.795,16.048 61.694,15.341 L61.648,15.012 L62.306,14.918 L62.353,15.247 C62.458,15.991 62.502,16.758 62.480,17.527 C62.467,18.008 62.433,18.500 62.378,18.989 L62.341,19.319 L61.680,19.246 L61.717,18.915 C61.770,18.445 61.803,17.972 61.816,17.509 Z"/>
				</svg>
			</figure>

			<div class="row align-items-center position-relative">
				<div class="col-lg-8">
					<!-- Title -->
					<div class="d-flex">
						<h3>It's time to discover the World!</h3>
						<img src="assets/images/element/04.svg" class="h-40px ms-3" alt="">
					</div>
					<p class="mb-3 mb-lg-0">Get Out and Travel the Globe, for "Life is a Journey and the World, a beautiful Scenery."</p>
				</div>
				<!-- Content and input -->
				<div class="col-lg-4 text-lg-end">
					<a href="flight-list.html" class="btn btn-lg btn-dark mb-0">Book a Flight</a>
				</div>
			</div> <!-- Row END -->
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

<!-- =======================
Blog START-->
<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-3 mb-sm-4">
			<div class="col-12 text-center">
				<h2 class="mb-0">Latest Blogs & News</h2>
			</div>
		</div>

		<div class="row g-4 g-xl-5 justify-content-between">
			<div class="col-md-6">
				<!-- Card START -->
				<div class="card bg-transparent">
					<!-- Image -->
					<img src="assets/images/blog/01.jpg" class="card-img" alt="">

					<!-- Card body -->
					<div class="card-body px-3">
						<h4><a href="blog-detail.html" class="stretched-link">10 Ways on How to Improve your Hotel Operations</a></h4>
					</div>
				</div>
				<!-- Card END -->
			</div>

			<div class="col-md-6">
				<!-- Card START -->
				<div class="card bg-transparent mb-4 mb-md-5">
					<div class="row align-items-center">
						<!-- Images -->
						<div class="col-sm-4">
							<img src="assets/images/blog/02.jpg" class="card-img" alt="">
						</div>
						<div class="col-sm-8">
							<!-- card body -->
							<div class="card-body p-sm-0">
								<h5 class="card-title"><a href="blog-detail.html" class="stretched-link">Story of water world adventure</a></h5>
								<p class="mb-0">Jacqueline Miller</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Card END -->

				<!-- Card START -->
				<div class="card bg-transparent mb-4 mb-md-5">
					<div class="row align-items-center">
						<!-- Images -->
						<div class="col-sm-4">
							<img src="assets/images/blog/03.jpg" class="card-img" alt="">
						</div>
						<div class="col-sm-8">
							<!-- card body -->
							<div class="card-body p-sm-0">
								<h5 class="card-title"><a href="blog-detail.html" class="stretched-link">How Hotel Technology Can Help Small Hotel Businesses</a></h5>
								<p class="mb-0">Frances Guerrero</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Card END -->

				<!-- Card START -->
				<div class="card bg-transparent mb-0 mb-md-5">
					<div class="row align-items-center">
						<!-- Images -->
						<div class="col-sm-4">
							<img src="assets/images/blog/04.jpg" class="card-img" alt="">
						</div>
						<div class="col-sm-8">
							<!-- card body -->
							<div class="card-body p-sm-0">
								<h5 class="card-title"><a href="blog-detail.html" class="stretched-link">Hotel Service - Become a Guide for Your Guests</a></h5>
								<p class="mb-0">Louis Ferguson</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Card END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Blog START-->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-----------------------------------
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

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>

</body>
</html>