<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>mBridge - Make payment</title>

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


<script type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/timepicker.min.js"></script>
<script type="text/javascript" src="js/application.js"></script>
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
							<li><a href="viewproducts.php">In stock</a></li>
							<li><a href="viewproducts.php">Low stock</a></li>
							<li><a href="viewproducts.pho">Sold out</a></li>
						</ul>
					</li>
					<li>
						<a href="viewcustomers.php"><span>Customers</span> <i class="icon-users"></i></a>
					</li>
					<li class="active">
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
			<div class="page-header" style="text-align:right; margin:20px;">
				
                    <button type="submit" class="btn btn-primary" style="margin-right:10px">Update</button>
                    <a href="viewreceivables.php"><button type="button" class="btn btn-danger" style="margin-right:10px">Cancel</button></a>
				
			</div>
			<!-- /page header -->


			<!-- New Sale -->
	        <div class="panel panel-default">
				<div class="panel-body">


					<div class="row">
						<div class="col-sm-4">
							 <div class="row">
							<div class="form-group">
				            <label class="col-sm-6 control-label">Sale#: 3 </label>
				        </div>
				    </div>
							<div class="row">
							<div class="form-group">
				            <label class="col-sm-6 control-label">Customer: Uche Ezeoke </label>
				        </div>
				    </div>
				   
						</div>

						<div class="col-sm-4">
							<div class="row">
								<div class="form-group">
					            <label class="col-sm-6 control-label">Sale Total: GHC 21.50 </label>
					        </div>
					    </div>
					    <div class="row">
								<div class="form-group">
					            <label class="col-sm-6 control-label">Balance: GHC 14.00 </label>
					        </div>
					    </div>
	                		
						</div>

						<div class="col-sm-4">
							<div class="form-group">
							<label class="col-sm-3 control-label" data-date-format="mm/dd/yyyy">Date: </label>
				        <div class="col-sm-4">
				        	<input type="text" class="datepicker form-control hasDatepicker" placeholder="Choose date...">
                		</div>
                		</div>
                		<div class="row">
							<div class="form-group">
				            <label class="col-sm-3 control-label">Amount paid: </label>
				            <div class="col-sm-4">
				            	<input type="text" class="form-control">
				            </div>
				        </div>
				    </div>
						</div>

						
					</div>

				


				<div class="table-responsive">
				    <table class="table table-striped table-bordered">
				        <thead>
				            <tr>
				                <th>Product</th>
				                <th>Quantity</th>
				                <th>Unit Price</th>
				                <th>Subtotal</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>Pencils</td>
				                <td>50</td>
				                <td>GHC 0.70</td>
				                <td><strong>GHC 35.00</strong></td>
				            </tr>
				            <tr>
				                <td>Laundry Set</td>
				                <td>2</td>
				                <td>GHC 20.00</td>
				                <td><strong>GHC 40.00</strong></td>
				            </tr>
				            <tr>
				                <td>Monrovian floral plate set of 4</td>
				                <td>1</td>
				                <td>GHC 76.45</td>
				                <td><strong>GHC 76.45</strong></td>
				            </tr>
				        </tbody>
				    </table>
				</div>

			</div>   
			<!-- /new sale -->


		</div>
		<!-- /page content -->

	</div>
	<!-- /content -->

</body>
</html>