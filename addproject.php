<?php include('sessions.php');?>

<?php include('header.php');?>

<?php
// Connect to the database
include('database.php');

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the task data from the form
    $protitle = $_POST['protitle'];
    $taskdes = $_POST['taskdes'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $projectmanager = $_POST['projectmanager'];
    $taskmem = $_POST['taskmem'];
    $file = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];


   
    $taskmem = implode(",", $taskmem);
$query = "INSERT INTO addprojects (protitle, taskdes, startdate, enddate,projectmanager,taskmem,file) VALUES ('$protitle', '$taskdes', '$startdate', '$enddate','$projectmanager', '$taskmem', '$file')";


    // Insert the task data into the tasks table

    $con->query($query);
    move_uploaded_file($file_tmp,"uploads/$file");

    // Retrieve the task id
    $project_id = $con->insert_id;

    // Assign the task to the selected members
    $taskmem = explode(",", $taskmem);
    foreach ($taskmem as $member) {
        $query = "INSERT INTO project_members (project_id, member_id) VALUES ('$project_id', '$member')";
        $con->query($query);
    }

    echo "Project has been added and assigned to the selected members.";
}
?>



   

                     

<div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mb-3 mt-0">Add Project</h4>

            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Project Title</label>
                    <input type="text" autocomplete="off" name="protitle" placeholder=""  class="form-control"required>
                    
                </div>
                <div class="form-group">
                    <label>Task description</label>
                    <input type="text" autocomplete="off" name="taskdes"placeholder=""  class="form-control"required>
                
                </div>


        


                    <div class="form-group">
                        <label>Start date</label>
                        <div>
                            <div class="input-group">
                                <input type="text" autocomplete="off" name="startdate"class="form-control" placeholder="mm/dd/yyyy" data-provide="datepicker"required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>




                            
                    <div class="form-group">
                        <label>End date</label>
                        <div>
                            <div class="input-group">
                                <input type="text"  autocomplete="off" name="enddate" class="form-control" placeholder="mm/dd/yyyy" data-provide="datepicker"required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                </div>
                            </div>
                            </div>

                            <br>
                            <label>Project Manager</label>

                            <div class="input-group">

                            
<?php

include('database.php');
                            $sql = "SELECT * FROM users where role='projectmanager'";
$result = mysqli_query($con, $sql);

// output data of each row
?>
<select name="projectmanager"required>
    <?php
while($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row["email"]. "'>" . $row["username"]. "</option>";
}
echo "</select>";

mysqli_close($con);
?>


         
                            </div>







                            <label>Task Members</label>




                            <div class="input-group">




                            <?php
// Connect to the database
                            include('database.php');

// Query to select all users
$query = "SELECT * FROM users where role='projectmanager'";
$result = $con->query($query);

// Create the select element with the multiple attribute
echo '<select multiple name="taskmem[]">';

// Loop through the results to create the options
while ($row = $result->fetch_assoc()) {
    echo '<option value="' . $row['id'] . '">' . $row['username'] . '</option>';
}

// Close the select element
echo '</select>';

$con->close();

// Retrieve the selected users
if(isset($_POST['users'])){
    $selected_users = $_POST['users'];
    // Do something with the selected users
    print_r($selected_users);
}
?>








<!-- 
<label>Task Members</label>

          <div class="mb-0">
                <select multiple data-role="tagsinput"name="taskmem"required>
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Washington">Washington</option>
                    <option value="Sydney">Sydney</option>
                </select> -->




                <div class="form-group">
                    <label>Add files</label>
                    <input type="file" name="file"placeholder="" data-mask="(999) 999-9999" class="form-control"required>
                
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





















