<?php
	session_start(); //add session here to check that employee is logged in
	include("../models/item.php");
	if(isset($_REQUEST['item_name'])) {
		
		$obj = new item();

		$item_name = $_REQUEST['item_name'];
	    $qty = $_REQUEST['quantity'];
	    $price = $_REQUEST['price'];
		$reorder_qty = $_REQUEST['reorder_qty'];
	    $desc = $_REQUEST['description'];
		if($obj->add_item($item_name, $qty, $price, $reorder_qty,$desc)){
			// echo"success";
			$_SESSION['reply'] = "Successfully added $item_name!";
			$_SESSION['rtype'] = "success";
		} else{
			// echo"error";
			$_SESSION['reply'] = "Oops...an error occured.";
			$_SESSION['rtype'] = "error";
		}
		//insert into notification table. create notification obj, add notification, 
		header("location: ../../public/template/addproduct.php");
		
	}


	
?>
	