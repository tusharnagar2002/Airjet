<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); 
require 'helpers/init_conn_db.php';
?>
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
            <!-- Round way tab START -->
            <div class="row g-4 position-relative">
                <?php
                $sql = 'SELECT * FROM Cities ';
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);         
                mysqli_stmt_execute($stmt);          
                $result = mysqli_stmt_get_result($stmt);
                ?>
                <form action="book_flight.php" method="post">
                <input type="hidden" name="type" value="round"> 
                    <div class="row g-4">
                        <!-- Leaving From -->
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
                        <script src="assets/vendor/flatpickr/js/flatpickr.min.js"></script>
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
            <!-- Round Trip tab END -->
        </div>
    </div>
</section>
<!-- Another Section -->
<section>
	<div class="container">
		<div class="row mb-5">
			<div class="col-xl-10 mx-auto">
				<!-- Title -->
				<h4>Cheap Flight Booking With Airjet</h4>
				<p class="lead">India's largest and leading passenger airline - Airjet strives to offer the lowest airfare for your flight booking.
                Over the years, Airjet has become synonymous with on-time travel and with every flight ticket you book on the website, we strive to deliver a hassle-free experience to you.
                With an expanding network and fleet, Airjet operates to connect you to the people and places you love.<br>
                <br>Airjet currently has flights to over 75 domestic destinations in India.
                The smaller regions of India are connected with our fleet of ATRs, the larger cities with the A320 CEO, A320 NEO and A321 NEO aircraft, etc..
                So, book directly from our website or mobile app for a personalised experience and get ready to enjoy an array of benefits with Airjet.<br>
                <br><a href="index.php"><img src="assets/images/favicon.png" alt="Book Flight Tickets" /></a><br><br>
			</div>
			<div class="col-xl-10 mx-auto">
				<!-- Title -->
				<h4>AJ Tiffin - Add your favourite snack and beverage on your next flight booking</h4>
				<p class="lead">AJ Tiffin offers a range of hygienic, healthy and delicious snacks on domestic bookings that will elevate your flight experience.
                Some of the favourites from the AJ Tiffin menu include Rava Upma, Veg Biryani, Poha, Tomato Cucumber Cheese Lettuce Sandwich, Paneer Tikka Sandwich, Chana Kulcha Roll.
                Additionally, we have some breakfast and other lighter options such as Cornflakes with Milk, Muesli with yoghurt, Pie with Plum Cake, Unibic Chocolate Chips Cookies, cashew, etc.
                Please note that a few of the items can only be pre-booked and are subject to availability.<br><br><p>
			</div>
			<div class="col-xl-10 mx-auto">
				<!-- Title -->
				<h4>When is the best time to book cheap air tickets with Airjet?</h4>
				<p class="lead">Finding cheap flight tickets means using the saved money for a more elaborate holiday with an opportunity to indulge in more local experiences and shopping.
                Isn’t it? So, it is best that you plan your travel in advance and directly book through <a href="index.php">Airjet</a>, to enjoy the perks of getting the best deal along with several other benefits.<br>
                <br>You can also keep a track of the Airjet airfare calendar, keep an eye on the offers page on our website and also our social media page for announcements on sale offers.
                Airjet offers special fares during its sale period, making it an excellent time to book your flight tickets.<br>
                <br>In addition, the cashback offers are sure to delight you with additional savings on your airfare.<br><br></p>
            </div>
			<div class="col-xl-10 mx-auto">
				<!-- Title -->
				<h4>Facts and Figures</h4>
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