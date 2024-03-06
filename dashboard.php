<?php include('sessions.php');

?>
<?php include('header.php');?>



<?php
include('database.php');

$sql="SELECT 
COUNT(*) AS `total_task`,
SUM(CASE WHEN `task_status` = 'pending' THEN 1 ELSE 0 END) AS `pending_task`,
SUM(CASE WHEN `task_status` = 'completed' THEN 1 ELSE 0 END) AS `completed_task`
FROM 
`tasks`";
$result=mysqli_query($con,$sql);
if($result)
{
    
    while($row=mysqli_fetch_assoc($result))
    {
        $total_task=$row['total_task'];
        $completed_task = $row['completed_task'];
        $pending_task = $row['pending_task'];
        //echo $id;
    }
  }

    
?>

                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body widget-style-2">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0"><span data-plugin="counterup"><?php echo $total_task?></span></h2>
                                                <p class="mb-0">Total Tasks</p>
                                            </div>
                                            <i class="ion-md-eye text-pink bg-light"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php
include('database.php');

$sql="SELECT 
COUNT(*) AS `total_projects`,
SUM(CASE WHEN `project_status` = 'pending' THEN 1 ELSE 0 END) AS `pending_projects`,
SUM(CASE WHEN `project_status` = 'completed' THEN 1 ELSE 0 END) AS `completed_projects`
FROM 
`addprojects`";
$result=mysqli_query($con,$sql);
if($result)
{
    
    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['total_projects'];
        $pending = $row['pending_projects'];
        $completed = $row['completed_projects'];
        //echo $id;
    }
  }

    
?>       
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body widget-style-2">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0"><span data-plugin="counterup"><?php echo $id?></span></h2>
                                                <p class="mb-0">Total Projects</p>
                                            </div>
                                            <i class="ion-md-paper-plane text-purple bg-light"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body widget-style-2">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0"><span data-plugin="counterup"><?php echo $completed_task;?></span></h2>
                                                <p class="mb-0">Complete Tasks</p>
                                            </div>
                                            <i class="ion-ios-pricetag text-info bg-light"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body widget-style-2">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                            <h2 class="my-0"><span data-plugin="counterup"><?php echo $completed?></span></h2>
                                                <p class="mb-0">Complete Projects</p>
                                            </div>
                                            <i class="ion-ios-pricetag text-info bg-light"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>








            




                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body widget-style-2">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0"><span data-plugin="counterup"><?php echo $pending_task;?></span></h2>
                                                <p class="mb-0">Pending Tasks</p>
                                            </div>
                                            <i class="ion-ios-pricetag text-info bg-light"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body widget-style-2">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0"><span data-plugin="counterup"><?php echo $pending;?></span></h2>
                                                <p class="mb-0">Pending Projects</p>
                                            </div>
                                            <i class="ion-ios-pricetag text-info bg-light"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                     


                            <?php
include('database.php');

$sql="SELECT COUNT(*) AS `id` FROM `users`";
$result=mysqli_query($con,$sql);
if($result)
{
    
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['id'];
        //echo $id;
    }
  }

    
?>



                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body widget-style-2">
                                        <div class="media">
                                            <div class="media-body align-self-center">
                                                <h2 class="my-0"><span data-plugin="counterup"><?php echo $id;?></span></h2>
                                                <p class="mb-0">Total Users</p>
                                            </div>
                                            <i class="mdi mdi-comment-multiple text-primary bg-light"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                      
                        

                    
                            <!-- end col -->

                        </div>
                        <!-- End row -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                

                <!-- Footer Start -->
                <?php include('footer.php');?>
                <!-- end Footer -->
            
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

     

        <!-- Right bar overlay-->
        
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Sparkline charts -->
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <script src="assets/libs/moment/moment.min.js"></script>
        <script src="assets/libs/jquery-scrollto/jquery.scrollTo.min.js"></script>
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Chat app -->
        <script src="assets/js/pages/jquery.chat.js"></script>

        <!-- Todo app -->
        <script src="assets/js/pages/jquery.todo.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>
        <!-- Dashboard init JS -->
        <script src="assets/js/pages/dashboard3.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>


<!-- Mirrored from coderthemes.com/velonic/layouts/vertical/dashboard-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Dec 2022 20:12:37 GMT -->
</html>