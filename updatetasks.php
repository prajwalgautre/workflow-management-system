<?php include('sessions.php');?>

<?php include('header.php');?>













<?php
include ('database.php');
$id=$_GET['id'];
$sql = "SELECT * FROM `tasks` Where id='$id'";
$res = mysqli_query($con, $sql);
if(!$res){
    echo mysqli_error($con);
}  
$row = mysqli_fetch_assoc($res);
$current = "" ; 
$status = "";                               
//print_r($row);
// exit(0);


   $id = $row['id'];
   $title = $row['title'];
   $description = $row['description'];
   $start_date = $row['start_date'];
   $end_date = $row['end_date'];
   $file = $row['file'];
   $task_status = $row['task_status'];




?>


























<?php

include('database.php');

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['taskdes'];
    $start_date = $_POST['startdate'];
    $end_date = $_POST['enddate'];

    $file = $_FILES['file'];
    $filepath = ""; //initialize variable to empty string

    if ($file['error'] === UPLOAD_ERR_OK) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($file["name"]);
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            // File uploaded successfully, now you can save the file path in the database
            $filepath = $target_file;
        }
    }

    $sql = "UPDATE tasks SET title = '$title', description = '$description', start_date = '$start_date', end_date = '$end_date', file = '$filepath' WHERE id = $id";

    $result = mysqli_query($con, $sql);
    if($result) {
        //redirect to viewtasks page before any output
        echo "data Update successfully";
        //header("Location: viewtasks.php");
        exit();
    } else {
        die(mysqli_error($con));
    }
}

?>


                     

<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-3 mt-0">Update tasks</h4>

            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Project Title</label>
                    <input type="text" value="<?php echo $title;?>" name="title" placeholder=""  class="form-control"required>
                    
                </div>
                <div class="form-group">
                    <label>Task description</label>
                    <input type="text" value="<?php echo $description;?>" name="taskdes"placeholder=""  class="form-control"required>
                
                </div>


        


                    <div class="form-group">
                        <label>Start date</label>
                        <div>
                            <div class="input-group">
                                <input type="text" value="<?php echo $start_date;?>"name="startdate"class="form-control" placeholder="mm/dd/yyyy" data-provide="datepicker"required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>




                            
                    <div class="form-group">
                        <label>End date</label>
                        <div>
                            <div class="input-group">
                                <input type="text" value="<?php echo $end_date;?>" name="enddate" class="form-control" placeholder="mm/dd/yyyy" data-provide="datepicker"required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>
                            </div>
                    </div>

                         



                <div class="form-group">
                    <label>Add files</label>
                    <input type="file" value="<?php echo $file;?>"name="file"placeholder="" data-mask="(999) 999-9999" class="form-control"required>
                
                </div>



                                <label></label>
                         

</div>  
 <input type="submit"class="btn btn-info waves-effect width-md waves-light" value="Add Project"  name="submit">

            </form>

        </div>
    </div>
</div>





<style>


select {
    word-wrap: normal;
    padding: 7px 147px;
    color: #797979;
    border-color: #797979;
}
    button
    {
        margin-top: 20px;
        padding: 10px;
    }
</style>
<!-- end col -->

</div>
<!-- end row -->

</div>
<!-- end container-fluid -->

</div>
<!-- end content -->

</div>

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

<!-- Plugins Js -->
<script src="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="assets/libs/switchery/switchery.min.js"></script>

<script src="assets/libs/select2/select2.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
<script src="assets/libs/moment/moment.min.js"></script>
<script src="assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<!-- Init js-->
<script src="assets/js/pages/form-advanced.init.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/velonic/layouts/vertical/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Dec 2022 20:13:11 GMT -->
</html>



































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

        <!-- Plugins Js -->
        <script src="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="assets/libs/switchery/switchery.min.js"></script>

        <script src="assets/libs/select2/select2.min.js"></script>
        <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
        <script src="assets/libs/moment/moment.min.js"></script>
        <script src="assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

        <!-- Init js-->
        <script src="assets/js/pages/form-advanced.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>


<!-- Mirrored from coderthemes.com/velonic/layouts/vertical/forms-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Dec 2022 20:13:11 GMT -->
</html>