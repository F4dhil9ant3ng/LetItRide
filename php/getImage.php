<?php
	session_start();
	
	$userID = $_SESSION['UserID'];

	mysql_connect("localhost","root","password") or die(mysql_error());
	mysql_select_db("LetItRideSystem") or die(mysql_error());

	// $id =addslashes($_REQUEST['id']);

	$image = mysql_query("SELECT * FROM rut WHERE UserID = '$userID'");

	$image = mysql_fetch_assoc($image);
	$image = $image['Image'];

	// echo $image;


	header("Content-type: image/jpeg");

	echo $image; 
?>