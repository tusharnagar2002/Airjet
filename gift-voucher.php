<?php 
require 'helpers/helper.php'; 
subview('header.php'); 
require 'helpers/init_conn_db.php';
?>
<main >
  <div class="container mb-5">
  <h1 class="text-center text-secondary">Create Gift Voucher</h1>
    <div class="container col-md-5 main-col ms-auto">  
      <form action="includes/pass_detail.inc.php" class="needs-validation mt-4" method="POST">'            
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
                <div class="col-md-6 col-lg-12 position-relative">
                  <div>
                    <label class="mb-1">Recepient's Full Name</label>
                    <input type="text" name="recepient_name" id="recepient_name" class="form-control" placeholder="Enter Name" required>
                  </div>
                </div>  
                <div class="col-md-6 col-lg-12 position-relative">
                  <div>
                    <label class="mb-1">Recepient's E-Mail Address</label>
                    <input type="email" name="recepient_email" id="recepient_email" class="form-control" placeholder="Enter E-Mail Address" required>
                    <div id="recipient_email_error" class="text-danger"></div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-12 position-relative">
                  <div>
                    <label class="mb-1">Confirm Recepient's E-Mail Address</label>
                    <input type="email" name="confirm_recepient_email" id="confirm_recepient_email" class="form-control" placeholder="Confirm E-Mail Address" required>
                    <div id="confirm_recipient_email_error" class="text-danger"></div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-12 position-relative">
                  <div>
                    <label class="mb-1">Gift Voucher Amount</label>
                    <input type="text" name="gift_voucher_amount" id="gift_voucher_amount" class="form-control" placeholder="₹ Enter Amount" required>
                  </div>
                </div>
                <script>
                const recipientEmailInput = document.getElementById('recipient_email');
                const confirmRecipientEmailInput = document.getElementById('confirm_recipient_email');
                const recipientEmailError = document.getElementById('recipient_email_error');
                const confirmRecipientEmailError = document.getElementById('confirm_recipient_email_error');

                function validateEmail() {
                  const recipientEmail = recipientEmailInput.value.trim();
                  const confirmRecipientEmail = confirmRecipientEmailInput.value.trim();

                  if (recipientEmail === '') {
                    recipientEmailError.textContent = 'Recipient email is required';
                    return false;
                  } else if (!/\S+@\S+\.\S+/.test(recipientEmail)) {
                    recipientEmailError.textContent = 'Recipient email is not valid';
                    return false;
                  } else {
                    recipientEmailError.textContent = '';
                  }

                  if (confirmRecipientEmail === '') {
                    confirmRecipientEmailError.textContent = 'Confirm recipient email is required';
                    return false;
                  } else if (!/\S+@\S+\.\S+/.test(confirmRecipientEmail)) {
                    confirmRecipientEmailError.textContent = 'Confirm recipient email is not valid';
                    return false;
                  } else if (recipientEmail !== confirmRecipientEmail) {
                    confirmRecipientEmailError.textContent = 'Confirm recipient email does not match';
                    return false;
                  } else {
                    confirmRecipientEmailError.textContent = '';
                  }

                  return true;
                }

                recipientEmailInput.addEventListener('input', validateEmail);
                confirmRecipientEmailInput.addEventListener('input', validateEmail);
                </script>
                <div class="col-12 text-end pt-0">
                  <button type="submit" value="Payment" name="pass_but" class="btn btn-primary mb-n4">Continue to Payment <i class="bi bi-arrow-right ps-3"></i></button>
                </div>
              </div>
            </div>
          </div>            
        </div>                               
      </form>              
    </div>
  </div>
</main>