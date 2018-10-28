<?php
include("conn.php");
include('head.php');

$table_name="cart";
$product_id=$_GET['id'];
$user_id=$_SESSION['username_id'];

echo $user_id;
IF(isset($_GET['id']))
{
$sql ="INSERT INTO `cart` (`product_id`,`user_id`) VALUES ('$product_id','$user_id')";
mysqli_query($conn,$sql);
}

?>
<script type="text/javascript">
			alert("save Data");
		</script>