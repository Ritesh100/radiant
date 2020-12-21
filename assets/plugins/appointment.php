<?php
$name = $_REQUEST['name'];
$number = $_REQUEST['number'];
$email = $_REQUEST['email'];
$date = $_REQUEST['date'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
//check input fields
if (empty($name) || empty($number) || empty($email) || empty($date) || empty($address) || empty($city) ){
    echo "please fill all the fields";
}
else {
    mail("reteshthapakaji@gmail.com", "Appointment Booking", $date, "From: $name <$email,$address,$city,$number,$date>" );

echo"<script type= 'text/javascript'>alert('Your Appointment has submitted');
window.history.log(-1);
</script>";

}
header("Location: appointment.html");
?>