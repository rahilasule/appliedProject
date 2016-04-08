<?php
/**
 * author: Rahila Sule
 * description: A class to manage all customer functions.
 * date: 23-02-2016
 */

include_once("adb.php");
class customer extends adb
{
	//constructor for customer class
	function customer()
	{

	}

	//adds customer to database
	function add_customer($fname, $lname, $phone_number,$email)
	{
		$str_query="INSERT INTO customer SET fname='$fname', lname='$lname', phone_number='$phone_number', email='$email'";
		return $this->query($str_query);
	}

	//edits customer details in database
	function edit_customer($cid, $fname, $lname, $phone_number,$email)
	{
		$str_query="UPDATE customer SET fname='$fname', lname='$lname', phone_number='$phone_number', email='$email'
			WHERE cid=$cid";
		return $this->query($str_query);
	}

	//search database records for a customer record based on either firstname or lastname
	function search_customer($str)
	{
		$str_query="SELECT * FROM customer WHERE fname LIKE '%$str%' OR lname LIKE '%$str%'";
		return $this->query($str_query);

	}

	//allows view of a single customer
	function view_customer($cid)
	{
		$str_query="SELECT * FROM customer WHERE cid=$cid";
		return $this->query($str_query);
	}

	//allows view of all customer records
	function view_all_customers()
	{
		$str_query="SELECT * FROM customer";
		return $this->query($str_query);
	}


	
}
?>