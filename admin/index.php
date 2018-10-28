<?php
include("head.php");
$conn=mysqli_connect("localhost","root","","yoga"); 
?>

<div class="normalheader transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body">
                <a class="small-header-action" href="#">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <div id="hbreadcrumb" class="pull-right m-t-lg">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Dashboards
                </h2>
                
        </div>
    </div>
</div>

<div class="content animate-panel">
        <div class="row">
            <div class="col-md-3" style="">
                <div class="hpanel hbggreen">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3>All User</h3>
                            <p class="text-big font-light">
                               <?php
                               $result=mysqli_query($conn,"SELECT count(*) as total from user");
                        $data=mysqli_fetch_assoc($result);
                        echo $data['total']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="hpanel hbgblue">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Order</h3>
                            <p class="text-big font-light">
                                <?php
                               $result=mysqli_query($conn,"SELECT count(*) as total from cart");
                        $data=mysqli_fetch_assoc($result);
                        echo $data['total']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="hpanel hbgyellow">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Painting</h3>
                            <p class="text-big font-light">
                                <?php
                               $result=mysqli_query($conn,"SELECT count(*) as total from yogas");
                        $data=mysqli_fetch_assoc($result);
                        echo $data['total']; ?>
                            </p>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="">
                <div class="hpanel hbgred">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3>Contect</h3>
                            <p class="text-big font-light">
                                <?php
                               $result=mysqli_query($conn,"SELECT count(*) as total from comment");
                        $data=mysqli_fetch_assoc($result);
                        echo $data['total']; ?>
                            </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

     
                </div>
<?php
include("footer.php");
?>