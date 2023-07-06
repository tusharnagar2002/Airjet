<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
require 'helpers/init_conn_db.php';
?>
<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Search START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Booking from START -->
				<form class="bg-mode border rounded position-relative px-4 pt-4 mb-4 mb-sm-0">
					<div class="row g-4">
						<!-- Nav tabs START -->
						<div class="col-lg-6">
							<ul class="nav nav-pills nav-pills-dark" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link rounded-start rounded-0 mb-0 active" id="pills-one-way-tab" data-bs-toggle="pill" data-bs-target="#pills-one-way" type="button" role="tab" aria-selected="true">One Way</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link rounded-end rounded-0 mb-0" id="pills-round-trip-tab" data-bs-toggle="pill" data-bs-target="#pills-round-trip" type="button" role="tab" aria-selected="false">Round Trip</button>
								</li>
							</ul>
						</div>
						<!-- Nav tabs END -->
	
						<!-- Ticket class -->
						<div class="col-lg-3 ms-auto">
							<div class="form-control-bg-light form-fs-md">
								<select class="form-select js-choice">
									<option value="">Select Class</option>
									<option>Economy</option>
									<option selected>Premium Economy</option>
									<option>Business</option>
									<option>First Class</option>
								</select>
							</div>	
						</div>
	
						<!-- Ticket Passenger -->
						<div class="col-lg-3 ms-auto">
							<div class="form-control-bg-light form-fs-md">
								<select class="form-select js-choice">
									<option value="">Select Travelers</option>
									<option>1</option>
									<option selected>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>	
						</div>
					</div>
	
					<!-- Tab content START -->
					<div class="tab-content mt-4" id="pills-tabContent">
						<!-- One way tab START -->
						<div class="tab-pane fade show active" id="pills-one-way" role="tabpanel" aria-labelledby="pills-one-way-tab">
							<div class="row g-4">
								<!-- Leaving From -->
								<div class="col-md-6 col-lg-4 position-relative">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<!-- Input field -->
										<label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
										<select class="form-select js-choice" data-search-enabled="true">
											<option value="">Select location</option>
											<option selected>San Jacinto, USA</option>
											<option>North Dakota, Canada</option>
											<option>West Virginia, Paris</option>
										</select>
									</div>
	
									<!-- Auto fill button -->
									<div class="btn-flip-icon mt-3 mt-md-0">
										<button class="btn btn-white shadow btn-round mb-0"><i class="fa-solid fa-right-left"></i></button>
								 </div>
								</div>
	
								<!-- Going To -->
								<div class="col-md-6 col-lg-4">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<!-- Input field -->
										<label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
										<select class="form-select js-choice" data-search-enabled="true">
											<option value="">Select location</option>
											<option>San Jacinto, USA</option>
											<option selected>North Dakota, Canada</option>
											<option>West Virginia, Paris</option>
										</select>
									</div>
								</div>
	
								<!-- Departure -->
								<div class="col-lg-4">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<label class="mb-1"><i class="bi bi-calendar me-2"></i>Departure</label>
										<input type="text" class="form-control flatpickr" placeholder="Select date" data-date-format="d M Y" value="19 Nov 2022">
									</div>
								</div>
	
								<div class="col-12 text-end pt-0">
									<a  class="btn btn-primary mb-n4" href="#">Find ticket <i class="bi bi-arrow-right ps-3"></i></a>
								</div>
							</div>
						</div>
						<!-- One way tab END -->
	
						<!-- Round way tab END -->
						<div class="tab-pane fade" id="pills-round-trip" role="tabpanel" aria-labelledby="pills-round-trip-tab">
							<div class="row g-4">
	
								<!-- Leaving From -->
								<div class="col-md-6 col-xl-3 position-relative">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<!-- Input field -->
										<label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
										<select class="form-select js-choice" data-search-enabled="true">
											<option value="">Select location</option>
											<option>San Jacinto, USA</option>
											<option>North Dakota, Canada</option>
											<option>West Virginia, Paris</option>
										</select>
									</div>
									
									<!-- Auto fill button -->
									<div class="btn-flip-icon mt-3 mt-md-0">
										 <button class="btn btn-white shadow btn-round mb-0"><i class="fa-solid fa-right-left"></i></button>
									</div>
								</div>
	
								<!-- Going To -->
								<div class="col-md-6 col-xl-3">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<!-- Input field -->
										<label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
										<select class="form-select js-choice" data-search-enabled="true">
											<option value="">Select location</option>
											<option>San Jacinto, USA</option>
											<option>North Dakota, Canada</option>
											<option>West Virginia, Paris</option>
										</select>
									</div>
								</div>
	
								<!-- Departure -->
								<div class="col-md-6 col-xl-3">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<label class="mb-1"><i class="bi bi-calendar me-2"></i>Departure</label>
										<input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
									</div>
								</div>
	
								<!-- Return -->
								<div class="col-md-6 col-xl-3">
									<div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
										<label class="mb-1"><i class="bi bi-calendar me-2"></i>Return</label>
										<input type="text" class="form-control flatpickr" data-date-format="d M Y" placeholder="Select date">
									</div>
								</div>
	
								<div class="col-12 text-end pt-0">
									<a  class="btn btn-primary mb-n4" href="#">Find ticket <i class="bi bi-arrow-right ps-3"></i></a>
								</div>
							</div>
						</div>
						<!-- Round way tab END -->
					</div>
					<!-- Tab content END -->
				</form>
				<!-- Booking from END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Search START -->
	
