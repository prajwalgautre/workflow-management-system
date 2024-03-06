<?php include('sessions.php');?>


<!DOCTYPE html>
<html lang="en">

    

<head>
        <meta charset="utf-8" />
        <title>Dashboard - Operation Workflow Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
              

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="dashboard.php" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="18">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="dashboard.php" class="logo text-center logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="18">
                            <!-- <span class="logo-lg-text-dark">Velonic</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">V</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <!-- LOGO -->
  

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
        
                    <li class="d-none d-lg-block">
                        <form class="app-search">
                            <div class="app-search-box">
                                <div class="input-group">
                                   
                                    <div class="input-group-append">
                                  
                                        
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-speedometer"></i>
                        <span>  Dashboard  </span>
                    
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                      
                        <li><a href="dashboard.php">Dashboard</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-md-basket"></i>
                        <span> Projects</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">

                        <li><a href="viewprojects.php">Project List</a></li>
                        <li><a href="addproject.php">add project</a></li>
        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> Tasks</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="viewtasks.php">Task List</a></li>
                        <li><a href="addtask.php">Add Task</a></li>
                
                    </ul>
                </li>







                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> Reports</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="completeprojects.php">View completed Projects</a></li>
                        <li><a href="pendingprojects.php">View Pending Projects</a></li>
                        <li><a href="completedtasks.php">View completed Tasks</a></li>
                        <li><a href="pendingtasks.php">View Pending Tasks</a></li>
                    
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> users</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="userslist.php">View Users</a></li>
                        <li><a href="registration.php">Add Users</a></li>
                    
                    </ul>
                </li>





                
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> Chat</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="chat/home.php">Chat</a></li>
                    
                
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> View Leave Request</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="view_leave_request.php">View Leave Request</a></li>
                    
                
                    </ul>
                </li>




                
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ion-ios-apps"></i>
                        <span> Logout</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="logout.php">Logout</a></li>
                    
                
                    </ul>
                </li>








         
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">


                    <?php include ('database.php');
              $sql = "SELECT name FROM users WHERE id =".$_SESSION['id']."";

                

// Execute the query and retrieve the results
$result = mysqli_query($con, $sql);

// Display the names of users with the same session ID
while ($row = mysqli_fetch_assoc($result)) {

?>
             <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Wecome : <?php print_r($row['name']);?> </h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb p-0 m-0">
                                  
                                    </ol>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

            <?php

                }

                // Close the database connection
                mysqli_close($con);
                ?>
                           

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb p-0 m-0">
                                      
                                        </ol>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->