<?php
	include("connect.php");
	session_start(); 
	
	
	$category=$_POST['category'];
	$score = $_POST['rating']; 
	$query ="UPDATE school_visit SET score = '$score' where category = '$category'";

if(mysql_query($query))
	{
		
		header("location:spage2.php?value=success");
	}
	else
		header("location:spage2.php?value=fail");		
?>