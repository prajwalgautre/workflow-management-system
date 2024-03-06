<?php include('sessions.php');?>

<?php include('header.php');?>

<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body table-responsive">
                                        <h4 class="m-t-0 header-title mb-4"><b>View Leave Application</b></h4>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                                <tr>
                                                    
                                                    <th>Employee Id</th>
                                                    <th>Name</th>
                                                    
                                                    <th>Email Id</th>
                                                  
                                                    <th>Mobile Number</th>
                                                    <th>Leave Type</th>
                                                    
                                                    <th>Leave Description</th>
                                                    <th>Leave Status</th>
                                                 
                                                
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>


                                                <?php
include('database.php');
$sql = "SELECT * from application_leave";

$result=mysqli_query($con,$sql);
if ($result) {


    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach($rows as $row){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $phoneno = $row['phoneno'];
        $leave_type = $row['leave_type'];
        $description = $row['description'];
        $status = $row['status'];
        // $datetime = $row['datetime'];
      
      
?>






                                                    <td><?php print_r($id);?></td>
                                                    <td><?php print_r($name);?></td>
                                                    <td><?php print_r($email);?></td>
                                                   
                                                    <td><?php print_r($phoneno);?></td>
                                                    <td><?php print_r($leave_type);?></td>
                                                    <td><?php print_r($description);?></td>
                                                    
                                                    <td><span class="badge badge-pink"><?php print_r($status);?></span></td>
                                                    
                                                  
                                                    
                                                    
                                                    <td>

                                                
                                                    <a href="updateleave.php? id=<?php echo($id);?>"type="button"id="btn" class="btn btn-success waves-effect width-md waves-light">Accept</a>
                                                    <br>
                                                    <a href="deleteleave.php? id=<?php echo($id);?>"type="button" id="btn" class="btn btn-danger waves-effect width-md waves-light">Reject</a>
                                                 
                                                </td>
                                                </tr>

<?php
    }
}

        ?>                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
<style>
    #btn
    {
        margin: 5px;
    padding: 1px 21px;
    }
</style>
                     

                
                

                <!-- Footer Start -->
                <?php include('footer.php');?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-17 m-0 text-white">Theme Customizer</h4>
            </div>
            <div class="slimscroll-menu">
        
                <div class="p-4">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                    <div class="mb-2">
                        <img src="assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
       
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/vfs_fonts.js"></script>
        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables/dataTables.select.min.js"></script>

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>


<!-- Mirrored from coderthemes.com/velonic/layouts/vertical/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Dec 2022 20:13:26 GMT -->
</html>