<?php
/**
 * author: Rahila Sule
 * description: A class to manage all notification functions.
 * date: 19-03-2016
 */

include_once("adb.php");
class notification extends adb
{
	//constructor for notification class
	function notification()
	{

	}

	//adds notification to database
	function add_notification($msg, $time, $date)
	{
		$str_query="INSERT INTO notification SET message='$msg', time='$time', date='$date'";
		return $this->query($str_query);
	}

	//edits notification details in database
	function edit_notification($nid, $msg, $time, $date)
	{
		$str_query="UPDATE notification SET message='$msg', time='$time', date='$date'
			WHERE nid=$nid";
		return $this->query($str_query);
	}


	//allows view of a single notification
	function view_notification($nid)
	{
		$str_query="SELECT * FROM notification WHERE cid=$cid";
		return $this->query($str_query);
	}

	//allows view of all notification records
	function view_all_notifications()
	{
		$str_query="SELECT * FROM notification";
		return $this->query($str_query);
	}


	
}
?>