<!-- =======================
Title and notice board START -->
<section class="pt-0">
	<div class="container position-relative">
		<!-- Title and button START -->
		<div class="row">
			<div class="col-12">
				<div class="d-sm-flex justify-content-sm-between align-items-center">
					<!-- Title -->
					<?php
					// Get the total number of flights available
					$sql = "SELECT COUNT(*) AS num_flights FROM Flight WHERE departure=? AND arrival=? AND departure_date=?";
					$stmt = mysqli_prepare($conn, $sql);
					mysqli_stmt_bind_param($stmt, "sss", $departure, $arrival, $departure_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt, $num_flights);
					mysqli_stmt_fetch($stmt);
					mysqli_stmt_close($stmt);
					?>

					<div class="mb-3 mb-sm-0">
						<h1 class="fs-3"><?php echo $num_flights; ?> Flight Available</h1>
						<ul class="nav nav-divider h6 mb-0">
							<li class="nav-item"><h4><?php $formatted_date = date('D, j M.', strtotime($departure_date)); echo $formatted_date;?></h4></li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
		<!-- Title and button END -->
	</div>
</section>
<!-- =======================
Title and notice board END -->

<!-- =======================
Flight list START -->
<section class="pt-0">
	<div class="container">
		<div class="row">
			<!-- Main content START -->
			<div class="col-xl-8 col-xxl-9 mx-auto w-100">
				<div class="vstack gap-4">
					<!-- Ticket item START -->
					<div class="card border">
						<!-- Card body -->
						<div class="card-body p-4 pb-0">
							<!-- Ticket item START -->
							<div class="row g-4">
								<!-- Airport detail -->
								<?php
								$sql = 'SELECT * FROM Flight WHERE departure=? AND arrival=? AND departure_date=? ORDER BY Price';
								$stmt = mysqli_prepare($conn, $sql);
								mysqli_stmt_bind_param($stmt, 'sss', $departure, $arrival, $departure_date);
								mysqli_stmt_execute($stmt);
								$result = mysqli_stmt_get_result($stmt);

								while ($row = mysqli_fetch_assoc($result)) {
									// Retrieve the departure time from the current flight schedule record
									$departure_time = $row['departure_time'];
								?>
									<div class="col-sm-4 col-md-3">
										<h4><?= date('D, j M.', strtotime($departure_date)) ?></h4>
										<?php $formatted_departure_time = date("h:i A", strtotime($departure_time));?>
										<p class="mb-0"><?= $formatted_departure_time ?></p>
									</div>
								<?php
								}
								mysqli_stmt_close($stmt);
								?>
								<!-- Time -->
								<div class="col-sm-4 col-md-3 my-sm-auto text-center">
									<!-- Time -->
									<h5>9hr 50min</h5>
									<div class="position-relative my-4">
										<!-- Line -->
										<hr class="bg-primary opacity-5 position-relative">
										<!-- Icon -->
										<div class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
											<i class="fa-solid fa-fw fa-plane rtl-flip"></i>
										</div>
									</div>
								</div>

								<!-- Airport detail -->
								<div class="col-sm-4 col-md-3">
									<h4>07:35</h4>
									<p class="mb-0">JFK - Terminal 2 New York, USA</p>
								</div>

								<!-- Price -->
								<div class="col-md-3 text-md-end">
									<h4>$18,500</h4>
									<a href="flight-detail.html" class="btn btn-dark mb-0 mb-sm-2">Book Now</a>
									<button class="btn btn-link text-decoration-underline p-0 mb-0" data-bs-toggle="modal" data-bs-target="#flightdetail">
										<i class="bi bi-eye-fill me-1"></i>Flight Details
									</button>
								</div>
							</div>
							<!-- Ticket item END -->
						</div>  

						<!-- Card footer -->
						<div class="card-footer pt-4">
							<ul class="list-inline bg-light rounded-2 d-sm-flex text-center justify-content-sm-between mb-0 px-4 py-2">
								<li class="list-inline-item text-danger">Only 10 Seat Left</li>
								<li class="list-inline-item text-danger">Non-Refundable</li>
							</ul>
						</div>
					</div>
					<!-- Ticket item END -->

					<!-- Ticket item START -->
					<div class="card border">
						<!-- Card header -->
						<div class="card-header d-sm-flex justify-content-sm-between align-items-center">
							<!-- Airline Name -->
							<div class="d-flex align-items-center mb-2 mb-sm-0">
								<img src="assets/images/element/12.svg" class="w-30px me-2" alt="">
								<h6 class="fw-normal mb-0">Wizixo Airline (SA - 1254)</h6>
							</div>
							<h6 class="fw-normal mb-0"><span class="text-body">Travel Class:</span> Economy</h6>
						</div>

						<!-- Card body -->
						<div class="card-body p-4 pb-0">
							<!-- Ticket item START -->
							<div class="row g-4">
								<!-- Airport detail -->
								<div class="col-sm-4 col-md-3">
									<h4>14:50</h4>
									<p class="mb-0">BOM - Terminal 2 Mumbai, India</p>
								</div>

								<!-- Time -->
								<div class="col-sm-4 col-md-3 my-sm-auto text-center">
									<!-- Time -->
									<h5>9hr 50min</h5>
									<div class="position-relative my-4">
										<!-- Line -->
										<hr class="bg-primary opacity-5 position-relative">
										<!-- Icon -->
										<div class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
											<i class="fa-solid fa-fw fa-plane rtl-flip"></i>
										</div>
									</div>
								</div>

								<!-- Airport detail -->
								<div class="col-sm-4 col-md-3">
									<h4>07:35</h4>
									<p class="mb-0">JFK - Terminal 2 New York, USA</p>
								</div>

								<!-- Price -->
								<div class="col-md-3 text-md-end">
									<h4>$18,500</h4>
									<a href="flight-detail.html" class="btn btn-dark mb-0 mb-sm-2">Book Now</a>
								</div>
							</div>
							<!-- Ticket item END -->
						</div>  

						<!-- Card footer -->
						<div class="card-footer pt-4">
							<ul class="list-inline bg-light rounded-2 d-sm-flex text-center justify-content-sm-between mb-0 px-4 py-2">
								<li class="list-inline-item text-danger">Only 25 Seat Left</li>
								<li class="list-inline-item text-danger">Non-Refundable</li>
								<li class="list-inline-item">
									<!-- Collapse button -->
									<a class="btn-more d-flex align-items-center collapsed p-0 mb-0" data-bs-toggle="collapse" href="#flightDetail" role="button" aria-expanded="false" aria-controls="flightDetail">
										Flight detail<i class="fa-solid fa-angle-down ms-2"></i>
									</a>
								</li> 
							</ul>

							<!-- Collapse body START -->
							<div class="multi-collapse collapse" id="flightDetail">
								<!-- Tabs START -->
								<ul class="nav nav-pills nav-justified nav-responsive bg-primary bg-opacity-10 rounded mt-4 mb-3 p-2" id="flightlist-tab" role="tablist">
									<!-- Tab item -->
									<li class="nav-item" role="presentation">
										<button class="nav-link active mb-0" id="flightlist-tab-1" data-bs-toggle="pill" data-bs-target="#flightlist-tab1" type="button" role="tab" aria-controls="flightlist-tab1" aria-selected="true">Flight Information</button>
									</li>
									<!-- Tab item -->
									<li class="nav-item" role="presentation">
										<button class="nav-link mb-0" id="flightlist-tab-2" data-bs-toggle="pill" data-bs-target="#flightlist-tab2" type="button" role="tab" aria-controls="flightlist-tab2" aria-selected="false">Fare Detail</button>
									</li>
									<!-- Tab item -->
									<li class="nav-item" role="presentation">
										<button class="nav-link mb-0" id="flightlist-tab-3" data-bs-toggle="pill" data-bs-target="#flightlist-tab3" type="button" role="tab" aria-controls="flightlist-tab3" aria-selected="false">Baggage Rules</button>
									</li>
									<!-- Tab item -->
									<li class="nav-item" role="presentation">
										<button class="nav-link mb-0" id="flightlist-tab-4" data-bs-toggle="pill" data-bs-target="#flightlist-tab4" type="button" role="tab" aria-controls="flightlist-tab4" aria-selected="false">Cancellation Rules</button>
									</li>
								</ul>
								<!-- Tabs END -->

								<!-- Tab content START -->
								<div class="tab-content mb-0" id="flightlist-tabContent">

									<!-- Content item START -->
									<div class="tab-pane fade show active" id="flightlist-tab1" role="tabpanel" aria-labelledby="flightlist-tab-1">
										<div class="card border">

											<!-- Card header -->
											<div class="card-header d-flex align-items-center pb-0">
												<img src="assets/images/element/12.svg" class="w-30px me-2" alt="">
												<h6 class="fw-normal mb-0">Wizixo Airline (SA - 1254)</h6>
											</div>

											<!-- Card body START -->
											<div class="card-body p-4">
												<!-- Ticket item START -->
												<div class="row g-4">
													<!-- Airport detail -->
													<div class="col-sm-4">
														<!-- Title -->
														<h4>BOM</h4>
														<h6 class="mb-0">14:50</h6>
														<p class="mb-0">Chhatrapati Shivaji International Airport</p>
													</div>

													<!-- Time -->
													<div class="col-sm-4 my-sm-auto text-center">
														<!-- Time -->
														<h5>9hr 50min</h5>

														<div class="position-relative my-4">
															<!-- Line -->
															<hr class="bg-primary opacity-5 position-relative">
															<!-- Icon -->
															<div class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
																<i class="fa-solid fa-fw fa-plane rtl-flip"></i>
															</div>
														</div>
													</div>

													<!-- Airport detail -->
													<div class="col-sm-4">
														<!-- Title -->
														<h4>CDG</h4>
														<h6 class="mb-0">11:50</h6>
														<p class="mb-0">Ch. De Gaulle, Paris, France</p>
													</div>
												</div>
												<!-- Ticket item END -->

												<!-- Divider -->
												<div class="bg-light text-center fw-normal rounded-2 mt-3 mb-4 p-2">
													Change of planes: 3h 15m Layover in France
												</div>

												<!-- Ticket item START -->
												<div class="row g-4">
													<!-- Airport detail -->
													<div class="col-sm-4">
														<!-- Title -->
														<h4>CDG</h4>
														<h6 class="mb-0">2:50</h6>
														<p class="mb-0">Ch. De Gaulle, Paris, France</p>
													</div>

													<!-- Time -->
													<div class="col-sm-4 my-sm-auto text-center">
														<!-- Time -->
														<h5>5hr 50min</h5>

														<div class="position-relative my-4">
															<!-- Line -->
															<hr class="bg-primary opacity-5 position-relative">
															<!-- Icon -->
															<div class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
																<i class="fa-solid fa-fw fa-plane rtl-flip"></i>
															</div>
														</div>
													</div>

													<!-- Airport detail -->
													<div class="col-sm-4">
														<!-- Title -->
														<h4>JFK</h4>
														<h6 class="mb-0">7:35</h6>
														<p class="mb-0">John F Kennedy Intl-NY</p>
													</div>
												</div>
												<!-- Ticket item END -->
											</div>  
											<!-- Card body END -->
										</div>
									</div>		
									<!-- Content item END -->

									<!-- Content item START -->
									<div class="tab-pane fade" id="flightlist-tab2" role="tabpanel" aria-labelledby="flightlist-tab-2">
										<div class="card card-body">
											<!-- Table START -->
											<div class="table-responsive-lg">
												<table class="table caption-bottom mb-0">
													<!-- Caption -->
													<caption class="pb-0">*From The Date Of Departure</caption>
													<!-- Table head -->
													<thead class="table-dark">
														<tr>
															<th scope="col" class="border-0 rounded-start">Base Fare</th>
															<th scope="col" class="border-0">Taxes and Fees</th>
															<th scope="col" class="border-0 rounded-end">Total Fees</th>
														</tr>
													</thead>
													<!-- Table body -->
													<tbody>
														<tr>
															<td>$36,500</td>
															<td>$1,050</td>
															<td><h5 class="mb-0">$37,550</h5></td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- Table END -->
										</div>
									</div>	
									<!-- Content item END -->

									<!-- Content item START -->
									<div class="tab-pane fade" id="flightlist-tab3" role="tabpanel" aria-labelledby="flightlist-tab-3">
										<div class="card border">
											<!-- Card header -->
											<div class="card-header d-flex align-items-center border-bottom">
												<!-- Title -->
												<img src="assets/images/element/12.svg" class="w-30px me-2" alt="">
												<h5 class="card-title mb-0">BOM - CDG</h5>
											</div>
						
											<!-- Card body -->
											<div class="card-body">
												<!-- Table START -->
												<div class="table-responsive-lg">
													<table class="table caption-bottom mb-0">
														<!-- Caption -->
														<caption class="pb-0">*1PC = 23KG</caption>
														<!-- Table head -->
														<thead class="table-dark">
															<tr>
																<th scope="col" class="border-0 rounded-start">Baggage Type</th>
																<th scope="col" class="border-0">Check In</th>
																<th scope="col" class="border-0 rounded-end">Cabin</th>
															</tr>
														</thead>
														<!-- Table body -->
														<tbody class="border-top-0">
															<tr>
																<td>Adult</td>
																<td>2 PC</td>
																<td>7 Kg</td>
															</tr>
														</tbody>
													</table>
												</div>
												<!-- Table END -->
											</div>
										</div>
									</div>	
									<!-- Content item END -->

									<!-- Content item START -->
									<div class="tab-pane fade" id="flightlist-tab4" role="tabpanel" aria-labelledby="flightlist-tab-4">
										<div class="card border">
											<!-- Card header -->
											<div class="card-header d-flex align-items-center border-bottom">
												<!-- Title -->
												<img src="assets/images/element/12.svg" class="w-30px me-2" alt="">
												<h5 class="card-title mb-0">BOM - CDG</h5>
											</div>

											<!-- Card body -->
											<div class="card-body">
												<!-- Table START -->
												<div class="table-responsive-lg">
													<table class="table caption-bottom mb-0">
														<!-- Caption -->
														<caption class="pb-0">*From The Date Of Departure</caption>
														<!-- Table head -->
														<thead class="table-dark">
															<tr>
																<th scope="col" class="border-0 rounded-start">Time Frame</th>
																<th scope="col" class="border-0 rounded-end">Air Free + MMT Free</th>
															</tr>
														</thead>
														<!-- Table body -->
														<tbody class="border-top-0">
															<tr>
																<td>0 hours to 24 hours</td>
																<td>Non Refundable</td>
															</tr>
															<tr>
																<td>24 hours to 365 days</td>
																<td>$16,325 + $250</td>
															</tr>
														</tbody>
													</table>
												</div>
												<!-- Table END -->
											</div>
										</div>
									</div>		
									<!-- Content item END -->

								</div>
								<!-- Tab content END -->
							</div>
						</div>
					</div>
					<!-- Ticket item END -->

					<!-- Action box START -->
					<div class="bg-success bg-opacity-10 p-3 rounded-2 d-sm-flex justify-content-sm-between align-items-center">
						<!-- Title and badge -->
						<div class="d-flex align-items-center mb-3 mb-sm-0">
							<div class="position-relative z-index-1 me-2">
								<img src="assets/images/element/05.svg" class="position-relative h-40px" alt="">
								<span class="smaller text-white position-absolute top-50 start-50 translate-middle">New</span>
							</div>
							<!-- Title -->
							<h6 class="mb-0 fw-normal">Get <strong class='text-success'>12% Off</strong> On Your First Flight</h6>
						</div>

						<!-- Button -->
						<a href="#" class="btn btn-sm btn-success mb-0">Login / Signup</a>
					</div>
					<!-- Action box END -->

					<!-- Ticket item START -->
					<div class="card border">
						<!-- Card header -->
						<div class="card-header">
							<div class="d-md-flex justify-content-md-between">
								<!-- Airline Name -->
								<div class="d-flex align-items-center mb-2 mb-md-0">
									<img src="assets/images/element/14.svg" class="w-30px me-2" alt="">
									<h6 class="fw-normal mb-0">Folio Airline (CCE - 2158)</h6>
								</div>
								<h6 class="fw-normal mb-0"><span class="text-body">Travel Class:</span> Economy</h6>
							</div>
						</div>

						<!-- Card body START -->
						<div class="card-body p-4 pb-0">
							<div class="row g-4 align-items-center">
								<!-- Ticket START -->
								<div class="col-md-9">
									<!-- Ticket detail START -->
									<div class="row g-4">
										<!-- Airport detail -->
										<div class="col-sm-4">
											<h4>14:50</h4>
											<h6 class="mb-0 fw-normal">Sun, 29 Jan 2023</h6>
											<p class="mb-0">BOM - Terminal 2 Mumbai, India</p>
										</div>
	
										<!-- Time -->
										<div class="col-sm-4 my-sm-auto text-center">
											<h5>9hr 50min</h5>
											<div class="position-relative my-4">
												<!-- Line -->
												<hr class="bg-primary opacity-5 position-relative">
												<!-- Icon -->
												<div class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
													<i class="fa-solid fa-fw fa-plane rtl-flip"></i>
												</div>
											</div>
										</div>
	
										<!-- Airport detail -->
										<div class="col-sm-4">
											<h4>07:35</h4>
											<h6 class="mb-0 fw-normal">Sun, 30 Jan 2023</h6>
											<p class="mb-0">JFK - Terminal 2 New York, USA</p>
										</div>
									</div>
									<!-- Ticket detail END -->

									<!-- Divider -->
									<hr class="my-4">

									<!-- Ticket detail START -->
									<div class="row g-4">
										<!-- Airport detail -->
										<div class="col-sm-4">
											<h4>04:50</h4>
											<h6 class="mb-0 fw-normal">Sun, 19 Feb 2023</h6>
											<p class="mb-0">JFK - Terminal 2 New York, USA</p>
										</div>
	
										<!-- Time -->
										<div class="col-sm-4 my-sm-auto text-center">
											<h5>10hr 35min</h5>
											<div class="position-relative my-4">
												<!-- Line -->
												<hr class="bg-primary opacity-5 position-relative">
												<!-- Icon -->
												<div class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
													<i class="fa-solid fa-fw fa-plane rtl-flip"></i>
												</div>
											</div>
										</div>
	
										<!-- Airport detail -->
										<div class="col-sm-4">
											<h4>15:48</h4>
											<h6 class="mb-0 fw-normal">Sun, 19 Feb 2023</h6>
											<p class="mb-0">BOM - Terminal 2 Mumbai, India</p>
										</div>
									</div>
									<!-- Ticket detail END -->
								</div>
								<!-- Ticket END -->

								<!-- Price START -->
								<div class="col-md-3 text-md-end">
									<!-- Price -->
									<h4>$18,500</h4>
									<a href="flight-detail.html" class="btn btn-dark mb-0 mb-sm-2">Book Now</a>
									<button class="btn btn-link text-decoration-underline p-0 mb-0" data-bs-toggle="modal" data-bs-target="#flightdetail">
										<i class="bi bi-eye-fill me-1"></i>Flight Details
									</button>
								</div>
								<!-- Price END -->
							</div>	<!-- Row END -->
						</div>  
						<!-- Card body END -->

						<!-- Card footer -->
						<div class="card-footer pt-4">
							<div class="">
								<ul class="list-inline bg-light d-sm-flex text-center justify-content-sm-between rounded-2 py-2 px-4 mb-0">
									<li class="list-inline-item text-danger">Only 10 Seat Left</li>
									<li class="list-inline-item text-success">Refundable</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Ticket item END -->

					<!-- Pagination START -->
					<nav class="d-flex justify-content-center" aria-label="navigation">
						<ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
							<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fa-solid fa-angle-left"></i></a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
							<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
						</ul>
					</nav>
					<!-- Pagination END -->

				</div>
			</div>
			<!-- Main content END -->
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Flight list END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				<a href="index.html">
					<img class="h-40px" src="assets/images/logo-light.svg" alt="logo">
				</a>
				<p class="my-3 text-muted">Departure defective arranging rapturous did believe him all had supported.</p>
				<p class="mb-2"><a href="#" class="text-muted text-primary-hover"><i class="bi bi-telephone me-2"></i>+1234 568 963</a> </p>
				<p class="mb-0"><a href="#" class="text-muted text-primary-hover"><i class="bi bi-envelope me-2"></i>example@gmail.com</a></p>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-8 ms-auto">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Page</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-muted" href="#">About us</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">News and Blog</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Meet a Team</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Link</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-muted" href="#">Sign up</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Sign in</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Privacy Policy</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Terms</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Cookie</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Support</a></li>
						</ul>
					</div>
									
					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Global Site</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-muted" href="#">India</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">California</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Indonesia</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Canada</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#">Malaysia</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-md-3">
						<h5 class="text-white mb-2 mb-md-4">Booking</h5>
						<ul class="nav flex-column text-primary-hover">
							<li class="nav-item"><a class="nav-link text-muted" href="#"><i class="fa-solid fa-hotel me-2"></i>Hotel</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#"><i class="fa-solid fa-plane me-2"></i>Flight</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#"><i class="fa-solid fa-globe-americas me-2"></i>Tour</a></li>
							<li class="nav-item"><a class="nav-link text-muted" href="#"><i class="fa-solid fa-car me-2"></i>Cabs</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->

		</div><!-- Row END -->

		<!-- Tops Links -->
		<div class="row mt-5">
			<h5 class="mb-2 text-white">Top Links</h5>
			<ul class="list-inline text-primary-hover lh-lg">
				<li class="list-inline-item"><a href="#" class="text-muted">Flights</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Hotels</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Tours</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Cabs</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">About</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Contact us</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Blogs</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Services</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Detail page</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Services</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Policy</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Testimonials</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Newsletters</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Podcasts</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Protests</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">NewsCyber</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Education</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Sports</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Tech and Auto</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Opinion</a></li>
				<li class="list-inline-item"><a href="#" class="text-muted">Share Market</a></li>
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

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="row">
			<div class="container">
				<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-lg-start">
					<!-- copyright text -->
					<div class="text-muted text-primary-hover"> Copyrights ©2023 Booking. Build by <a href="https://www.webestica.com/" class="text-muted">Webestica</a>. </div>
					<!-- copyright links-->
					<div class="nav mt-2 mt-lg-0">
						<ul class="list-inline text-primary-hover mx-auto mb-0">
							<li class="list-inline-item me-0"><a class="nav-link py-1 text-muted" href="#">Privacy policy</a></li>
							<li class="list-inline-item me-0"><a class="nav-link py-1 text-muted" href="#">Terms and conditions</a></li>
							<li class="list-inline-item me-0"><a class="nav-link py-1 text-muted pe-0" href="#">Refund policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Flight detail modal START -->
