<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); ?>
<?php
    if(isset($_GET['error'])) {
        if($_GET['error'] === 'invdate') {
          echo '<script>alert("Invalid date of birth")</script>';
      } else if($_GET['error'] === 'moblen') {
          echo '<script>alert("Invalid contact info")</script>';
      } else if($_GET['error'] === 'sqlerror') {
          echo"<script>alert('Database error')</script>";
      }
      echo"<script>location.replace(document.referer)</script>";
    }
    ?>
<?php if(isset($_SESSION['userId']) && isset($_POST['book_flight'])) {   
    $flight_id = $_POST['flight_id'];
    $price = $_POST['price'];
    $passengers = $_POST['passengers'];
    $type = $_POST['type'];
    $ret_date = $_POST['ret_date'];
}?>    
<head>
    <!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<main>
    <div class="container mb-5">
    <div class="col-md-12 main-col">
        <h1 class="text-center text-secondary">PASSENGER DETAILS</h1>  
        <form action="includes/pass_detail.inc.php" class="needs-validation mt-4" method="POST">

            <input type="hidden" name="type" value=<?php echo $type; ?>>   
            <input type="hidden" name="ret_date" value=<?php echo $ret_date; ?>> 
            <input type="hidden" name="passengers" value=<?php echo $passengers; ?>>  
            <input type="hidden" name="price" value=<?php echo $price; ?>>   
            <input type="hidden" name="flight_id" value=<?php echo $flight_id; ?>>  
            
            <?php for($i=1;$i<=$passengers;$i++) {
            echo'            
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
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 position-relative">
                            <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                <label class="mb-1" for="firstname'.$i.'">First Name</label>
                                <input type="text" name="firstname[]" id="firstname'.$i.'" class="form-control" placeholder="Enter Your First Name" required>
                            </div>
                        </div>  
                        <div class="col-md-6 col-lg-4 position-relative">
                            <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                <label class="mb-1" for="midname'.$i.'">Middle Name</label>
                                <input type="text" name="midname[]" id="midname'.$i.'" class="form-control" placeholder="Enter Your Middle Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 position-relative">
                            <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                <label class="mb-1" for="lastname'.$i.'">Lastname</label>
                                <input type="text" name="lastname[]" id="lastname'.$i.'" class="form-control" placeholder="Enter Your Last Name" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4 position-relative">
                            <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                <label class="mb-1" for="mobile'.$i.'"><i class="bi bi-telephone"></i> Mobile No.</label>
                                <input type="number" name="mobile[]" min="0" id="mobile'.$i.'" class="form-control" placeholder="Enter Your Mobile No." required>
                            </div>
                        </div>
                                                
                        <div class="col-lg-4">
                            <div class="form-border-transparent form-fs-lg bg-light rounded-3 h-100 p-3">
                                <label class="mb-1"><i class="bi bi-calendar me-2"></i>Date of Birth</label>
                                <input type="date" name="date[]" class="form-control" id="datepicker" placeholder="Select Date" required="">
                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                        <script>
                            function validateForm() {
                            var departureDate = document.getElementById("datepicker").value;
                            if (departureDate == "") {
                                alert("Please enter Date of Birth");
                                return false;
                            }
                        }
                            flatpickr("#datepicker", {
                                maxDate: "today",
                            });
                        </script>'; }  ?> 
                        <div class="col-12 text-end pt-0">
                            <button type="submit" value="Payment" name="pass_but" class="btn btn-primary mb-n4">Continue to Payment <i class="bi bi-arrow-right ps-3"></i></button>
                        </div>
                    </div>
                </div>
            </div>                               
        </form>              
    </div>
    </div>
</main>

