
<?php
	include("../application/models/sale.php");

	$obj = new sale();
	$obj->view_all_sales();
	echo "<table>";
	echo "<tr><td>Date</td><td>Customer</td><td>Employee</td><td>Sale Total</td><td>Amount Paid</td><td>Sale Balance</td></tr>";
	while($row=$obj->fetch()){
		echo "<tr><td>{$row['date']}</td><td>{$row['fname']} {$row['lname']}</td>";
		echo "<td>{$row['fname']} {$row['lname']}</td><td>{$row['sale_total']}</td>";
		echo "<td>{$row['amount_paid']}</td><td>{$row['sale_balance']}</td></tr>";
	
	}
	echo "</table>";
?>