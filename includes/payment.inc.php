<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../phpmailer/src/exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
if(isset($_POST['pay_but']) && isset($_SESSION['userId'])) {
    require '../helpers/init_conn_db.php';  
    $flight_id = $_SESSION['flight_id'];
    $price = $_SESSION['price'];
    $pass_id = $_SESSION['pass_id'];
    $type = $_SESSION['type'];
    $ret_date = $_SESSION['ret_date'];
    $card_no = $_POST['cc-number'];
    $expiry = $_POST['cc-exp'];
    $new_seat = rand(1, 100);
    $class = "economy";
    $stmt = mysqli_stmt_init($conn);
    $sql = 'INSERT INTO Ticket (flight_id, seat_no, cost, class, user_id) VALUES (?,?,?,?,?)';            
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ../payment.php?error=sqlerror');
        exit();            
    } else {
        $flag = false; // Initialize $flag before using it
        mysqli_stmt_bind_param($stmt, 'isisi', $flight_id, $new_seat, $price, $class, $_SESSION['userId']);            
        mysqli_stmt_execute($stmt);         
        if(mysqli_stmt_affected_rows($stmt) > 0) {
            $flag = true;
            $payment_sql = 'INSERT INTO payment (card_no, user_id, flight_id, expire_date, amount) VALUES (?,?,?,?,?)';
            if(!mysqli_stmt_prepare($stmt, $payment_sql)) {
                header('Location: ../payment.php?error=sqlerror');
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, 'siisi', $card_no, $_SESSION['userId'], $flight_id, $expiry, $price);
                mysqli_stmt_execute($stmt);
            }
        }
    } 
    
    if($flag) {
        $user_email = $_SESSION['userMail']; // assuming userEmail is set in the session

        if (empty($user_email)) {
            header('Location: ../pay_success.php?error=emailerror&message=Email%20address%20is%20empty');
            exit();
        }

        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            header('Location: ../pay_success.php?error=emailerror&message=Invalid%20email%20format');
            exit();
        }
        // Send email to the user with ticket details
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'projectairjet@gmail.com';
        $mail->Password = 'oiluqesbdlseftfn';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('projectairjet@gmail.com', 'Team Airjet');
        $mail->addAddress($user_email);
        $mail->Subject = 'Flight Ticket Details';
        $mail->Body = "Dear User,\n\nThank you for booking your flight ticket with us. Here are the details of your ticket:\n\nFlight ID: $flight_id\nSeat Number: $new_seat\nCost: $price\nClass: Economy\n\nThank you for choosing our services.\n\nRegards,\nTeam, Airjet";
        if(!$mail->send()) {
            // Email sending failed
            $error_message = $mail->ErrorInfo;
            header("Location: ../pay_success.php?error=emailerror&message=$error_message");
            exit();
        } else {
            // Email sent successfully
            unset($_SESSION['flight_id']);
            unset($_SESSION['pass_id']);
            unset($_SESSION['price']);    
            unset($_SESSION['type']);     
            unset($_SESSION['ret_date']);               
            header('Location: ../pay_success.php');
            exit();
        }
    } else {
        header('Location: ../payment.php?error=sqlerror');
        exit();               
    }    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);        
} else {
    header('Location: ../payment.php');
    exit();  
}
