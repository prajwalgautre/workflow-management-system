<?php
include ('database.php');
$id=$_GET['id'];
$sql = "SELECT * FROM `application_leave` Where id='$id'";
$res = mysqli_query($con, $sql);
if(!$res){
    echo mysqli_error($con);
}  

$row = mysqli_fetch_assoc($res);
$current = "" ; 
$status = "";                               
// print_r($row);
// exit(0);

?>





<?php
// Step 1: Connect to the MySQL database
include('database.php');
$new_status = "Approved"; // replace with the new status you want to set

$query = "UPDATE application_leave SET status = '$new_status' WHERE id = $id";

// Step 3: Execute the query
$result = mysqli_query($con, $query);

if ($result) {
   header('location: view_leave_request.php');
} else {
    echo "Error updating project status: " . mysqli_error($con);
}

// Step 4: Close the database connection
mysqli_close($con);
?>