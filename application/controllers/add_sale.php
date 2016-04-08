<?php
	//add session here to check that employee is logged in
	include("../application/models/sale.php");
	if (isset($_REQUEST['item_name'])) {
		$obj = new sale();

		$date = $_REQUEST['date'];
	    $item_id = $_REQUEST['item_name'];
	    $cid = $_REQUEST['customer_name'];
		$eid = $_REQUEST['eid'];
		$qty = $_REQUEST['qty'];
		if($obj->add_sale($date, $item_id, $cid, $eid, $qty)){
			echo "success";
		} else{
			echo "error";
		}

		//header("location:viewAfterAdd.php");
		
	}	
?>
	<html>
	<head>
		<title>Add Sale</title>
		<script>
			
		</script>
	</head>
	<body>
	 	<h><b>ADD SALE</b></h> <br>
		<form method="GET" action="add_sale.php">
			
				<div>Date: <input type="date" id="date" class="datepicker"  size="30" required></div>
			<br>
				<div>Item Name: <input type="text" id="item_name" required></div>
			<br>
				<div>Customer Name: <input type="text" id="customer_name" size="40" required></div>
			<br>
				<div>Employee Name: <select id="eid">
							<option value="0">--Select Employee--</option>
							<?php
							include_once("../application/models/employee.php");
							$srow = new employee();
							
							$srow->get_employees();
							while($row=$srow->fetch()){
								echo "<option value='{$row['eid']}'>{$row['fname']} {$row['lname']}</option>";
								
							}
						?>
					</select>
				</div>
			<br>
				<div>Quantity: <input type="text" id="qty" size="10" required></div>
			<br>
				<div><input type="submit" name="submit" value="ADD"></div>
		</form>
	</body>
</html>
