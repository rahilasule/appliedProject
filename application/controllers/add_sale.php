<?php
	session_start();//add session here to check that employee is logged in
	include("../models/sale.php");
	include_once("../models/notification.php");
	if (isset($_REQUEST['cid'])) {
		$obj = new sale();

	    $cid = $_REQUEST['cid'];
	    $eid = $_REQUEST['eid'];
		$total = $_REQUEST['total'];
		$paid = $_REQUEST['paid'];
		if($obj->add_sale($cid, $eid, $total, $paid)){
			
			$_SESSION['reply'] = "Successfully added a new sale!";
			$_SESSION['rtype'] = "success";

			$msg=$_SESSION['reply'];
			$date=date("Y-m-d");
			$time = date("h:i:s");

			$obj1 = new notification();
			$obj1->add_notification($msg, $time, $date);
		} else{
			$_SESSION['reply'] = "Oops...an error occured.";
			$_SESSION['rtype'] = "error";
		}

		//header("location:viewAfterAdd.php");
		
	}	
?>
<?php /*
	<!-- <html> -->
<!-- 	<head>
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
							// include_once("../application/models/employee.php");
							// $srow = new employee();
							
							// $srow->get_employees();
							// while($row=$srow->fetch()){
							// 	echo "<option value='{$row['eid']}'>{$row['fname']} {$row['lname']}</option>";
								
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
</html> -->
*/ ?>