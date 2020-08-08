<?php 
    session_start();
    ob_start();
    include 'include/db.php';


    // $nowtime = date("Y-m-d H:i:s");
    // $timeonly = date("H:i:s");
    // $date = date('Y-m-d', strtotime($nowtime . ' + 7 hours'));
    // $time = date('h:i', strtotime($nowtime . ' + 8 hours'));
    // $_SESSION['date']=$date;
    // $_SESSION['time']=$time;

?>
<!doctype html>
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

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->

        <div id="page-container" class="main-content-boxed">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('assets/media/img/photo34@2x.jpg');">
                    <div class="row mx-0 bg-earth-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white mb-5">
                                    We're very happy you are joining our community!
                                </p>
                                
                                <p class="font-italic text-white-op">
                                    Copyright &copy; <span class="js-year-copy"></span>
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white">
                            <div class="content content-full">
                                <!-- Header -->                             
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="index.php">
                                        <i class="fa fa-sign-out"></i>
                                        <span class="font-size-xl text-primary-dark">DLSU</span><span class="font-size-xl">project</span>
                                    </a>
                                    <h1 class="h3 font-w700 mt-30 mb-10">Create New Account</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Please add your details</h2>
                                    <!-- <div id="ok">test</div> -->
                                </div>
                                <!-- END Header -->

                                <!-- Sign Up Form -->

                                <!-- <form class="js-validation-signup px-30" action="include/all_query.php" method="post"> -->
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="signup_user" name="signup_user">
                                                <label for="signup_user">Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="signup_position" name="signup_position">
                                                <label for="signup_position">Position</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="signup_username" name="signup_username">
                                                <label for="signup_username">Username</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="email" class="form-control" id="signup_email" name="signup_email">
                                                <label for="signup_email">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="signup_password" name="signup_password">
                                                <label for="signup_password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="signup_password_confirm" name="signup_password_confirm">
                                                <label for="signup_password_confirm">Password Confirmation</label>
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
                                    <div class="form-group">
                                        <button onclick="register()" type="submit" class="btn btn-sm btn-hero btn-alt-success">
                                            <i class="fa fa-plus mr-10"></i> Create Account
                                        </button>
                                        <div class="mt-30">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#" data-toggle="modal" data-target="#modal-terms">
                                                <i class="fa fa-book text-muted mr-5"></i> Read Terms
                                            </a>
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="index.php">
                                                <i class="fa fa-user text-muted mr-5"></i> Sign In
                                            </a>
                                        </div>
                                    </div>

                                <!-- </form> -->
                                <!-- END Sign Up Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Terms Modal -->
        <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                            <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                            <i class="fa fa-check"></i> Perfect
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Terms Modal -->



        <script src="assets/js/codebase.core.min.js"></script>


        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/op_auth_signup.min.js"></script>
        <script src="include/sweetalert.js"></script>
        <script src="include/all_js.js"></script>

        <script>

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
                      buttons: "Proceed to login",
                      dangerMode: false,
                    })
                    .then((value) => {
                         window.location='index.php';
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