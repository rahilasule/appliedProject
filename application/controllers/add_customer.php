<?php
	session_start(); //add session here to check that employee is logged in
	include("../models/customer.php");
	include("../models/notification.php");
	if(isset($_REQUEST['fname'])) {
		
		$obj = new customer();

		$fname = $_REQUEST['fname'];
	    $lname = $_REQUEST['lname'];
	    $email = $_REQUEST['email'];
		$tel = $_REQUEST['phone_number'];
		if($obj->add_customer($fname, $lname, $tel, $email)){
			// echo"success";
			$_SESSION['reply'] = "Successfully added $fname $lname!";
			$_SESSION['rtype'] = "success";

			$msg=$_SESSION['reply'];
			$date=date("Y-m-d");
			$time = date("h:i:s");

			$obj1 = new notification();
			$obj1->add_notification($msg, $time, $date);

		} else{
			// echo"error";
			$_SESSION['reply'] = "Oops...an error occured.";
			$_SESSION['rtype'] = "error";
		}

		header("location: ../../public/template/addcustomer.php");
		
	}


	
?>
	