<div class="modal fade" id="flightdetail" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Title -->
			<div class="modal-header">
				<h5 class="modal-title">Flight Details</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<!-- Body -->
			<div class="modal-body p-3">
				<!-- Tabs START -->
				<ul class="nav nav-pills nav-justified nav-responsive bg-primary bg-opacity-10 rounded p-2 mb-3" id="flight-pills-tab" role="tablist">
					<!-- Tab item -->
					<li class="nav-item" role="presentation">
						<button class="nav-link active mb-0" id="flight-info" data-bs-toggle="pill" data-bs-target="#flight-info-tab" type="button" role="tab" aria-controls="flight-info-tab" aria-selected="true">Flight Information</button>
					</li>
					<!-- Tab item -->
					<li class="nav-item" role="presentation">
						<button class="nav-link mb-0" id="flight-fare" data-bs-toggle="pill" data-bs-target="#flight-fare-tab" type="button" role="tab" aria-controls="flight-fare-tab" aria-selected="false">Fare Detail</button>
					</li>
					<!-- Tab item -->
					<li class="nav-item" role="presentation">
						<button class="nav-link mb-0" id="flight-baggage" data-bs-toggle="pill" data-bs-target="#flight-baggage-tab" type="button" role="tab" aria-controls="flight-baggage-tab" aria-selected="false">Baggage Rules</button>
					</li>
					<!-- Tab item -->
					<li class="nav-item" role="presentation">
						<button class="nav-link mb-0" id="flight-policy" data-bs-toggle="pill" data-bs-target="#flight-policy-tab" type="button" role="tab" aria-controls="flight-policy-tab" aria-selected="false">Cancellation Rules</button>
					</li>
				</ul>
				<!-- Tabs END -->

				<!-- Tab content START -->
				<div class="tab-content mb-0" id="flight-pills-tabContent">

					<!-- Content item START -->
					<div class="tab-pane fade show active" id="flight-info-tab" role="tabpanel" aria-labelledby="flight-info">
						<div class="card border">

							<!-- Card header -->
							<div class="card-header">
								<div class="d-sm-flex justify-content-sm-between align-items-center">
									<!-- Airline Name -->
									<div class="d-flex mb-2 mb-sm-0">
										<img src="assets/images/element/09.svg" class="w-40px me-2" alt="">
										<h6 class="fw-normal mb-0">Phillippines Airline (PA - 5620)</h6>
									</div>
									<h6 class="fw-normal mb-0"><span class="text-body">Travel Class:</span> Economy</h6>
								</div>
							</div>

							<!-- Card body START -->
							<div class="card-body p-4">
								<!-- Ticket item START -->
								<div class="row g-4">
									<!-- Airport detail -->
									<div class="col-sm-4">
										<!-- Title -->
										<h4>BOM</h4>
										<h6 class="mb-0">14:50</h6>
										<p class="mb-0">Chhatrapati Shivaji International Airport</p>
									</div>

									<!-- Time -->
									<div class="col-sm-4 my-sm-auto text-center">
										<!-- Time -->
										<h5>9hr 50min</h5>

										<div class="position-relative my-4">
											<!-- Line -->
											<hr class="bg-primary opacity-5 position-relative">
											<!-- Icon -->
											<div class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
												<i class="fa-solid fa-fw fa-plane rtl-flip"></i>
											</div>
										</div>
									</div>

									<!-- Airport detail -->
									<div class="col-sm-4">
										<!-- Title -->
										<h4>CDG</h4>
										<h6 class="mb-0">11:50</h6>
										<p class="mb-0">Ch. De Gaulle, Paris, France</p>
									</div>
								</div>
								<!-- Ticket item END -->

								<!-- Divider -->
								<div class="bg-light text-center fw-normal rounded-2 mt-3 mb-4 p-2">
									Change of planes: 3h 15m Layover in France
								</div>

								<!-- Ticket item START -->
								<div class="row g-4">
									<!-- Airport detail -->
									<div class="col-sm-4">
										<!-- Title -->
										<h4>CDG</h4>
										<h6 class="mb-0">2:50</h6>
										<p class="mb-0">Ch. De Gaulle, Paris, France</p>
									</div>

									<!-- Time -->
									<div class="col-sm-4 my-sm-auto text-center">
										<!-- Time -->
										<h5>5hr 50min</h5>

										<div class="position-relative my-4">
											<!-- Line -->
											<hr class="bg-primary opacity-5 position-relative">
											<!-- Icon -->
											<div class="icon-md bg-primary text-white rounded-circle position-absolute top-50 start-50 translate-middle">
												<i class="fa-solid fa-fw fa-plane rtl-flip"></i>
											</div>
										</div>
									</div>

									<!-- Airport detail -->
									<div class="col-sm-4">
										<!-- Title -->
										<h4>JFK</h4>
										<h6 class="mb-0">7:35</h6>
										<p class="mb-0">John F Kennedy Intl-NY</p>
									</div>
								</div>
								<!-- Ticket item END -->
							</div>  
							<!-- Card body END -->
						</div>
					</div>		
					<!-- Content item END -->

					<!-- Content item START -->
					<div class="tab-pane fade" id="flight-fare-tab" role="tabpanel" aria-labelledby="flight-fare">
						<div class="card card-body">

							<!-- Table START -->
							<div class="table-responsive-lg">
								<table class="table caption-bottom mb-0">
									<!-- Caption -->
									<caption class="pb-0">*From The Date Of Departure</caption>
									<!-- Table head -->
									<thead class="table-dark">
										<tr>
											<th scope="col" class="border-0 rounded-start">Base Fare</th>
											<th scope="col" class="border-0">Taxes and Fees</th>
											<th scope="col" class="border-0 rounded-end">Total Fees</th>
										</tr>
									</thead>
									<!-- Table body -->
									<tbody>
										<tr>
											<td>$36,500</td>
											<td>$1,050</td>
											<td><h5 class="mb-0">$37,550</h5></td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- Table END -->
						</div>
					</div>	
					<!-- Content item END -->

					<!-- Content item START -->
					<div class="tab-pane fade" id="flight-baggage-tab" role="tabpanel" aria-labelledby="flight-baggage">
						<div class="card border">
							<!-- Card header -->
							<div class="card-header d-flex align-items-center border-bottom">
								<!-- Title -->
								<img src="assets/images/element/09.svg" class="h-20px me-1" alt="">
								<h5 class="card-title mb-0">BOM - CDG</h5>
							</div>
		
							<!-- Card body -->
							<div class="card-body">
								<!-- Table START -->
								<div class="table-responsive-lg">
									<table class="table caption-bottom mb-0">
										<!-- Caption -->
										<caption class="pb-0">*1PC = 23KG</caption>
										<!-- Table head -->
										<thead class="table-dark">
											<tr>
												<th scope="col" class="border-0 rounded-start">Baggage Type</th>
												<th scope="col" class="border-0">Check In</th>
												<th scope="col" class="border-0 rounded-end">Cabin</th>
											</tr>
										</thead>
										<!-- Table body -->
										<tbody class="border-top-0">
											<tr>
												<td>Adult</td>
												<td>2 PC</td>
												<td>7 Kg</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- Table END -->
							</div>
						</div>
					</div>	
					<!-- Content item END -->

					<!-- Content item START -->
					<div class="tab-pane fade" id="flight-policy-tab" role="tabpanel" aria-labelledby="flight-policy">
						<div class="card border">
							<!-- Card header -->
							<div class="card-header d-flex align-items-center border-bottom">
								<!-- Title -->
								<img src="assets/images/element/09.svg" class="h-20px me-1" alt="">
								<h5 class="card-title mb-0">BOM - CDG</h5>
							</div>

							<!-- Card body -->
							<div class="card-body">
								<!-- Table START -->
								<div class="table-responsive-lg">
									<table class="table caption-bottom mb-0">
										<!-- Caption -->
										<caption class="pb-0">*From The Date Of Departure</caption>
										<!-- Table head -->
										<thead class="table-dark">
											<tr>
												<th scope="col" class="border-0 rounded-start">Time Frame</th>
												<th scope="col" class="border-0 rounded-end">Air Free + MMT Free</th>
											</tr>
										</thead>
										<!-- Table body -->
										<tbody class="border-top-0">
											<tr>
												<td>0 hours to 24 hours</td>
												<td>Non Refundable</td>
											</tr>
											<tr>
												<td>24 hours to 365 days</td>
												<td>$16,325 + $250</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- Table END -->
							</div>
						</div>
					</div>		
					<!-- Content item END -->

				</div>
				<!-- Tab content END -->
			</div>
		</div>
	</div>
</div>
<!-- Flight detail modal END -->

<!-- Back to top -->
<div class="back-top"></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/nouislider/nouislider.min.js"></script>

<!-- ThemeFunctions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from booking.webestica.com/flight-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Feb 2023 06:44:07 GMT -->
</html>