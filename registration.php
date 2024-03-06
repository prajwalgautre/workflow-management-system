<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>Register</title>
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

//------ PHP code for User registration form---
$error = "";
    if (array_key_exists("submit", $_POST)) {

        // Database Link
        include('database.php');

        //Taking HTML Form Data from User
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $role = mysqli_real_escape_string($con, $_POST['role']);




        // print_r($username);
        // print_r($email);
        // print_r($password);
        // print_r($role);
    
        // exit(0);
    

        // PHP form validation PHP code
        if (!$username) {
            $error .= "username is required <br>";
        }
        if (!$email) {
            $error .= "Email is required <br>";
        }

        if (!$password) {
            $error .= "Password is required <br>";
        }


        if (!$role) {
            $error .= "User role is required <br>";
        }


        if ($error) {
            $error = "<b>There were error(s) in your form!</b> <br>" . $error;
        } else {

            //Check if email is already exist in the Database
    
            $query = "SELECT id FROM users WHERE email = '$email'";


            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                $error .= "<p>Your email has taken already!</p>";
            } else {

                //Check if email is already exist in the Database
    
                $query = "SELECT id FROM users WHERE username = '$username'";


                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    $error .= "<p>Your username has taken already!</p>";
                } else {


                    $query = "INSERT INTO users (name,username, email, password,role) VALUES ('$name','$username', '$email', '$password','$role')";
                    // print_r($query);
                    // exit(0);
                    if (!mysqli_query($con, $query)) {
                        $error = "<p>Could not sign you up - please try again.</p>";
                    } else {

                        //session variables to keep user logged in
                        $_SESSION['id'] = mysqli_insert_id($con);
                        $_SESSION['email'] = $email;
                        $_SESSION['role'] = $role;
            
                        header("Location: userslist.php");
                        // echo "session start";
    



                    }

                }

            }
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
                                <h5 class="text-white font-13 mb-0">Register a user</h5>
                            </div>
                            <div class="card-body">
                                <form action="#"  method="post"class="p-2">
                                    <?php echo $error;?>
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email :</label>
                                        <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[com|COM]{2,4}$" title="Please enter Valid email that ncludes @ and .com" class="form-control"type="email" id="emailaddress" required="" placeholder="Email..... "required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="username">User name :</label>
                                        <input class="form-control"  pattern="[a-zA-Z0-9._-]{3,}" required title="username should contain at least 3 characters and can only contain lowercase and uppercase letters, numbers, periods, underscores, and hyphens." name="username"placeholder="username..."required>
                                    </div>


                                    
                                    <div class="form-group mb-3">
                                        <label for="username">Name :</label>
                                        <input class="form-control" required name="name" placeholder="name..."required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password :</label>
                                        <input class="form-control" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more"type="password" id="password" required="" placeholder="Enter your password"required>
                                    </div>

                                    <select class="form-control" name="role" data-toggle="select" required>
                                               
                                    
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