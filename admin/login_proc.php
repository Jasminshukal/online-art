<?php
session_start();

$conn=mysqli_connect('localhost','root','','yoga');

	$Email=$_POST['email'];
	$password=$_POST['password'];

	$conn=mysqli_connect("localhost","root","","yoga");
	//echo "afafafas";
    //die();
	$q=mysqli_query($conn,"select * from admin where email='$Email' && password='$password' ");
	//echo $Email;
	//echo $password;
//	die();
	$result=mysqli_num_rows($q);
	//echo $result();
	
//	$num=mysqli_num_rows($result);
	//while($r=mysqli_fetch_assoc($result))
	//{}
	if($result > 0)
	{   while($row=mysqli_fetch_assoc($q))
		{ 
	//echo $row['name'];
	$_SESSION['login']=$row['name'];

	$_SESSION['type']='admin';

	echo $_SESSION['type'];
	//die();
		}header("location:index.php?done=1");
	}
	else
	{
		//header("location:index.php?error=1");
		echo "Email Address And Password Is Incorecet";
	}

?>