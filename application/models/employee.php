<?php
/**
 * author: Rahila Sule
 * description: A class to manage all employee functions.
 * date: 23-02-2016
 */

include_once("adb.php");
class employee extends adb
{
	//constructor for employee class
	function employee()
	{

	}

	//adds employee to database
	function add_employee($fname, $lname, $phone_number)
	{
		$str_query="INSERT INTO employee SET fname='$fname', lname='$lname', phone_number=$phone_number";
		return $this->query($str_query);
	}

	//edits employee details in database
	function edit_employee($eid, $fname, $lname, $phone_number)
	{
		$str_query="UPDATE employee SET fname='$fname', lname='$lname', phone_number=$phone_number
			WHERE employee_id=$eid";
		return $this->query($str_query);
	}

	//search database records for a employee record based on either firstname or lastname
	function search_employee($str)
	{
		$str_query="SELECT * FROM employee WHERE fname LIKE '%$str%' OR lname LIKE '%$str%'";
		return $this->query($str_query);

	}

	//gets details of an employee
	function get_employees()
	{
		$str_query="SELECT * FROM employee";
		return $this->query($str_query);
	}

	
}
?>