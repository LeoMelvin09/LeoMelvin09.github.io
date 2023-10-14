<?php
require 'conn.php';


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$checkin=$_POST['checkin'];
$time=$_POST['time'];
$service=$_POST['service'];



$sql="INSERT INTO customer(name, email, phone, address1, address2, checkin, time, service) VALUES 
('$name', '$email', '$phone', '$address1', '$address2', '$checkin', '$time', '$service')";
$conn->query($sql);
$conn->error;
?>
			<script>
			alert('Your Appointment has been booked');
			window.location='index.html';
			</script>
			
