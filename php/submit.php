<?php

	session_start();

	mysql_connect("localhost","root","password") or die(mysql_error());
	mysql_select_db("LetItRideSystem") or die(mysql_error());


	
	$userID = $_SESSION['UserID'];


	$name = $_POST['usr'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$phone = $_POST['phone'];
	$ccard = $_POST['ccard'];


	$file = $_FILES['profileImg']['tmp_name'];
	$image = addslashes(file_get_contents($_FILES['profileImg']['tmp_name']));
	
	
	// $image= addslashes(file_get_contents($_FILES['imgInp']['tmp_name']));
	// $image_name = addslashes($_FILES['imgInp']['name']);
 //    $image_size = getimagesize($_FILES['imgInp']['tmp_name']);

// , Image = '$image'

	// mysql_query("UPDATE rut image VALUES ('','dsfjisdfjs.jpg', '$image' )");

	// mysql_query("UPDATE rut SET Image = '$image' WHERE UserID = 1");

	mysql_query("UPDATE rut SET Email = '$email', Password = '$password' , Name = '$name', Phonenumber = '$phone', Image = '$image' WHERE UserID = '$userID'");
	mysql_query("UPDATE cit SET CCnumber = '$ccard' WHERE UserID = '$userID'");


	header("Location: ../customerHomepage.html"); 
	exit();
?>