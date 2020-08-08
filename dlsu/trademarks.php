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

                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Trademarks</h3>
                        </div>

                        <div class="block-content block-content-full">
                    

                    <div class=""><button type="button" class="btn btn-hero btn-info text-uppercase mb-10" onclick="window.location.href = 'request-grant-patent.php';">
                                    <i class="fa fa-plus mr-5"></i>Add New</button></div>
                    <!-- Options Zoom In -->
                    <div class="row items-push tmLogo">
                      <!--   <div class="col-md-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                                <img class="img-fluid options-item" src="assets/media/photos/logo1.jpg" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                    
                                        <h4 class="h6 text-white-op mb-15">
                                        <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info"><i class="fa fa-info text-info mr-5"></i>Details</button>                                        
                                        </h4>
                                             
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="history.php">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->



                        <?php 

$selectinventions="SELECT * FROM `tbltrademark`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 while ($rowinventions = mysqli_fetch_assoc($runselectinventions))
 {

echo
'
 <div class="col-md-3 animated fadeIn">

                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                        <h4 class="text-center options-item"">'.$rowinventions['marktitle'].'</h4>  
                                <img class="img-fluid options-item" src="assets/media/photos/'.$rowinventions['trademarklogo'].'" alt="">
                                <div class="options-overlay bg-black-op">

                                    <div class="options-overlay-content">
                                        <h4 class="h6 text-white-op mb-15">

                                        <a href="trademarkdetails.php?tmid='.$rowinventions['trademarkid'].'"><button type="button" class="btn btn-sm btn-secondary" title="info"><i class="fa fa-info text-info mr-5"></i>Details</button></a>                                  
                                        </h4>
                                             
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="history.php?tmid='.$rowinventions['trademarkid'].'">
                                            <i class="fa fa-pencil"></i> Manage
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
';

 }


                         ?>
                        <!-- <div class="col-md-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                                <img class="img-fluid options-item" src="assets/media/photos/logo2.jpg" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        
                                                                                <h4 class="h6 text-white-op mb-15">
                                        <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info"><i class="fa fa-info text-info mr-5"></i>Details</button>                                        
                                        </h4>
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="history.php">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                                <img class="img-fluid options-item" src="assets/media/photos/logo3.jpg" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        
                                        <h4 class="h6 text-white-op mb-15">
                                        <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info"><i class="fa fa-info text-info mr-5"></i>Details</button>                                        
                                        </h4>
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="history.php">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                       <!--  <div class="col-md-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                                <img class="img-fluid options-item" src="assets/media/photos/logo4.jpg" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        
                                                                                <h4 class="h6 text-white-op mb-15">
                                        <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info"><i class="fa fa-info text-info mr-5"></i>Details</button>                                        
                                        </h4>
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="history.php">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                                <img class="img-fluid options-item" src="assets/media/photos/logo4.jpg" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        
                                                                                <h4 class="h6 text-white-op mb-15">
                                        <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info"><i class="fa fa-info text-info mr-5"></i>Details</button>                                        
                                        </h4>
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="history.php">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                                <img class="img-fluid options-item" src="assets/media/photos/logo3.jpg" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        
                                                                                <h4 class="h6 text-white-op mb-15">
                                        <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info"><i class="fa fa-info text-info mr-5"></i>Details</button>                                        
                                        </h4>
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="history.php">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                                <img class="img-fluid options-item" src="assets/media/photos/logo2.jpg" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        
                                                                                <h4 class="h6 text-white-op mb-15">
                                        <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info"><i class="fa fa-info text-info mr-5"></i>Details</button>                                        
                                        </h4>
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="history.php">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-zoom-in">
                                <img class="img-fluid options-item" src="assets/media/photos/logo1.jpg" alt="">
                                <div class="options-overlay bg-black-op">
                                    <div class="options-overlay-content">
                                        
                                                                                <h4 class="h6 text-white-op mb-15">
                                        <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info"><i class="fa fa-info text-info mr-5"></i>Details</button>                                        
                                        </h4>
                                        <a class="btn btn-sm btn-rounded btn-alt-primary min-width-75" href="history.php">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-alt-danger min-width-75" href="javascript:void(0)">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    </div>
                    <!-- END Options Zoom In -->


                </div>
            </div>

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
       
        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.min.js"></script>

 
    </body>
</html>