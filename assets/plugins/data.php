<?php
if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $date = trim($_POST['date']);
    $message = trim($_POST['message']);


    $myMail = "reteshthapakaji@gmail.com.com";
    $header = "From: " . $email;
    $message2 = "You have received a  appointment  from ". $name .".\n\n".$message;
    mail($myMail, $subject, $message2, $header);
    echo '<script>alert("Appointment requesst successfully ! ")</script>';
    echo '<script>window.location.href="appointment.php";</script>';


}
?>