<?php
		session_start();
		include_once("../../application/models/customer.php");
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
		} else{
			// echo"error";
			$_SESSION['reply'] = "Oops...an error occured.";
			$_SESSION['rtype'] = "error";
		}
		}

		//insert into notification table. create notification obj, add notification, 
		header("location: ../../public/template/viewcustomers.php");
	?>
