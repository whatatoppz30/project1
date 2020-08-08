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
                       <!--  <form action="be_pages_generic_search.html" method="post"> -->
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
                      <!--   </form> -->
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

                        <div class=""> <a href="iprecord_addmilestone.php?iprecordid=<?php echo $_GET['iprecordid'] ?>"><button type="button" class="btn btn-hero btn-info text-uppercase mb-10">
                                    <i class="fa fa-plus mr-5"></i>Add Milestone</button></a></div>  
<h3  >
                                    <?php 


$selectinventions1="SELECT * FROM `tbliprecord` WHERE iprecordid ='$_GET[iprecordid]'  ";
 $runselectinventions1=mysqli_query($conn, $selectinventions1);

$rowinventions1 = mysqli_fetch_assoc($runselectinventions1);

echo $rowinventions1['iprecodname'];
                             ?>
</h3>

                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">History</h3>
                        </div>

                        <div class="block-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                           <th class="text-center">MS</th>
                                        <th >Date Added</th>
                                        <th >Action</th>
                                        <th >Deadline</th>
                                        <th >Notification</th>
                                        <th >Status/Remarks</th>
                                        <th width="1%"></th>
                                        <th >Files</th>
                                        <!-- <th class="text-center"></th> -->
                                    </tr>
                                    </thead>
                                    <tbody>


                                          <?php 

$selectinventions="SELECT * FROM `tbliprecordlog` WHERE iprecordid ='$_GET[iprecordid]' ORDER BY iprecordlogid DESC ";
 $runselectinventions=mysqli_query($conn, $selectinventions);
$count=1;
 while ($rowinventions = mysqli_fetch_assoc($runselectinventions))
 {
    echo
    '
                                         <tr>
                                        <td class="text-center">MS '.$count++.'</td>
                                        <td class="text-center">'.$rowinventions['milestone'].'</td>
                                        <td>'.strtoupper($rowinventions['action']).'</td>';

if ($rowinventions['deadline']=='')
{
  echo  '<td>N/A</td>';
}
else
{
     echo '<td>'.$rowinventions['deadline'].'</td>';
                                       
}
if ($rowinventions['notification']=='')
{
  echo  '<td>N/A</td>';
}
else
{
     echo '<td>'.$rowinventions['notification'].'</td>';
}


                                      
                                       echo' <td><span class="badge "><a href="#">'.$rowinventions['status'].'</a></span></td>

                                       <td> 

                                        <a href="edit_iprecordlog.php?iprecordid='.$_GET['iprecordid'].'&tmlogid='.$rowinventions['iprecordlogid'].'">
                                       <span type="btn" class="btn btn-sm btn-secondary fa fa-pencil" title="info"></span>
                                        </a>
                                       </td>';




                                     
                                        echo '<td>
                                        <a href="iprecord_view_attachment.php?iprecordid='.$_GET['iprecordid'].'&iprecordlogid='.$rowinventions['iprecordlogid'].'"> <button onclick="location.href=details.php" type="button" class="btn btn-sm btn-secondary" title="info">View Attachment</button></a></td>  </tr>';
                                       










                                       
}


                                     ?>
                                        <!-- <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                                            </td>
                                            
                                            <td>Henry Harrison</td>
                                            <td class="font-w600">04/18/2020</td>
                                            <td>customer1@example.com</td>
                                            <td>
                                                <span class="badge badge-info">Approved</span>
                                            </td>
                                            <td class="text-center">
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



                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                                            <!--  <form action="include/all_query.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group row">
                                          

                                            <div class="col-3">
                                              <label class="col-form-label" for="val-name">Attach Documents / Files</label> 
                                            </div>



                                            <div class="col-7">
                                                <input type="file" id="inventiondoc" name="inventiondoc"  class="form-control form-control-lg" >
                                            </div>

                                            
                                            <input type="hidden" name="inventionid" id="inventionid" value="<?php echo $_GET['inventionid'] ?>">

                                            <div class="col-2">
                                               <button type="submit" name="saveinventiondocs" id="saveinventiondocs" class="btn btn-lg btn-alt-primary pull-right">Upload</button>
                                            </div>
                                           
                                        </div>
                                        

                </div>

</form> -->
                <!--  -->


                <!-- Page Content -->
            
                 <!-- Dynamic Table Full -->



                    <!-- END Dynamic Table Full -->
               <!--      <h2 class="content-heading">Documents / <small>Files</small></h2>

                    <div class="row"> -->

                        <?php 

//                            $slect="SELECT * FROM `tblinventiondocs` WHERE inventionid='$_GET[inventionid]' ";
//  $runslect=mysqli_query($conn, $slect);

//  while ($row = mysqli_fetch_assoc($runslect))
//  {
//     echo ' <div class="col-md-6 col-xl-3" data-category="claims">
//                                 <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
//                                     <div class="block-content block-content-full text-center">
//                                         <div class="item item-circle bg-info-light text-info mx-auto my-20">
//                                             <i class="fa fa-file-text-o"></i>
//                                         </div>
//                                         <div class="font-size-lg">'.$row['inventiondoc'].'</div>
//                                         <div class="font-size-sm text-muted">41</div>
//                                     </div>
//                                 </a>
//                             </div>';
// }



                         ?>
                        
                         <!--  
                            <div class="col-md-6 col-xl-3" data-category="patentreport">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-warning-light text-warning mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">Aliquam </div>
                                        <div class="font-size-sm text-muted">123</div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-md-6 col-xl-3" data-category="patentreport">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-warning-light text-warning mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">Nunc eu aliquam</div>
                                        <div class="font-size-sm text-muted">41 | 330 pages</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3" data-category="request">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-success-light text-success mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">Mauris commodo </div>
                                        <div class="font-size-sm text-muted">42 | 384 kbps</div>
                                    </div>
                                </a>
                            </div> -->
                            
                        </div>
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