<?php
include("head.php");
$conn=mysqli_connect("localhost","root","","yoga");
?>

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     User Table
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
			<th>ID</th>
			<th>User Name</th>
			<th>Email</th>
           <!-- <th>Password</th>
			<th>Security_que</th>
			<th>Security_Ans.</th>-->	
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>

                             <?php
                        $sql="select * from user";
                        $query=mysqli_query($conn,$sql);
                        $result=mysqli_fetch_row($query);
                        while($result)
                        {
                         echo "<tr>";
                         echo "<td>".$result[0]."</td>";
                         echo "<td>".$result[1]."</td>";
                         echo "<td>".$result[2]."</td>";
                       //  echo "<td>".$result[3]."</td>";
						// echo "<td>".$result[4]."</td>";
						// echo "<td>".$result[5]."</td>";
                         ?>
                          <td><a href=delete.php?id=<?php echo $result[0]; ?>><i class="fa fa-trash" aria-hidden="true"></i>
</td>
                          <?php 
                         echo   "</tr>";
                          $result=mysqli_fetch_row($query);
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>


     </div>
	 </section>
	
<?php
include("footer.php");
?>
