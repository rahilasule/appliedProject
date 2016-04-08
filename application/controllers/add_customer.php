<?php
	session_start(); //add session here to check that employee is logged in
	include("../models/customer.php");
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
		} else{
			// echo"error";
			$_SESSION['reply'] = "Oops...an error occured.";
			$_SESSION['rtype'] = "error";
		}
		//insert into notification table. create notification obj, add notification, 
		header("location: ../../public/template/addcustomer.php");
		
	}


	
?>
	
