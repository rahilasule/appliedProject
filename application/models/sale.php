<?php
/**
 * author: Rahila Sule
 * description: A class to manage all sale functions.
 * date: 23-02-2016
 */

include_once("adb.php");
class sale extends adb
{
	//constructor for sale class
	function sale()
	{

	}

	//adds sale record to database
	function add_sale($cid, $eid, $total, $paid)
	{
		$str_query="INSERT INTO sale SET date=DATE(CURDATE()), customer_id=$cid, employee_id=$eid,
		 sale_total=$total, amount_paid= $paid, sale_balance = sale_total - amount_paid, due_date=DATE_ADD(date, INTERVAL 14 DAY)";
		return $this->query($str_query);
	}

	//edits sale transaction in database
	function edit_sale($sid, $date, $cid, $eid, $total, $paid, $due_date)
	{
		$str_query="UPDATE sale SET date=$date, customer_id=$cid, employee_id=$eid,
		 sale_total=$total, amount_paid= $paid, sale_balance = sale_total - amount_paid, due_date=$due_date
			WHERE sale_id=$sid";
		return $this->query($str_query);
	}

	//allows view of a sale transaction
	function view_sale($sid)
	{
		$str_query="SELECT * FROM sale WHERE sale_id=$sid";
		return $this->query($str_query);
	}

	//allows view of all sale records
	function view_all_sales()
	{
		$str_query="SELECT sale.sale_id, sale.date, customer.fname, customer.lname, employee.fname,
		 employee.lname, sale.sale_total, sale.amount_paid, sale.sale_balance FROM sale
		 JOIN customer ON sale.customer_id=customer.cid
		 JOIN employee ON sale.employee_id=employee.eid";
		return $this->query($str_query);
	}

	//search databse records for a sale record
	function search_sale()
	{

	}

	//gets last sale transaction record
	function get_last_sale()
	{
		$str_query = "SELECT * FROM sale
				ORDER BY sale_id DESC LIMIT 1";

		if (!$this->query($str_query)) {
			return false;
		} else {
			return $this->fetch();
		}
	}

	//add to receivable
	function add_receivable($sale_id, $date, $customer_id, $sale_balance, $sale_total)
	{
		$str_query="SELECT date, customer.fname, customer.lname, sale_balance
			FROM sale JOIN ON sale.customer_id=customer.cid";
		return $this->query($str_query);
	}

}
?>