<?php
		session_start();
		include_once("../../application/models/customer.php");
		include_once("../../application/models/notification.php");
		if(isset($_REQUEST['fname'])){
		
		$obj = new customer();
		$id=$_REQUEST['id'];
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$tel=$_REQUEST['phone_number'];
		$email=$_REQUEST['email'];
		if($obj->edit_customer($id, $fname, $lname, $tel,$email)){
			// echo"success";
			$_SESSION['reply'] = "Successfully updated $fname $lname!";
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
		}

		//insert into notification table. create notification obj, add notification, 
		header("location: ../../public/template/viewcustomers.php");
	?>
