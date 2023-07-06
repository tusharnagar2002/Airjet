<?php
include('helpers/init_conn_db.php'); // Include your database connection file

if(isset($_POST['username'])) {
  $username = $_POST['username'];

  // Query the database to check if the username exists
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0) {
    // If username exists, return 'exists' to the AJAX request
    echo 'exists';
  }
}

mysqli_close($conn); // Close your database connection
?>

