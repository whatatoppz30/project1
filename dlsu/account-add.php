<?php
session_start();
ob_start();
include 'include/db.php';
//

 ?>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>De La Salle University</title>

        <meta name="description" content="De La Salle University (DLSU) is a leading university in the Philippines, renowned for its academic excellence, groundbreaking research, and empowering community engagement.">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.css">

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/fullcalendar/fullcalendar.min.css">

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/custom.css">

        <!-- END Stylesheets -->
    </head>
    <body>


        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            <!-- Side Overlay-->
            <?php include('sideright.php') ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->

            <nav id="sidebar">
                <!-- Sidebar Content -->
                <?php include ('sidebar.php')?>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <?php include('header.php') ?>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->

                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">

                    <!-- Dynamic Table Full -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Accounts</h3>
                        </div>

                        <div class="block-content block-content-full">
                            
                           
                           <div class="col-xl-8">
                            <!-- Material Contact -->
                            <div class="block block-themed">
                                <div class="block-header bg-info">
                                    <h3 class="block-title">Create new Account</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                   <!--  <form action="be_forms_premade.html" method="post" onsubmit="return false;"> -->
                                        <div class="form-group row">
                                            <div class=" col-12">
                                                <div class="form-material">
                                                    <input type="text" class="form-control" id="signup_user" name="signup_user" placeholder="Enter Your Name. . . ">
                                                    <label for="contact2-firstname">Full Name</label>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material input-group">
                                                     <input type="email" class="form-control" id="signup_email" name="signup_email" placeholder="Enter Your Email">
                                                    <label for="contact2-email">Email</label>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material">
                                                    <select class="form-control" id="signup_position" name="signup_position" size="1">
                                                        <option value="ADMIN">Admin</option>
                                                        <option value="USER">User</option>
                                                    </select>
                                                    <label for="contact2-subject">Global Roles?</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material input-group">
                                                   <input type="password" class="form-control" id="signup_password" name="signup_password">
                                                    <label for="contact2-email">Password</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="form-material input-group">
                                                    <input type="password" class="form-control" id="signup_password_confirm" name="signup_password_confirm">
                                                    <label for="contact2-email">Password Confirmation</label>
                                                </div>
                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <div class="col-12">
                                               <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signup_terms" name="signup_terms">
                                                <label class="custom-control-label" for="signup_terms">I agree to Terms &amp; Conditions</label>
                                            </div>
                                            </div>
                                        </div>


                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-hero btn-lg btn-success text-uppercase mb-10" onclick="register()">
                                                    <i class="fa fa-user mr-5"></i> Add Account
                                                </button>
                                            </div>
                                        </div>
                                   <!--  </form> -->
                                </div>
                            </div>
                            <!-- END Material Contact --> 
                           

                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->
                    <!-- END IP table -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-sm clearfix">
                    
                    <div class="float-left">
                        <a class="font-w600" href="https://itbs.com.ph" target="_blank">ITBS Corp.</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <script src="assets/js/codebase.core.min.js"></script>

        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/moment/moment.min.js"></script>
        <script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.min.js"></script>
 <!-- Page JS Code -->
        <script src="assets/js/pages/op_auth_signup.min.js"></script>
        <script src="include/sweetalert.js"></script>
        <script src="include/all_js.js"></script>


        <script type="text/javascript">
            
            function register(){
                var x =document.getElementById("signup_terms").checked;
                var status='';
                var statuscode='';
                var vars='';
                var signup_user=$('#signup_user').val();
                var signup_position=$('#signup_position').val();
                var signup_email=$('#signup_email').val();
                var signup_username=$('#signup_username').val();
                var signup_password=$('#signup_password').val();
                var signup_password_confirm=$('#signup_password_confirm').val();

                if(signup_user==''){
                    status='Username not defined!';
                    statuscode='info';
                    vars = '#signup_user';
                    getalert(status, statuscode, vars);
                }else if(signup_position==''){
                    status='Position not defined!';
                    statuscode='info';
                    vars = '#signup_position';
                    getalert(status, statuscode, vars);                    
                }else if(signup_username==''){
                    status='Username not defined!';
                    statuscode='info';
                    vars = '#signup_username';
                    getalert(status, statuscode, vars);                    
                }else if(signup_email==''){
                    status='Email Address not defined!';
                    statuscode='info';
                    vars = '#signup_email';
                    getalert(status, statuscode, vars);                    
                }else if(signup_password==''){
                    status='Password not defined!';
                    statuscode='info';
                    vars = '#signup_password';
                    getalert(status, statuscode, vars);                    
                }else if(signup_password_confirm==''){
                    status='Please confirm password!';
                    statuscode='info';
                    vars = '#signup_password_confirm';
                    getalert(status, statuscode, vars);  

                }else if(signup_password!=signup_password_confirm){
                    status='Password did not match!';
                    statuscode='info';
                    vars = '#signup_password_confirm';
                    getalert(status, statuscode, vars);                    
                }else if(x==false){
                    status='Please check Terms and Conditions!';
                    statuscode='info';
                    vars = '#signup_terms';
                    getalert(status, statuscode, vars);                    
                }else{
                      $.ajax({
                        type: "POST",
                        url: "include/all_query.php",
                        data: {
                            "register" : '1',
                            "signup_user" :signup_user,
                            "signup_position" :signup_position,
                            "signup_email" :signup_email,
                            "signup_username" :signup_username,
                            "signup_password" :signup_password
                        },
                        success: function(x){

                            status='Registration Successful!';
                            statuscode='success';
                            vars = 'regsuccess';
                            getalert(status, statuscode, vars);                         
                           
                        }            
                      });
                }

            }


            function getalert(status, statuscode, vars){

                if(vars=='regsuccess'){
                    swal({
                      title: status,
                      // text: "Once deleted, you will not be able to recover this imaginary file!",
                      icon: statuscode,
                      buttons: "Ok",
                      dangerMode: false,
                    })
                    .then((value) => {
                         window.location='accounts.php';
                    }); 
                }
                else
                {
                    swal({
                      title: status,
                      // text: "Once deleted, you will not be able to recover this imaginary file!",
                      icon: statuscode,
                      buttons: "Ok",
                      dangerMode: false,
                    })
                    .then((value) => {
                         $(vars).focus();
                    });                    
                }

            }

        </script>
    </body>
</html>