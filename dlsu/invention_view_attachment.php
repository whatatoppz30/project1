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
                            <h3 class="block-title">Attachment/s</h3>
                        </div>

                        <div class="block-content block-content-full">
                            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            
                       




                                            <div class="row">

                        <?php




      $slect="SELECT * FROM `tblinventionlog` WHERE inventionid ='$_GET[inventionid]' AND inventionlogid ='$_GET[inventionlogid]'";
 $runslect=mysqli_query($conn, $slect);

 while ($row = mysqli_fetch_assoc($runslect))
 {

    if ($row['action'] =='CREATED')
    {
       echo ' <div class="col-md-6 col-xl-3" data-category="claims">
                                <a class="block block-rounded block-link-shadow"  href="assets/media/photos/'.$row['relevantdoc'].'" download>
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-info-light text-info mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">'.$row['relevantdoc'].'</div>
                                        <div class="font-size-sm text-muted">-</div>
                                    </div>
                                </a>
                            </div>';
    }

    else
    {
           $slect="SELECT * FROM `tblinventiondocs` WHERE inventionid='$_GET[inventionid]' AND logid='$_GET[inventionlogid]' AND inventiondoc !=''";
 $runslect=mysqli_query($conn, $slect);

 while ($row = mysqli_fetch_assoc($runslect))
 {
    echo ' <div class="col-md-6 col-xl-3" data-category="claims">
                                <a class="block block-rounded block-link-shadow"  href="assets/media/photos/'.$row['inventiondoc'].'" download>
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-info-light text-info mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">'.$row['inventiondoc'].'</div>
                                        <div class="font-size-sm text-muted">-</div>
                                    </div>
                                </a>
                            </div>';
} 
    }

 }



//                        


                                     ?>


 <?php 

 //                           $slect="SELECT * FROM `tbltrademarklog` WHERE trademarkid='$_GET[tmid]' AND relevantdoc !=''";
 // $runslect=mysqli_query($conn, $slect);

 // while ($row = mysqli_fetch_assoc($runslect))
 // {
 //    echo ' <div class="col-md-6 col-xl-3" data-category="claims">
 //                                <a class="block block-rounded block-link-shadow" href="assets/media/photos/'.$row['relevantdoc'].'" download>
 //                                    <div class="block-content block-content-full text-center">
 //                                        <div class="item item-circle bg-info-light text-info mx-auto my-20">
 //                                            <i class="fa fa-file-text-o"></i>
 //                                        </div>
 //                                        <div class="font-size-lg">'.$row['relevantdoc'].'</div>
 //                                        <div class="font-size-sm text-muted">41</div>
 //                                    </div>
 //                                </a>
 //                            </div>';
//}


                                     ?>
                                 </div>
                                   
                                      <!--   <td>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                        </td> -->
                                   

                                    <!-- <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">MS 1 </td>
                                        <td>Submit to IPOPHL   </td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td><span class="badge badge-success"><a href="#">Approved</a></span></td>
                                        <td> <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info">Vivamus bibendum</button></td>
                                        <td>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">MS 1 </td>
                                        <td>Submit to IPOPHL   </td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td><span class="badge badge-light"><a href="#">In-Process</a></span></td>
                                        <td> <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info">Vivamus bibendum</button></td>
                                        <td>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">MS 1 </td>
                                        <td>Submit to IPOPHL   </td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td><span class="badge badge-success"><a href="#">Approved</a></span></td>
                                        <td> <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info">Vivamus bibendum</button></td>
                                        <td>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">5</td>
                                        <td class="text-center">MS 1 </td>
                                        <td>Submit to IPOPHL   </td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td><span class="badge badge-success"><a href="#">Approved</a></span></td>
                                        <td> <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info">Vivamus bibendum</button></td>
                                        <td>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">6</td>
                                        <td class="text-center">MS 1 </td>
                                        <td>Submit to IPOPHL   </td>
                                        <td>Yes</td>
                                        <td>Yes</td>
                                        <td><span class="badge badge-success"><a href="#">Approved</a></span></td>
                                        <td> <button onclick="location.href='details.php'" type="button" class="btn btn-sm btn-secondary" title="info">Vivamus bibendum</button></td>
                                        <td>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                        </td>
                                    </tr> -->


                        
                        </div>
                    </div>
                    <!-- END Dynamic Table Full -->
                    <!-- END IP table -->
                </div>
                <!-- END Page Content -->

                <!-- Normal Modal -->
                <div class="modal" id="modal-normal" tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Title goes here</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                        <p>Nunc sed leo eget urna placerat congue aliquet sit amet lectus. Sed consequat purus a nunc vestibulum commodo. Integer dapibus consectetur faucibus.</p> 
                        <p>Donec est ex, laoreet in aliquam nec, consectetur ac mauris. Donec dapibus, velit eget iaculis lacinia, diam neque viverra augue, a auctor sapien ligula et mauris. Pellentesque eros nunc, placerat et luctus vel, viverra sit amet lacus. Suspendisse felis felis, ultricies vehicula eleifend convallis, venenatis non orci. Donec porttitor a nisi vitae facilisis. Curabitur pretium tincidunt massa bibendum ullamcorper. Pellentesque luctus consequat nulla eu tincidunt.</p>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- END Normal Modal -->

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