<?php
/**
 * author: Rahila Sule
 * description: A class to manage all item functions.
 * date: 17-03-2016
 */

include_once("adb.php");
class item extends adb
{
	//constructor for item class
	function item()
	{

	}

	//adds item to database
	function add_item($item_name, $qty, $price,$reorder_qty,$description)
	{
		$str_query="INSERT INTO inventory SET item_name='$item_name', quantity='$qty', price='$price', reorder_qty='$reorder_qty', description='$description'";
		return $this->query($str_query);
	}

	//edits item details in database
	function edit_item($item_id,$item_name, $qty, $price,$reorder_qty,$description)
	{
		$str_query="UPDATE inventory SET item_name='$item_name', quantity='$qty', price='$price', reorder_qty='$reorder_qty', description='$description'
			WHERE item_id=$item_id";
		return $this->query($str_query);
	}

	//search database records for a item record based on item name
	function search_item($str)
	{
		$str_query="SELECT * FROM inventory WHERE item_name LIKE '%$str%'";
		return $this->query($str_query);

	}

	//allows view of a single item
	function view_item($item_id)
	{
		$str_query="SELECT * FROM inventory WHERE item_id=$item_id";
		return $this->query($str_query);
	}

	//allows view of all item records
	function view_all_items()
	{
		$str_query="SELECT * FROM inventory";
		return $this->query($str_query);
	}

	//allows view of all items in stock
	function view_items_instock()
	{
		$str_query="SELECT * FROM inventory WHERE quantity > 0";
		return $this->query($str_query);
	}

	//allows view of all items low in stock
	function view_lowstock()
	{
		$str_query="SELECT * FROM inventory WHERE quantity < reorder_qty AND quantity !=0";
		return $this->query($str_query);
	}

	//allows view of sold out stock
	function view_soldout()
	{
		$str_query="SELECT * FROM inventory WHERE quantity = 0";
		return $this->query($str_query);
	}

	
}
?>