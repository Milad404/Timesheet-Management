<?php include "header.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Students <small>Students Overview</small>
                        </h1>
       
                    </div>
                </div>
          

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
<?php
$sql = "SELECT id FROM users";
$result = $conn->query($sql);

echo $result->num_rows;
?>


                                        </div>
                                        <div>Students</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>



   </div>

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> Package listing</h3>
                            </div>
                            <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">







                                <thead>
                                    <tr>

                                    
                                        <th>Name</th>
                                        <th>MUID</th>
                                        <th>Email</th>
                                        <th>Post Office Number</th>
                                        <th>Tel Number</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

<?php
$sql = "SELECT id, fname, lname,email,muid,ponum,telnum FROM users order by id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>

                                   <tr class="active">
                                        <td><?php echo $row ["fname"]." ".$row["lname"]; ?></td>
                                        <td><?php echo $row ["muid"]; ?></td>
                                        <td><?php echo $row ["email"]; ?></td>
                                        <td><?php echo $row ["ponum"]; ?></td>
                                        <td><?php echo $row ["telnum"]; ?></td>
                                        <td><a href='./delete_user.php?id=<?php echo $row ["id"]; ?>'> Delete</a></td>
                                    </tr>

    	
   

        <?php 

     
    }
} else {
    echo "0 results";
}

?>

                                </tbody>
                            </table>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                       </div>
            

        </div>
     

    </div>
   

    <script src="js/jquery.js"></script>


    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
