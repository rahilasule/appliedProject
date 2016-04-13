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
		 $this->query($str_query);
		  $str_query="select last_insert_id() last_id";
		 $this->query($str_query);
		 $data = $this->fetch();
		 //var_dump($data);
		 $str_query="INSERT INTO payment SET sale_id = {$data['last_id']}, 
		 			amount_paid=(SELECT sale.amount_paid FROM sale WHERE sale_id={$data['last_id']}), 
		 			amount_owed=(SELECT sale.sale_balance FROM sale 
		 			WHERE sale.sale_id={$data['last_id']}), date=DATE(CURDATE())";
		return $this->query($str_query);

	}

	function get_last_id()
	{

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
		$str_query="SELECT sale.sale_id, sale.date, customer.fname AS cfname, customer.lname AS clname, employee.fname AS efname,
		 employee.lname AS elname, sale.sale_total, sale.amount_paid, sale.sale_balance FROM sale
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

	//sets sale status
	function set_sale_status($saleid){
		$str_query="UPDATE sale SET status='confirmed' WHERE sale_id = $sale_id";
		return $this->query($str_query);
	}

	//adds an item to a sale
	function add_item_to_sale($sale_id, $item_id, $qty, $price){
		$str_query="INSERT INTO item_sale SET sale_id =$sale_id, item_id=$item_id, quantity=$qty, unit_price='$price', subtotal=quantity * unit_price";
		var_dump($str_query);
		return $this->query($str_query);
	}

	//gets all items in a sale
	function get_sale_items($sale_id){
		$str_query="SELECT * FROM item_sale WHERE sale_id = $sale_id";
		return $this->query($str_query);
	}

	//view receivables
	function view_receivables(){
		$str_query="SELECT payment.sale_id, concat(customer.fname,' ',customer.lname) AS customerName, payment.amount_owed, payment.date 
			FROM payment INNER JOIN sale ON payment.sale_id=sale.sale_id INNER JOIN customer ON sale.customer_id=customer.cid";
		return $this->query($str_query);
	}

	//add to receivable
	function add_receivable($sid, $date, $customer_id, $sale_balance, $sale_total)
	{
		$str_query="INSERT INTO payment SET sale_id = $sid, 
		 			amount_paid=(SELECT sale.amount_paid FROM sale WHERE sale_id={$data['last_id']}), 
		 			amount_owed=(SELECT sale.sale_balance FROM sale 
		 			WHERE sale.sale_id={$data['last_id']}), date=DATE(CURDATE())";
		return $this->query($str_query);
	}

}
?>