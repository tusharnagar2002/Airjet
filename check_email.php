<?php
include('helpers/init_conn_db.php'); // Include your database connection file

if(isset($_POST['email'])) {
  $email = $_POST['email'];

  // Query the database to check if the email exists
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0) {
    // If email exists, return 'exists' to the AJAX request
    echo 'exists';
  }
}

mysqli_close($conn); // Close your database connection
?>
