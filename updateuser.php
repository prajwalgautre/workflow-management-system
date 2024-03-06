<?php include('sessions.php');?>


<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>Update User</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>




    <?php
include ('database.php');
$id=$_GET['id'];
$sql = "SELECT * FROM `users` Where id='$id'";
$res = mysqli_query($con, $sql);
if(!$res){
    echo mysqli_error($con);
}  
// $id = 1;  
$row = mysqli_fetch_assoc($res);
$current = "" ; 
$status = "";                               
//print_r($row);
// exit(0);


   $id = $row['id'];
   $username = $row['username'];
   $email = $row['email'];
   $password = $row['password'];
   $role = $row['role'];





?>





<?php

include('database.php');


if(isset($_POST['submit']))
{


   //$d_id=$_GET['d_id'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $role=$_POST['role'];
    $password=$_POST['password'];


    // print_r($id);
    // print_r($username);

    // print_r($role);
    // print_r($password);
    // exit(0);


$sql="update users SET username = '$username' , email = '$email' , role = '$role' ,  = '$password' where id = $id";

    // print_r($sql);
    // exit(0);
// $sql="update addpatient name,doctorname,cell,age,amount,patienttype) values ('$name','$doctorname',$cell,$age,$amount,'$patienttype')";
    $result=mysqli_query($con,$sql);
    print_r($con);
    exit(0);
    if($result)
    {


// print_r($name);
// print_r($cell);
// print_r($age);
// print_r($doctorname);
// print_r($amount);
// print_r($patienttype);
// exit(0);


     Header("Location: userslist.php");
    //echo "Data update Successful";
    }
     
    else
    {
      die(mysqli_error($con));
    }
  
  }


  




?>















    

    <body class="authentication-page">

        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-header text-center p-4 bg-primary">
                                <h4 class="text-white mb-0 mt-0">Heuristic Approach for OWMS</h4>
                                <h5 class="text-white font-13 mb-0">Update a user</h5>
                            </div>
                            <div class="card-body">
                                <form action="#"  method="post"class="p-2">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email :</label>
                                        <input type="email" name="email" class="form-control"type="email"value="<?php print_r($email);?>" id="emailaddress" required="" placeholder="Email..... "required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="username">User name :</label>
                                        <input class="form-control"name="username"value="<?php print_r($username);?>" type="text" id="username" required="" placeholder="username..."required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password :</label>
                                        <input class="form-control" name="password" value="<?php print_r($password);?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more"type="password" id="password" required="" placeholder="Enter your password"required>
                                    </div>

                                    <select class="form-control" name="role" data-toggle="select" value="<?php print_r($role);?>"required>
                                               
                                    
                                                <label for="users">Role :</label>
                                                
                                                    <option value="projectmanager">projectmanager</option>
                                                    <option value="admin">admin</option>
                                              

                                                </select>

                                    <div class="form-group text-right mt-4 mb-4">
                                        <div class="col-12">
                                        <input type="submit" name="submit" class="btn btn-primary w-50 py-3" type="submit"></input> 
                                        </div>
                                    </div>

                                
                                </form>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>



</html>








