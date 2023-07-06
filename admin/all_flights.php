<?php
session_start();
?>
<?php include_once '..\helpers\helper.php'; ?>
<?php require '..\helpers\init_conn_db.php';                      
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Panel</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () =>
		{
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
		}
		const setTheme = function (theme)
		{
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
	<link rel="shortcut icon" href="../assets/images/favicon.png">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&amp;family=Poppins:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendor/flatpickr/css/flatpickr.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="..\assets\css\style.css">
</head>
<body>

<!-- Header START -->
<header class="navbar-light header-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.php">
				<img class="light-mode-item navbar-brand-item" src="..\assets\images\Bluelogo.png" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="..\assets\images\Whitelogo.png" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Main navbar START -->
			<div class="navbar-collapse collapse" id="navbarCollapse">
				<!-- Nav main menu START -->
				<ul class="navbar-nav navbar-nav-scroll align-items-center ms-xl-auto">
					<!-- Flights -->
          <li class="nav-item">
					<a class="nav-link" href="flight.php">Add Flights</a>
					</li>
					<!-- Feedbacks -->
          <li class="nav-item">
					<a class="nav-link" href="Feedback.php">Feedbacks</a>
					</li>
					<!-- Logout -->
          <li class="nav-item">
					<a class="nav-link text-danger" href="..\includes\logout.inc.php">Logout</a>
					</li>
					<!-- Dark mode options START -->
					<li class="nav-item dropdown">
						<button class="btn btn-link text-warning p-0 mb-0" id="bd-theme"
						type="button"
						aria-expanded="false"
						data-bs-toggle="dropdown"
						data-bs-display="static">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-circle-half theme-icon-active fa-fw" viewBox="0 0 16 16">
							<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
							<use href="#"></use>
						</svg>
						</button>

						<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
									<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
										<use href="#"></use>
									</svg>Light
								</button>
							</li>
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
										<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
										<use href="#"></use>
									</svg>Dark
								</button>
							</li>
							<li>
								<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
										<use href="#"></use>
									</svg>Auto
								</button>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<?php
// Check if the 'del_flight' post variable is set and if the user is logged in as an admin
if(isset($_POST['del_flight']) and isset($_SESSION['adminId'])) {
  // Get the flight ID from the post variable
  $flight_id = $_POST['flight_id'];
  // Prepare the SQL statement to delete the flight with the specified ID
  $sql = 'DELETE FROM Flight WHERE flight_id=?';
  $stmt = mysqli_stmt_init($conn);
  // Check if the SQL statement was prepared successfully
  if(!mysqli_stmt_prepare($stmt,$sql)) {
      // If there was an error, redirect the user to the index page with an error message
      header('Location: ../index.php?error=sqlerror');
      exit();            
  } else {  
    // Bind the flight ID parameter to the prepared statement and execute the statement
    mysqli_stmt_bind_param($stmt,'i',$flight_id);
    mysqli_stmt_execute($stmt);
    // Close the statement and the database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    // Redirect the user back to the all_flights page
    // header('Location: all_flights.php');
    echo("<script>location.href = 'all_flights.php';</script>");
    exit();
  }
}
?>
<main>
  <?php if(isset($_SESSION['adminId'])) { ?>
    <div class="container">
      <h1 class="display-4 text-center text-secondary">FLIGHT LIST</h1>
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="text-center">Flight ID</th>
            <th scope="col" class="text-center">Departure</th>
            <th scope="col" class="text-center">Departure Date</th>
            <th scope="col" class="text-center">Departure Time</th>
            <th scope="col" class="text-center">Arrival</th>
            <th scope="col" class="text-center">Arrival Date</th>
            <th scope="col" class="text-center">Arrival Time</th>
            <th scope="col" class="text-center">Duration</th>
            <th scope="col" class="text-center">Fleet</th>
            <th scope="col" class="text-center">Seats</th>
            <th scope="col" class="text-center">Price</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM Flight WHERE (departure_date > CURDATE() OR (departure_date = CURDATE() AND departure_time > CURTIME())) ORDER BY departure_date ASC, departure_time ASC";
          $stmt = mysqli_stmt_init($conn);
          mysqli_stmt_prepare($stmt,$sql);                
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <tr class='text-center'>                  
			<td scope='row'>
				<a href='pass_list.php?flight_id=".$row['flight_id']."'>
				".$row['flight_id']." </a> 
			</td>
			<td><strong>".$row['departure']."</strong></td>
			<td>".date('D, j M.', strtotime($row['departure_date']))."</td>
			<td>".date('g:i A', strtotime($row['departure_time']))."</td>
			<td><strong>".$row['arrival']."</strong></td>
			<td>".date('D, j M.', strtotime($row['arrival_date']))."</td>
			<td>".date('g:i A', strtotime($row['arrival_time']))."</td>
			<td>".$row['duration']."</td>
			<td>".$row['fleet']."</td>
			<td>".$row['seats']."</td>
			<td>₹ ".$row['price']."</td>
			<td>
				<form action='all_flights.php' method='post'>
				<input name='flight_id' type='hidden' value=".$row['flight_id'].">
				<button  class='btn' type='submit' name='del_flight'>
				<i class='text-danger fa fa-trash'></i></button>
				</form>
			</td>                  
			</tr>
            ";
          }
          ?>
        </tbody>
      </table>
    </div>
  <?php } ?>
</main>
	
