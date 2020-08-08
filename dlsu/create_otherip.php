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

        <style type="text/css">
            img{
  max-width:250px;
}

        </style>
    </head>
    <body onload="addfile2()">


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
                    <div class="block" id="formBlock">
                       
                        <div class="block-content block-content-full">
                                                  
                            <!-- Default Elements -->
                            <div class="block-header block-header-default">
                            <h3 class="block-title">OTHER IP REGISTRATION</h3>                            
                        </div>
                        <div class="block-header">
                        <h5>This is to document assistance for Other IP Registration <br>
                            (Instruction: Do not leave a field blank, write NA if not  applicable)
</h5>
                        </div>
                            <div class="block">
                                
                                <div class="block-content">
                                    <form action="include/all_query.php" method="post" enctype="multipart/form-data">

                                        <div class="form-group row">
                                        
                                        <div class="col-4">
                                            <label class="css-control css-control-lg css-control-primary ">Title</label>
                                                                                    </div>
                                        <div class="col-8">
                                                <input type="text" class="form-control form-control-lg" id="worktitle" name="worktitle" placeholder="Full Name" required="">
                                            </div>
                                      
                                        </div>


                                        <div class="form-group row">
                                        
                                        <div class="col-4">
                                            <label class="css-control css-control-lg css-control-primary ">Tracking No.</label>
                                                                                    </div>
                                        <div class="col-8">
                                                <input type="text" class="form-control form-control-lg" id="trackingno" name="trackingno" placeholder="Tracking No." required="">
                                            </div>
                                      
                                        </div>


                                          <div class="form-group row">
                                        
                                        <div class="col-4">
                                            <label class="css-control css-control-lg css-control-primary ">Date</label>
                                                                                    </div>
                                        <div class="col-8">
                                                <input type="date" class="form-control form-control-lg" id="date" name="date" placeholder="Full Name" required="">
                                            </div>
                                      
                                        </div>

                                        
                                <div class="form-group row">
                                    <div class="col-4">
<label class="css-control css-control-lg css-control-primary ">Decription</label>
                                                                                    </div>
                                 

                                            <div class="col-8">

                                                    <textarea class="form-control form-control-lg" id="workdescription" name="workdescription" rows="6" placeholder="If the mark consists of image/s or words and image/s, give  a complete and concise description of the mark. 
  "></textarea>
                                            </div>


                                        </div>



<div class="form-group row">
                                          <div class="col-4">
                                            <label class="css-control css-control-lg css-control-primary ">Name of Corresponding Author</label>
                                                                                    </div>
                                        <div class="col-8">
                                                <input type="text" class="form-control form-control-lg" id="workauthor" name="workauthor" placeholder="Full Name" required="">
                                            </div>
                                      
                                        </div>
                                        
                          
                                            
                                   <div class="form-group row">
                                        
                                        <div class="col-4 offset-4">
                                                <input type="text" class="form-control form-control-lg" id="workemail" name="workemail" placeholder="(email address)" required="">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" id="worknumber" name="worknumber" placeholder="(mobile number)" required="">
                                            </div>
                                      
                                        </div>

                         
<div class="form-group row">
                                          <div class="col-4">
                                            <label class="css-control css-control-lg css-control-primary ">STATUS</label>
                                                                                    </div>
                                        <div class="col-8">
                                                <input type="text" class="form-control form-control-lg" id="status" name="status" placeholder="Status" required="">
                                            </div>
                                      
                                        </div>


                                     


                                       

                                        <div class="form-group row">

                                            <div class="col-4">
                                            <label class="css-control css-control-lg css-control-primary ">Attach File</label>
                                                                                    </div>

                                            <div class="col-4" id="atachmentdiv2"> 
                                                
                                            </div>

                                        </div>



                                        <div class="form-group row">
                                            <div class="col-8">


                                        <span class="btn btn-lg btn-alt-primary pull-right fa fa-plus-circle" style="margin-top: 5px;" onclick="addfile2()"></span>

                                         </div>


                                         <input type="hidden" name="attachmentcount" id="attachmentcount">


                                    <div class="col-4">
                                                <button type="submit" name="saveotherip" class="btn btn-lg btn-alt-primary pull-right">SAVE</button>
                                            </div>
                                    </div>


                                    </form>
                                </div>
                            </div>
                            <!-- END Default Elements -->

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



        <script type="text/javascript">
                 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }



        var count=0;

    function addfile2()
    {
       count++;
         $.ajax({
             type: "POST",
             url: "include/all_query.php",
             data: {
                 "addfile2" :'1',
                  "count" :count,
             }, 
             success: function(data)
             {
              // //alert('xx');
             $("#atachmentdiv2").append(data);
              //    getdestination();
             }
         }); 

         $('#attachmentcount').val(count);
    }
        </script>
    </body>
</html>