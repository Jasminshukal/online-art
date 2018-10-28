<?php
//session_start();
//$conn=mysqli_connect('localhost','root','','yoga');
	
	//$name=$_POST['name']
	//$Email=$_POST['email'];
		
	//$video=$_POST['videoname'];

	include("conn.php");
	
	$yoganame = $_POST['yname'];
	$desc = $_POST['des'];
	$i = $_FILES["file"]["name"];
	$ben = $_POST['price'];
		
		
	//echo $yoganame;
	//echo "</br>";
	//echo $desc;
///echo "</br>";
	///echo $i;
	
	//$imgname = $_FILES['file']['name'];
	//$tempimgname = $_FILES['file']['tem_name'];
	
	

	
	
	if( $_FILES['file']['name'] != "" )
	{
		move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
		$sql ="insert into yogas values(NULL, '$yoganame', '$desc', '$i','no','null','$ben')";
		$run = mysqli_query($conn,$sql);
	}
		?>
		<script type="text/javascript">
			alert("save Data");
		</script>
		
		
		header("location:index.php?done=1");
?>