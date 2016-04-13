<?php
	session_start();//add session here to check that employee is logged in
	include("../models/sale.php");
	include_once("../models/notification.php");
	if (isset($_REQUEST['pid'])) {
		$obj = new sale();

	    $pid = $_REQUEST['pid'];
	    $qty = $_REQUEST['qty'];
		$price = $_REQUEST['price'];
		$subtotal = $_REQUEST['subtotal'];
		

		if($obj->add_item_to_sale($sale_id,$pid, $qty, $price)){
			
			$_SESSION['reply'] = "Successfully added a new product to sale!";
			$_SESSION['rtype'] = "success";

			$msg=$_SESSION['reply'];
			$date=date("Y-m-d");
			$time = date("h:i:s");

			$obj1 = new notification();
			$obj1->add_notification($msg, $time, $date);
		} else{
			$_SESSION['reply'] = "Oops...an error occured.";
			$_SESSION['rtype'] = "error";
		}

		//header("location:viewAfterAdd.php");
		
	}	
?>