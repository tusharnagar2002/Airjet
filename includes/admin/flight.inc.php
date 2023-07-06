<?php
session_start();
if(isset($_POST['flight_but']) and isset($_SESSION['adminId'])) {
    require '../../helpers/init_conn_db.php';
    $departure_date = $_POST['departure_date'];
    $departure_time = $_POST['departure_time'];
    $arrival_date = $_POST['arrival_date'];
    $arrival_time = $_POST['arrival_time'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $price = $_POST['price'];
    $fleet_name = $_POST['fleet_name'];
    $dura = $_POST['dura'];

    if($departure===$arrival) {
      header('Location: ../../admin/flight.php?error=same');
      exit();
    }
    $source_datetime = strtotime($departure_date . ' ' . $departure_time);
    $dest_datetime = strtotime($arrival_date . ' ' . $arrival_time);
    $flag = ($dest_datetime > $source_datetime);
    if($flag == false) {
      header('Location: ../../admin/flight.php?error=destless');
      exit();
    } else {
      $sql = "SELECT * FROM Fleet WHERE fleet_id =?";
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt,$sql);
      mysqli_stmt_bind_param($stmt,'i',$fleet_name);            
      mysqli_stmt_execute($stmt);      
      $result = mysqli_stmt_get_result($stmt);    
      mysqli_stmt_close($stmt);
      if($row = mysqli_fetch_assoc($result)) {
        $seats = $row['seats'];
        $fleet_name = $row['fleet_name'];
        $sql = "INSERT INTO Flight(admin_id,departure,departure_date,departure_time,arrival,arrival_date,arrival_time,fleet,seats,duration,price,status) VALUES (?,?,?,?,?,?,?,?,?,?,?,'')";
          
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)) {
          header('Location: ../../admin/flight.php?error=sqlerr1');
          exit();          
        } else {      
          $admin_id = $_SESSION['adminId'];  
          mysqli_stmt_bind_param($stmt, 'isssssssisi', $admin_id, $departure, $departure_date, $departure_time, $arrival, $arrival_date, $arrival_time, $fleet_name, $seats, $dura, $price);            
          mysqli_stmt_execute($stmt); 
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header('Location: ../../admin/flight.php?flight=success');
        exit();
      } else {
        header('Location: ../../admin/flight.php?error=sqlerr');
        exit();
      }
    }
  } elseif (isset($_POST['grf_but']) and isset($_SESSION['adminId'])) {
    require '../../helpers/init_conn_db.php';
// Randomly select departure and arrival cities from database
$departure_query = "SELECT city FROM cities ORDER BY RAND() LIMIT 1";
$arrival_query = "SELECT city FROM cities WHERE city != (SELECT city FROM cities ORDER BY RAND() LIMIT 1) ORDER BY RAND() LIMIT 1";
$departure_result = mysqli_query($conn, $departure_query);
$arrival_result = mysqli_query($conn, $arrival_query);
$departure = mysqli_fetch_array($departure_result)['city'];
$arrival = mysqli_fetch_array($arrival_result)['city'];

// Generate random departure and arrival dates
$departure_date = date('Y-m-d', strtotime('+' . rand(0, 90) . ' days'));
$arrival_date = date('Y-m-d', strtotime('+' . rand(0, 90) . ' days'));

// Generate random departure and arrival times
$departure_time = date('H:i', round(rand(strtotime('00:00:00'), strtotime('23:59:59'))/300)*300);
$arrival_time = date('H:i', round(rand(strtotime('00:00:00'), strtotime('23:59:59'))/300)*300);


// Generate random flight duration in minutes
$duration_minutes = rand(60, 300);

// Calculate duration in hours and minutes
$duration_hours = floor($duration_minutes / 60);
$duration_minutes = $duration_minutes % 60;

// Calculate arrival date and time based on departure date, time and duration
$arrival_datetime = strtotime($departure_date . ' ' . $departure_time) + ($duration_hours * 3600) + ($duration_minutes * 60);
$arrival_date = date('Y-m-d', $arrival_datetime);
$arrival_time = date('H:i:s', $arrival_datetime);

// Generate random price
$price = rand(999, 9999);

// Randomly select fleet name from database
$fleet_query = "SELECT fleet_name, seats FROM fleet ORDER BY RAND() LIMIT 1";
$fleet_result = mysqli_query($conn, $fleet_query);
$fleet_data = mysqli_fetch_assoc($fleet_result);
$fleet_name = $fleet_data['fleet_name'];
$seats = $fleet_data['seats'];

// Insert flight schedule into database
$admin_id = $_SESSION['adminId'];
$insert_query = "INSERT INTO flight (admin_id, departure, departure_date, departure_time, arrival, arrival_date, arrival_time, duration, price, fleet, seats) 
                  VALUES ('$admin_id','$departure', '$departure_date', '$departure_time', '$arrival', '$arrival_date', '$arrival_time', '$duration_hours"."h "."$duration_minutes"."m', '$price', '$fleet_name', '$seats')";

if (!mysqli_query($conn, $insert_query)) {
  header('Location: ../../admin/flight.php?error=sqlerr');
        exit();
} else {
        mysqli_close($conn);
        header('Location: ../../admin/flight.php?flight=success');
        exit();
}

} else {
    header('Location: ../../index.php');
    exit();
}

