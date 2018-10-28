<?php

include("conn.php");	

	$n = $_POST['name']; 
	$em = $_POST['email'];
	$pnum = $_POST['pnum'];
	$msg = $_POST['message'];
	
	
	
	
	
	//echo $n; 
	//echo $em;
	//echo $pnum;
	//echo $msg;
	
	//die();
	
	
	$result = mysqli_query($conn,"insert into contact values(NULL,'$n','$em','$pnum','$msg')");
	
	if($result > 0)
	{
		
		header("location:index.php?done=1");
	}
	else
	{
		header("location:contact.php?error=1");
		
	}
	
	
	
?>