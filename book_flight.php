<?php 
require_once 'helpers/helper.php'; 
subview('header.php'); 
require 'helpers/init_conn_db.php';                      

if(isset($_POST['find_tickets'])) { 
    $departure_date = $_POST['departure_date'];                        
    $ret_date = isset($_POST['ret_date'])? $_POST['ret_date'] : '';  
    $departure = $_POST['departure'];  
    $arrival = $_POST['arrival'];     
    $type = $_POST['type'];
    $passengers = $_POST['passengers'];
    if($departure === $arrival){
        header('Location: index.php?error=sameval');
        exit();    
    }
    if($departure === '0') {
        header('Location: index.php?error=seldep');
        exit(); 
    }
    if($arrival === '0') {
        header('Location: index.php?error=selarr');
        exit();              
    }
}
?>
<?php if ($type == 'one'): ?>
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
            <!-- One way tab START -->
            <div class="row g-4 position-relative">
            <?php
            $sql = "SELECT * FROM Cities ";
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt,$sql);         
            mysqli_stmt_execute($stmt);          
            $result = mysqli_stmt_get_result($stmt);
            ?>
            <div class="tab-pane fade show active" id="pills-one-way" role="tabpanel" aria-labelledby="pills-one-way-tab">
            <form action="book_flight.php" method="post">
            <input type="hidden" name="type" value="one">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 position-relative">
                        <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                            <!-- Input field -->
                            <label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
                            <select class="form-select js-choice" data-search-enabled="true" name="departure" id="departure" required>
                            <option value="" selected disabled >Select Location</option>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <option value="<?php echo $row["city"]; ?>"><?php echo $row["city"]; ?></option>
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
                                <option value="<?php echo $row["city"]; ?>"><?php echo $row["city"]; ?></option>
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
                            <input type="date" name="departure_date" class="form-control" id="datepicker" placeholder="Select Date" required="" min="<?php echo date("Y-m-d"); ?>">
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                    <script>
                        flatpickr("#datepicker", {
                            minDate: "today",
                            maxDate: new Date().fp_incr(90),
                        });
                    </script>
                    <div class="col-12 text-end pt-0">
                        <button type="submit" value="Search Flights" name="find_tickets" class="btn btn-primary mb-n4">Modify Search <i class="bi bi-arrow-right ps-3"></i></button>
                    </div>
                </div>
            </form>
            </div>
            <!-- One way tab END -->
        </div>
    </div>
</section>';
<?php elseif ($type == 'round'): ?>
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
              $sql = "SELECT * FROM Cities";
              $stmt = mysqli_stmt_init($conn);
              mysqli_stmt_prepare($stmt,$sql);         
              mysqli_stmt_execute($stmt);          
              $result = mysqli_stmt_get_result($stmt);
              ?>
              <form action="book_flight.php" method="post">
              <input type="hidden" name="type" value="round"> 
                  <div class="row g-4">
                      <!-- Leaving From -->
                      <div class="col-md-6 col-xl-3 position-relative">
                          <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                              <!-- Input field -->
                              <label class="mb-1"><i class="bi bi-geo-alt me-2"></i>From</label>
                              <select class="form-select js-choice" data-search-enabled="true" name="departure" id="departure" required>
                              <option value="" selected disabled >Select Location</option>
                              <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                  <option value="<?php echo $row["city"]; ?>"><?php echo $row["city"]; ?></option>
                              <?php endwhile; ?>
                              </select>
                          </div>
                      </div>

                      <?php
                          // Reset the result set pointer to the beginning
                          mysqli_data_seek($result, 0);
                      ?>

                      <!-- Going To -->
                      <div class="col-md-6 col-xl-3">
                          <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                          <!-- Input field -->
                              <label class="mb-1"><i class="bi bi-send me-2"></i>To</label>
                                  <select class="form-select js-choice" data-search-enabled="true" name="arrival" id="arrival" required>
                                  <option value="" selected disabled>Select Location</option>
                                  <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                      <option value="<?php echo $row["city"]; ?>"><?php echo $row["city"]; ?></option>
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
                          <button type="submit" value="Search Flights" name="find_tickets" class="btn btn-primary mb-n4">Modify Search <i class="bi bi-arrow-right ps-3"></i></button>
                      </div>
                  </div>
              </form>
          </div>
          <!-- Round Trip tab END -->
      </div>
  </div>
</section>';
<?php endif; ?>
<body>  
    <main>
        <div class="container-md mt-2">
            <h4 class="text-center"><span style="color:#ff9933;">FLIGHTS FROM: </span><br>
                <?php echo $departure; ?><span style="color:#0055ff;"> to </span><?php echo $arrival;?>
                <br><span style="color: green;">DATE: <?php $formatted_date = date('D, j M.', strtotime($departure_date)); echo $formatted_date;?></span>
            </h4>
            <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="text-center">
                <th scope="col">Airline</th>
                <th scope="col">Departure</th>
                <th scope="col">Arrival</th>
                <th scope="col">Duration</th>
                <th scope="col">Fare/pax</th>
                <th scope="col">Total Fare</th>
                <th scope="col">Book Flight</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = 'SELECT * FROM Flight WHERE departure=? AND arrival=? AND departure_date=? ORDER BY Price';
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt,$sql);                
                mysqli_stmt_bind_param($stmt,'sss',$departure,$arrival,$departure_date);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                    $price = (int)$row['price']*(int)$passengers;
                    if($type === 'round') {
                        $price = $price*2;
                    }
                    if (!$result) {
                        die(mysqli_error($conn));
                    } 
                
                    echo "<tr class='text-center'>                  
                        <td>".$row['fleet']."</td>
                        <td>".$row['departure_time']."</td>
                        <td>".$row['arrival_time']."</td>
                        <td>".$row['duration']."</td>
                        <td>₹ ".$row['price']."</td>                   
                        <td>₹ ".$price."</td>
                    ";
                
                    if (isset($_SESSION['userId'])) {   
                        echo "<td align='center' valign='middle'>
                            <form action='pass_form.php' method='post'>
                                <input name='flight_id' type='hidden' value=".$row['flight_id'].">
                                <input name='type' type='hidden' value=".$type.">
                                <input name='passengers' type='hidden' value=".$passengers.">
                                <input name='price' type='hidden' value=".$row['price'].">
                                <input name='ret_date' type='hidden' value=".$ret_date.">
                                <button name='book_flight' type='submit' class='btn btn-primary mb'>Book</button>
                            </form>
                        </td>"; 
                    } else {
                        echo "<td><button onclick=\"location.href='sign-in.php'\" class='btn btn-primary mb'> Login </button></td>";
                    }
                    echo '</tr> '; 
                }
                ?>
            </tbody>
            </table>
        </div>             
    </main>
</body>
