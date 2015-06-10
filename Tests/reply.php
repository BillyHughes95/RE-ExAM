<?php
	include 'connect.php';

	$post_id = $_POST['post_id'];
	$reply = $_POST['reply'];
		
	mysql_query("INSERT INTO reply VALUES('', '$post_id','$reply' , now(), now())");
?>