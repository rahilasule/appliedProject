
<?php
	include("../application/models/customer.php");

	$obj = new customer();
	$obj->view_all_customers();
	echo "<table>";
	echo "<tr><td>First name</td><td>Last name</td><td>Email</td><td>Phone number</td></tr>";
	while($row=$obj->fetch()){
		echo "<tr><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['email']}</td><td>{$row['phone_number']}</td></tr>";
	
	}
	echo "</table>";
?>
