<?php
session_start(); //add session here to check that employee is logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>mBridge - New Customer</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/londinium-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/icons.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script type="text/javascript" src="js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="js/plugins/interface/jgrowl.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/application_blank.js"></script>

</head>

<body>

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<!-- <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Londinium"></a> -->
			<a class="sidebar-toggle"><i class="icon-plus-circle"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-notification"></i>
					<span class="label label-default">2</span>
				</a>
				<div class="popup dropdown-menu dropdown-menu-right">
					<div class="popup-header">
						<a href="#" class="pull-left"><i class="icon-spinner7"></i></a>
						<span>Notifications</span>
						<a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a>
					</div>
	                <ul class="activity">
		                <li>
		                	<i class="icon-cart-checkout text-success"></i>
		                	<div>
			                	<a href="#">Eugene</a> ordered 2 copies of <a href="#">OEM license</a>
			                	<span>14 minutes ago</span>
		                	</div>
		                </li>
		                <li>
		                	<i class="icon-heart text-danger"></i>
		                	<div>
			                	Your <a href="#">latest post</a> was liked by <a href="#">Audrey Mall</a>
			                	<span>35 minutes ago</span>
		                	</div>
		                </li>
		                <li>
		                	<i class="icon-checkmark3 text-success"></i>
		                	<div>
			                	Mail server was updated. See <a href="#">changelog</a>
			                	<span>About 2 hours ago</span>
		                	</div>
		                </li>
		                <li>
		                	<i class="icon-paragraph-justify2 text-warning"></i>
		                	<div>
			                	There are <a href="#">6 new tasks</a> waiting for you. Don't forget!
			                	<span>About 3 hours ago</span>
		                	</div>
		                </li>
	                </ul>
                </div>
			</li>

			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<span>Rahila Sule</span>
					
				</a>
			</li>
			<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
				<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">
					<span>Log Out</span>
				</a>
			</li>
			</ul>

		</ul>
	</div>
	<!-- /navbar -->


	<!-- Page container -->
 	<div class="page-container">


		<!-- Sidebar -->
		<div class="sidebar">
			<div class="sidebar-content">


				<!-- Main navigation -->
				<ul class="navigation">
					<li><a href="newsfeed.php"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li>
						<a href="viewsales.php"><span>Sales</span> <i class="icon-stats2"></i></a>
					</li>
					<li>
						<a href="viewproducts.php"><span>Products</span> <i class="icon-basket2"></i></a>
						<ul>
							<li><a href="viewproducts.php">All stock</a></li>
							<li><a href="viewproducts_instock.php">In stock</a></li>
							<li><a href="viewproducts_lowstock.php">Low stock</a></li>
							<li><a href="viewproducts_soldout.php">Sold out</a></li>
						</ul>
					</li>
					<li class="active">
						<a href="viewcustomers.php"><span>Customers</span> <i class="icon-users"></i></a>
					</li>
					<li>
						<a href="viewreceivables.php"><span>Receivables</span> <i class="icon-coin"></i></a>
					</li>
				</ul>
				<!-- /main navigation -->

			</div>
		</div>
		<!-- /sidebar -->


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header" style="margin:20px;">
				
            <h4>New Customer</h4>
			</div>
			<!-- /page header -->
			<?php 
			if(isset($_SESSION['reply'])){
			?>
			<div class="alert alert-<?php echo $_SESSION['rtype']; ?> fade in block-inner">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="icon-checkmark-circle"></i> <?php echo $_SESSION['reply']; ?> 
            </div>
            <?php
            unset($_SESSION['reply']);
            unset($_SESSION['rtype']);
        	}
        	?>

			<!-- add customer -->
			<form class="form-horizontal form-bordered" method="post" action="../../application/controllers/add_customer.php" role="form">
	            <div class="panel panel-default">
	                <div class="panel-body">

				        <div class="form-group">
				            <label class="col-sm-2 control-label">Firstname:</label>
				            <div class="col-sm-4">
				            	<input type="text" name="fname" class="form-control">
				            </div>
				        </div>

				         <div class="form-group">
				            <label class="col-sm-2 control-label">Lastname:</label>
				            <div class="col-sm-4">
				            	<input type="text" name="lname" class="form-control">
				            </div>
				        </div>
				        
				         <div class="form-group">
				            <label class="col-sm-2 control-label">Email:</label>
				            <div class="col-sm-4">
				            	<input type="text" name="email" class="form-control">
				            </div>
				        </div>

				         <div class="form-group">
				            <label class="col-sm-2 control-label">Phone number:</label>
				            <div class="col-sm-4">
				            	<input type="text" name="phone_number" class="form-control">
				            </div>
				        </div>

				        <div class="form-group">
				            <label class="col-sm-2 control-label"></label>
				            <div class="col-sm-4">
				            	<button type="submit" class="btn btn-primary" style="margin-right:10px">Save</button>
                    	<a href="viewcustomers.php"><button type="button" class="btn btn-danger" style="margin-right:10px">Cancel</button></a>
				            </div>
				        </div>
				    </div>
				</div>
			</form>
			<!-- /add customer -->


		</div>
		<!-- /page content -->

	</div>
	<!-- /content -->

</body>
</html>