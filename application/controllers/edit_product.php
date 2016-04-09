<?php
		session_start();
		include_once("../../application/models/item.php");
		include_once("../../application/models/notification.php");
		if(isset($_REQUEST['item_name'])){
		
		$obj = new item();
		$id=$_REQUEST['id'];
		$item_name=$_REQUEST['item_name'];
		$price=$_REQUEST['price'];
		$quantity=$_REQUEST['quantity'];
		$reorder_qty=$_REQUEST['reorder_qty'];
		$description=$_REQUEST['description'];
		if($obj->edit_item($id, $item_name, $quantity, $price, $reorder_qty,$description)){
			// echo"success";
			$_SESSION['reply'] = "Successfully updated $item_name!";
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
		header("location: ../../public/template/viewproducts.php");
	?>