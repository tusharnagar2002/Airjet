<?php include_once 'C:\xampp\htdocs\ofbms\helpers\helper.php'; ?>

<?php subview('header.php'); ?>
<link rel="stylesheet" href="..\assets\css\login.css">
<style>
@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
}
h1{
   font-family :'product sans' !important;
	font-size:48px !important;
	margin-top:20px;
	text-align:center;
}
body {
  background:transparent;  /* fallback for old browsers */
}
.login-form {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    border-radius: 0px;
}
</style>
<div class="flex-container">
  <div class="login-form mt-5" style="height: 350px;">
    <h1 class="text-center text-secondary mb-4">Reset Password</h1>
    <form method="POST" action="includes/reset-request.inc.php">
      <div class="form-group">
        <label for="email" class="form-label">Enter your registered email-id</label>
        <div class="input-group">
          <input type="email" class="form-control" id="email" name="email" required>
          <button type="button" class="btn btn-primary" id="get-otp-btn">Get OTP</button>
        </div>
      </div>
      <div class="form-group" id="otp-input-group" style="display: none;">
        <label for="otp" class="form-label">Enter OTP received on your email</label>
        <div class="input-group">
          <input type="text" class="form-control" id="otp" name="otp" required>
          <button type="button" class="btn btn-primary" id="submit-otp-btn">Submit OTP</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  const getOtpBtn = document.querySelector('#get-otp-btn');
  const otpInputGroup = document.querySelector('#otp-input-group');
  const submitOtpBtn = document.querySelector('#submit-otp-btn');
  
  getOtpBtn.addEventListener('click', () => {
    // Send AJAX request to server to send OTP to the entered email
    // Once the OTP is received on email, show the OTP input field
    otpInputGroup.style.display = 'block';
  });
  
  submitOtpBtn.addEventListener('click', () => {
    // Send AJAX request to server to verify the entered OTP
    // If the OTP is correct, redirect to create-new-pwd.php
    window.location.href = 'create-new-pwd.php';
  });
</script>

<?php
if(isset($_GET['err']) || isset($_GET['mail'])) {
    if($_GET['err'] === 'invalidemail') {
        echo '<script>alert("Invalid email");</script>';
    } else if($_GET['err'] === 'sqlerr') {
        echo '<script>alert("An error occured");</script>';        
    } else if($_GET['mail'] === 'success') {
        echo '<script>alert("Email has been succesfully sent to you");</script>';        
    } else if($_GET['err'] === 'mailerr') {
        echo '<script>alert("An error occured");</script>';        
    }                    
} 
?>
<?php subview('footer.php'); ?> 

