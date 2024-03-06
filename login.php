<?php 
include('database.php');
session_start();
$error2 = "";
if (array_key_exists("submit", $_POST)) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con,  $_POST['password']); 
    $role = mysqli_real_escape_string($con,  $_POST['role']);
    if (!$email) {
        $error2 .= "Email is required <br>";
    }
    if (!$password) {
        $error2 .= "Password is required <br>";
    } 
    if ($error2) {
        $error2 = "<b>There were error(s) in your form!</b><br>".$error2;
    }
    else {
        $query = "SELECT * FROM users WHERE email='$email' AND role='$role'";
        $result = mysqli_query($con, $query);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_array($result);
            $_SESSION['id'] = $row['id'];
            if ($row['password'] == $password) {
                if ($role == "projectmanager") {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['name'] = $row['name'];
                    header("location: projectmanager/Pmdashboard.php");
                } elseif ($role == "admin") {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['name'] = $row['name'];
                //   echo "session start";
        
                    header("location: dashboard.php");
                }
            }
        
  

            else {
                $error2 = "Combination of email/password does not match!";
            }
        }
        else {
            $error2 = "Combination of email/password does not match!";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>Login</title>
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










    <body class="authentication-page">

        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-header text-center p-4 bg-primary">
                                <h4 class="text-white mb-0 mt-0">Heuristic Approach for OWMS</h4>
                                <h5 class="text-white font-13 mb-0">Login here user</h5>
                            </div>
                            <div class="card-body">
                                <form action="#" method="post" class="p-2">
                                 <?php echo $error2;?>
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email :</label>
                                        <input type="email" name="email"class="form-control"type="email" id="emailaddress" required="" placeholder="Email..... "required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password :</label>
                                        <input class="form-control"name="password" type="password" id="password" required="" placeholder="Enter your password"required>
                                    </div>

                                    <select class="form-control" data-toggle="select" name="role"required>
                                               
                                    
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