<?php
session_start(); //add session here to check that employee is logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>mBridge - Products</title>

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
<script type="text/javascript" src="js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/tabletools.min.js"></script>


<script type="text/javascript" src="js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/tabletools.min.js"></script>

</head>

<body>

	<!-- Navbar -->
	<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<!-- <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Londinium"></a> -->
			<!-- <a class="sidebar-toggle"><i class="icon-plus-circle"></i></a> -->
			<a class="sidebar-toggle" data-container="body" data-html="true" data-trigger="click" data-toggle="popover" data-placement="bottom" data-content="<div><ul><li><a href='addsale.php'>New Sale</a></li>
			    <li><a href='addproduct.php'>New Product</a></li>
			    <li><a href='addcustomer.php'>New Customer</a></li></ul></div>" title="" ><i class="icon-plus-circle"></i></a>
			
			<div class="dropdown">
			  
			</div>
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
					<li class="active">
						<a href="viewproducts.php"><span>Products</span> <i class="icon-basket2"></i></a>
						<ul>
							<li><a href="viewproducts.php">All stock</a></li>
							<li><a href="viewproducts_instock.php">In stock</a></li>
							<li><a href="viewproducts_lowstock.php">Low stock</a></li>
							<li><a href="viewproducts_soldout.php">Sold out</a></li>
						</ul>
					</li>
					<li>
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
			<div class="page-header" style="margin:30px">
				<a href="addproduct.php"><button type="button" class="btn btn-primary">Add Product</button></a>
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

	    	<!-- Products table -->
            <div class="block">
			                <div class="datatable">
				                <table class="table table-hover">
				                    <thead>
				                        <tr>
				                            <th>Product Code</th>
				                            <th>Product Name</th>
				                            <th>Quantity</th>
				                            <th>Unit price</th>
				                            <th>Reorder quantity</th>
				                            <th></th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                        
										<?php
											include("../../application/models/item.php");

											$obj = new item();
											$obj->view_items_instock();
											while($row=$obj->fetch()){
												echo "<tr><td>{$row['item_id']}</td><td>{$row['item_name']}</td><td>{$row['quantity']}</td><td>{$row['price']}</td><td>{$row['reorder_qty']}</td><td><a data-toggle='modal' data-target='#editModal' data-id='{$row['item_id']}' data-item_name='{$row['item_name']}' data-quantity='{$row['quantity']}' data-price='{$row['price']}' data-reorder_qty='{$row['reorder_qty']}' data-description='{$row['description']}'>Edit</a></td></tr>";
											
											}
										?>
									</tbody>
				                </table>
			                </div>
				        </div>
	        <!-- /Products table -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /content -->
<!-- Form modal -->
			<div id="editModal" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Edit Customer</h4>
						</div>

						<!-- Form inside modal -->
						<form method="post" action="../../application/controllers/edit_product.php" role="form">

							<div class="modal-body with-padding">
								


								<div class="form-group">
									<div class="row" style="margin-bottom:10px">
									<div class="form-group">
				            <label class="col-sm-2 control-label">Product name:</label>
				            <div class="col-sm-4">
				            	<input type="text" id="item_name" name="item_name" class="form-control">
				            	<input type="hidden" name="id" id="id">
				            </div>
				        </div>
				    </div>

				    	<div class="row" style="margin-bottom:10px">
				         <div class="form-group">
				            <label class="col-sm-2 control-label">Unit price:</label>
				            <div class="col-sm-4">
				            	<input type="text" id="price" name="price" class="form-control">
				            </div>
				        </div>
				    </div>

				    <div class="row" style="margin-bottom:10px">    
				         <div class="form-group">
				            <label class="col-sm-2 control-label">Quantity:</label>
				            <div class="col-sm-4">
				            	<input type="text" id="quantity" name="quantity" class="form-control">
				            </div>
				        </div>
				    </div>


				    <div class="row" style="margin-bottom:10px">
				        <div class="form-group">
				            <label class="col-sm-2 control-label">Reorder quantity:</label>
				            <div class="col-sm-4">
				            	<input type="text" id="reorder_qty" name="reorder_qty" class="form-control">
				            </div>
				        </div>
				    </div>

				    <div class="row" style="margin-bottom:10px">
				         <div class="form-group">
				            <label class="col-sm-2 control-label">Description:</label>
				            <div class="col-sm-4">
				            	<input type="text" id="description" name="description" class="form-control">
				            </div>
				        </div>
					</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Update</button>
							</div>

						</form>
					</div>
				</div>
			</div>
			<!-- /form modal -->
			<script>
			$(function(){ //this means document ready
				//alert('hello')
				$('#editModal').on('show.bs.modal', function(event){ //function runs when edit modal is clicked on
					//alert('hiiiiiiii')
					var button = $(event.relatedTarget) //all attributes of the form are added to this button
					var id = button.data('id') //this gets data-id in the button, same for below
					var item_name = button.data('item_name')
					var price = button.data('price')
					var quantity = button.data('quantity')
					var reorder_qty = button.data('reorder_qty')
					var description = button.data('description')
					var modal = $(this)
					modal.find('#id').val(id) //assigns variable from above to id
					modal.find('#item_name').val(item_name)
					modal.find('#price').val(price)
					modal.find('#quantity').val(quantity)
					modal.find('#reorder_qty').val(reorder_qty)
					modal.find('#description').val(description)
				})

			})
			</script>
<script type="text/javascript" src="js/application.js"></script>
</body>
</html>