<?php 
include_once 'helpers/helper.php';
subview('header.php'); 
if(isset($_SESSION['userId'])) {
  require 'helpers/init_conn_db.php';  
  // Get user ID from session
  $user_id = $_SESSION['userId'];
  
  // Prepare SQL statement with parameters
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
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card bg-light">
              <div class="card-header bg-dark border-bottom-0">
                <center>
                <h3>E-Ticket</h3>
                </center>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <p class="fw-bold text-muted mb-1">Passenger Name:</p>
                    <p class="mb-2"><?= $row['f_name'] ?> <?= $row['m_name'] ?> <?= $row['l_name'] ?></p>
                    <p class="fw-bold text-muted mb-1">Flight Number:</p>
                    <p class="mb-2"><?= $row['flight_id'] ?></p>
                    <p class="fw-bold text-muted mb-1">Departure:</p>
                    <p class="mb-2"><?= $row['departure'] ?></p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold text-muted mb-1">Departure Date:</p>
                    <p class="mb-2"><?= date('F j, Y', strtotime($row['departure_date'])) ?></p>
                    <p class="fw-bold text-muted mb-1">Departure Time:</p>
                    <p class="mb-2"><?= date('h:i A', strtotime($row['departure_time'])) ?></p>
                    <p class="fw-bold text-muted mb-1">Seat Number:</p>
                    <p class="mb-2"><?= $row['seat_no'] ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-6">
                    <p class="fw-bold text-muted mb-1">Arrival:</p>
                    <p class="mb-2"><?= $row['arrival'] ?></p>
                    <p class="fw-bold text-muted mb-1">Arrival Date:</p>
                    <p class="mb-2"><?= date('F j, Y', strtotime($row['departure_date'])) ?></p>
                  </div>
                  <div class="col-6">
                    <p class="fw-bold text-muted mb-1">Arrival Time:</p>
                    <p class="mb-2"><?= date('h:i A', strtotime($row['arrival_time'])) ?></p>
                    <p class="fw-bold text-muted mb-1">Class:</p>
                    <p class="mb-2"><?= $row['class'] ?></p>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center">
              <div class="d-flex justify-content-center">
                <button class="btn btn-primary mb-0" onclick="printTicket()"><i class="bi bi-printer me-2"></i>Print E-Ticket</a>
              </div>
              <script>
              function printTicket() {
                var ticketSection = document.getElementById("ticket-section");
                var popupWin = window.open('', '_blank', 'width=800,height=600');
                popupWin.document.open();
                popupWin.document.write('<html><head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head><body onload="window.print()">' + ticketSection.innerHTML + '</html>');
                popupWin.document.close();
              }
              </script>
              <div class="container ticket-container" id="ticket-section" hidden>
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <img src="Bluelogo.png" alt="Airline Logo" class="img-fluid">
                        <h2 class="mt-3">E-Ticket Confirmation</h2>
                        <hr class="my-4">
                    </div>
                    <div class="col-6 border-end">
                        <h3 class="mb-3">Flight Details</h3>
                        <p><strong>Flight Number:</strong> <?= $row['flight_id'] ?></p>
                        <p><strong>Departure Airport:</strong> <?= $row['departure'] ?></p>
                        <p><strong>Departure Date:</strong><?= date('F j, Y', strtotime($row['departure_date'])) ?></p>
                        <p><strong>Departure Time:</strong><?= date('h:i A', strtotime($row['departure_time'])) ?></p>
                        <p><strong>Arrival Airport:</strong> <?= $row['arrival'] ?></p>
                        <p><strong>Arrival Date:</strong> <?= date('F j, Y', strtotime($row['arrival_date'])) ?></p>
                        <p><strong>Arrival Time:</strong> <?= date('h:i A', strtotime($row['arrival_time'])) ?></p>
                        <p><strong>Class:</strong> Economy</p>
                    </div>
                    <div class="col-6">
                        <h3 class="mb-3">Passenger Information</h3>
                        <p><strong>Name: </strong> <?= $row['f_name'] ?> <?= $row['m_name'] ?> <?= $row['l_name'] ?></p>
                        <p><strong>Date of Birth: </strong><?= date('F j, Y', strtotime($row['dob'])) ?></p>
                        <p><strong>Seat Number: </strong> 12A</p>
                        <p><strong>Boarding Time: </strong> <?= date('h:i A', strtotime('-1 hour', strtotime($row['departure_time']))) ?></p>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row">
                    <div class="col-6 border-end">
                        <h3 class="mb-3">Pricing Information</h3>
                        <p><strong>Taxable Amount:</strong> ₹ <?= round($row['cost'] / 1.05, 2) ?></p>
                        <p><strong>Tax/Charges:</strong> ₹ <?= round($row['cost'] * 0.05 / 1.05, 2) ?></p>
                        <p><strong>Total Price:</strong> ₹ <?= $row['cost'] ?></p>
                    </div>
                    <div class="col-6">
                        <h3 class="mb-3">Payment</h3>
                        <p><strong>Payment Method:</strong> <?= [$c=array('Rupay','Visa','Mastercard','American Express'), $d=array('Debit Card','Credit Card')][rand(0,1)][rand(0,3)] . ' ' . $d[rand(0,1)] ?></p>
                        <?php
                        $card_no = $row['card_no'];
                        $masked_card_no = substr($card_no, 0, 4) . ' ' . chunk_split(str_repeat('x', strlen($card_no) - 8), 4, ' ') . substr($card_no, -4);
                        ?>
                        <p><strong>Credit Card:</strong><?= $masked_card_no ?></p>

                        <p><strong>Expiry Date:</strong><?= $row['expire_date'] ?></p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br><hr><br>
      <?php
    }
    // Free the result set
    mysqli_free_result($result);
  } else {
    // Display a message if no tickets were found
    ?>
    <center>
      <p>No tickets found</p>
      <a href="index.php" class="btn btn-primary mb-n4">Book Flights <i class="bi bi-arrow-right ps-3"></i></a>
    </center>
    <?php
  }
}
