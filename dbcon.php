<?php
// Enter your Host, username, password, database below.
$con = mysqli_connect("192.168.1.3","root","welcome","paypal");
if(!$con){
	die("Connection Error !!".mysqli_connect_error());
}
 ?>