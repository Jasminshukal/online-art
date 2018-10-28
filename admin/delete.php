<?php
//session_start();
//if(!isset($_SESSION['login']))
{
	//header("location:login.php");
}
?><!--?php
session_start();
if(!isset($_SESSION['submit']))
{
  header("location:index.php");
}-->
<?php

$conn=mysqli_connect("localhost","root","","yoga");
$id=$_GET['id'];
$sql="delete from user where id=$id";
$query=mysqli_query($conn,$sql);
if($query)
{
	header("location:user.php");
}
else
{
	header("location:user.php");
}

?>