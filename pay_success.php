<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php'); ?>
<?php if(isset($_SESSION['userId']))    ?> 
<main>
<div class="row"> 
    <div class="col-md-10 mx-auto text-center"> 
        <h1 class="text-light display-10 pt-sm-5 my-5">Payment Successful</h1>
        <img src="https://res.cloudinary.com/dmnazxdav/image/upload/v1599736321/tick_hhudfj.svg" alt="Payment Successful" height="100" width="100"/>
        <h3 class="container-welcome">Thank you for choosing us</h3>
        <p class="container-text">
          An automated payment receipt will be sent to your registered email.
        </p>
    </div>
</div>
<center>
<a href="ticket.php" class="btn btn-primary">View Ticket</a>
</center>
</main>
