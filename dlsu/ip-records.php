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
                    <div class="block-content" id="formBlock">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">IP Records</h3>
                        </div>
                        <div class="block-content block-content-full">


                            <div class=""><button type="button" class="btn btn-hero btn-info text-uppercase mb-10" onclick="window.location.href = 'add_iprecord.php';">
                                    <i class="fa fa-plus mr-5"></i>Create New</button></div>
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full ip-records">
                             <thead>
                                    <tr>
                                        <th class="text-center" width="1%" nowrap="">Tracking No.</th>
                                        <th class="text-center">Title</th>
                                        <th style="width: 15%;">Date Added</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Corresponding Inventor</th>
                                        <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                                                 <?php 

$selectinventions="SELECT * FROM `tbliprecord`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 while ($rowinventions = mysqli_fetch_assoc($runselectinventions))
 {

    echo ' <tr>
                                        <td class="text-center">'.$rowinventions['trackingno'].'</td>
                                        <td class="text-center"><a href="iprecord_details.php?iprecordid='.$rowinventions['iprecordid'].'">'.$rowinventions['iprecodname'].'</a></td>
                                        <td class="font-w600">'.$rowinventions['datecreated'].'</td>
                                        <td class="d-none d-sm-table-cell">';




$y="SELECT * FROM `tbliprecordcontributor` WHERE iprecordid='$rowinventions[iprecordid]'";
$runy=mysqli_query($conn, $y);
while($rowy = mysqli_fetch_assoc($runy))
{
echo $rowy['contributorname'].', ';
}


                                        echo'</td>
                                        <td class="d-none d-sm-table-cell">';



$x="SELECT * FROM `tbliprecordlog` WHERE iprecordid='$rowinventions[iprecordid]' ORDER BY iprecordlogid DESC limit 1";
$runx=mysqli_query($conn, $x);
$rowx = mysqli_fetch_assoc($runx);


                                    echo '<span class="badge badge-light">'.$rowx['status'].'</span>
                                        </td>

                                    </tr>';
 }
    

                                     ?>

                                   <!--  <tr>
                                        <td class="text-center">1</td>
                                        <td class="font-w600">04/02/20200</td>
                                        <td class="d-none d-sm-table-cell">0001</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info"><a href="dipo-form02.php">Maecenas efficitur</a></span>
                                        </td> -->
                                        <!-- <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="font-w600">04/02/20200</td>
                                        <td class="d-none d-sm-table-cell">0002</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info"><a href="dipo-form02.php">Suspendisse condimentum</a></span>
                                        </td>
                                         <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="font-w600">04/02/20200</td>
                                        <td class="d-none d-sm-table-cell">0003</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info"><a href="dipo-form02.php">Maecenas efficitur</a></span>
                                        </td>
                                         <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="font-w600">04/02/20200</td>
                                        <td class="d-none d-sm-table-cell">0004</td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-info"><a href="dipo-form02.php">Maecenas efficitur</a></span>
                                        </td>
                                         <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                                <i class="fa fa-user"></i>
                                            </button>
                                        </td>
                                    </tr> -->
                                    
                                    
                                </tbody>
                            </table>
                        </div>
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
    </body>
</html>