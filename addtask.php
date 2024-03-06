<?php include('sessions.php');?>

<?php include('header.php');?>



<?php
// Connect to the database
include('database.php');

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the task data from the form
    $title = $_POST['title'];
    $project = $_POST['Project'];
    // print_r($project);
    // exit(0);
    $description = $_POST['description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $members = $_POST['members'];
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    // Insert the task data into the tasks table
    $query = "INSERT INTO tasks (project,title, description, start_date, end_date, file) VALUES ('$project','$title', '$description', '$start_date', '$end_date', '$file')";
    $con->query($query);
    move_uploaded_file($file_tmp,"uploads/$file");

    // Retrieve the task id
    $task_id = $con->insert_id;

    // Assign the task to the selected members
    foreach ($members as $member) {
        $query = "INSERT INTO task_members (task_id, member_id) VALUES ('$task_id', '$member')";
        $con->query($query);
    }

    echo "Task has been added and assigned to the selected members.";
}
?>




                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3 mt-0">Assign task</h4>

                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label>Task Title</label>
                                                <input type="text" placeholder="" name="title" class="form-control" required>
                                                
                                            </div>



                                            <div class="form-group">
                                    
                                            <label>Select Project</label>
                                            <select name="Project" class="form-control" required>
            <?php
                // Fetch all users from the database
                $query = "SELECT * FROM addprojects";
                $result = $con->query($query);

                // Create the options for the multi-select input
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['protitle'] . '">' . $row['protitle'] . '</option>';
                }
            ?>
        </select>
                          
                                                
                                            </div>


                                            <div class="form-group">
                                                <label>Task description</label>
                                                <input type="text" placeholder="" name="description" class="form-control"required>
                                            
                                            </div>


                                    


                                                <div class="form-group">
                                                    <label>Start date</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text" autocomplete="off"  class="form-control" name="start_date"placeholder="mm/dd/yyyy" data-provide="datepicker" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            </div>
                                                        </div>




                                                        
                                                <div class="form-group">
                                                    <label>End date</label>
                                                    <div>
                                                        <div class="input-group">
                                                            <input type="text"autocomplete="off" class="form-control" name="end_date"placeholder="mm/dd/yyyy" data-provide="datepicker" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                        </div>

                                                        
                                                        <div class="input-group">


                                                        <div class="form-group">
                        <!-- end page title -->
                        <label>Task Members</label>

                        <div>

                        <div class="input-group">




  <select multiple name="members[]" class="form-control">
            <?php
                // Fetch all users from the database
                $query = "SELECT * FROM users where role='projectmanager'";
                $result = $con->query($query);

                // Create the options for the multi-select input
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['username'] . '</option>';
                }
            ?>
        </select>
                                     
                                                        </div>

                                            <div class="form-group">
                                                <label>Add files</label>
                                                <input type="file" name="file" class="form-control" required>
                                            
                                            </div>

                                                            <label></label>
                                                            
                                                            <input type="submit"class="btn btn-info waves-effect width-md waves-light" value="Add Tasks"  name="submit">
                                                        

</div>

                                        </form>

                                    </div>
                                </div>
                            </div>


       
                            <style>
                                button
                                {
                                    margin-top: 20px;
                                    padding: 10px;
                                }
                            </style>
                            <!-- end col -->

                     
                <!-- end content -->

           
                </div>

                </div>
                </div>

                
                </div>

                </div>
                </div>
                <!-- Footer Start -->
                <?php include('footer.php');?>
                <!-- end Footer -->

           

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

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