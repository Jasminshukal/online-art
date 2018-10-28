<?php
session_start();
//$conn=mysqli_connect('localhost','root','','yoga');

	echo $Email=$_POST['email'];
	echo $password=$_POST['password'];

	include("conn.php");
	
	$q=mysqli_query($conn,"select * from user where Email='$Email' && password='$password' ");
	
	$result=mysqli_num_rows($q);
//	$num=mysqli_num_rows($result);
	
	if($result > 0)
	{   while($row=mysqli_fetch_assoc($q))
		{ //echo $row['name'];
		$_SESSION['username']=$row['name'];
		$_SESSION['username_id']=$row['id'];
		//die();
		}
	header("location:index.php?done=1");
	}
	else
	{
	//	header("location:login.php?error=1");
		echo "Email Address And Password Is Incorecet";
	}

?>