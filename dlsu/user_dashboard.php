<?php
session_start();
ob_start();
include 'include/db.php';


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
        <link rel="stylesheet" href="assets/js/plugins/fullcalendar/fullcalendar.min.css">

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/custom.css">

        
        <!-- END Stylesheets -->
    </head>
    <body onload="eventCalendar()">


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
                        <form action="#" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
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
         
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-md-3 col-xl-3">
                            <a class="block text-center" href="ip-records.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    <div class="ribbon-box">
                                        <?php 
$x="SELECT * FROM `tbliprecord`";
$runx=mysqli_query($conn, $x);

echo mysqli_num_rows($runx);

                                     ?></div>
                                    <p class="mt-5">
                                        <i class="si si-book-open fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">IP RECORDS</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-xl-3">
                            <a class="block text-center" href="inventions.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                                    <div class="ribbon-box">
                                         <?php 
$x1="SELECT * FROM `tblinventions`";
$runx1=mysqli_query($conn, $x1);

echo mysqli_num_rows($runx1);

                                     ?>
                                    </div>
                                    <p class="mt-5">
                                        <i class="si si-chemistry fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">INVENTIONS</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-xl-3">
                            <a class="block text-center" href="trademarks.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                                    <div class="ribbon-box">
                                         <?php 
$x2="SELECT * FROM `tbltrademark`";
$runx2=mysqli_query($conn, $x2);

echo mysqli_num_rows($runx2);

                                     ?>
                                    </div>
                                    <p class="mt-5">
                                        <i class="fa fa-trademark fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">TRADEMARKS</p>
                                </div>
                            </a>
                        </div>


                             <div class="col-6 col-md-3 col-xl-3">
                            <a class="block text-center" href="copyrights.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-sea">
                                    <div class="ribbon-box">
                                         <?php 
$x2="SELECT * FROM `tblwork`";
$runx2=mysqli_query($conn, $x2);

echo mysqli_num_rows($runx2);

                                     ?>
                                    </div>
                                    <p class="mt-5">
                                        <i class="fa fa-copyright fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">COPYRIGHTS</p>
                                </div>
                            </a>
                        </div>



                    <!--     <div class="col-6 col-md-3 col-xl-3">
                            <a class="block text-center" href="copyrights.php">
                                <div class="block-content bg-gd-lake">
                                    <p class="mt-5">
                                        <i class="fa fa-copyright fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">COPYRIGHTS</p>
                                </div>
                            </a>
                        </div> -->
                        
                        <!-- END Row #1 -->
                    </div>
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        
                        <!-- <div class="col-12 col-md-4 col-xl-4">
                            <a class="block text-center" href="other-ips.php">
                                <div class="block-content bg-gd-lake">
                                    <p class="mt-5">
                                        <i class="fa fa-random fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">OTHER IPS</p>
                                </div>
                            </a>
                        </div> -->

                        <div class="col-12 col-md-4 col-xl-4">
                            <a class="block text-center" href="other-ips.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-lake">
                                    <div class="ribbon-box">
                                         <?php 
$x5="SELECT * FROM `tblotherip`";
$runx5=mysqli_query($conn, $x5);

echo mysqli_num_rows($runx5);

                                     ?>
                                    </div>
                                    <p class="mt-5">
                                        <i class="fa fa-random fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">OTHER IPS</p>
                                </div>
                            </a>
                        </div>







                         <div class="col-12 col-md-4 col-xl-4">
                            <a class="block text-center" href="copyrights.php">
                                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-emerald">
                                    <div class="ribbon-box">
                                         <?php 
$x4="SELECT * FROM `tblpartner`";
$runx4=mysqli_query($conn, $x4);

echo mysqli_num_rows($runx4);

                                     ?>
                                    </div>
                                    <p class="mt-5">
                                        <i class="fa fa-group fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">INNOVATION PARTNERS</p>
                                </div>
                            </a>
                        </div>




                      <!--   <div class="col-12 col-md-4 col-xl-4">
                            <a class="block text-center" href="partners.php">
                                <div class="block-content bg-gd-emerald">
                                    <p class="mt-5">
                                        <i class="fa fa-group fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">INNOVATION PARTNERS</p>
                                    
                                </div>
                            </a>
                        </div> -->
                        <div class="col-12 col-md-4 col-xl-4">
                            <a class="block text-center" href="awareness-activity.php">
                                <div class="block-content bg-gd-corporate">
                                    <p class="mt-5">
                                        <i class="fa fa-adjust fa-3x text-white-op"></i>
                                    </p>
                                    <p class="font-w600 text-white">ACTIVITIES</p>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        
                        
                            <!-- Schedules -->
                    <div class="col-xl-8">
                                    <!-- Calendar Container -->
                                    <div class="js-calendar"></div>
                                </div>
                    <!-- END Schedules -->
                        
                        <div class="col-xl-4 align-items-stretch">
                            <div class="block block-transparent notificationHome d-flex align-items-center w-100">
                                <div class="card card-info block-content">
            <div class="card-header">
              <h5 class="card-title"><a href="reminders.php">REMINDERS / NOTIFICATIONS</a></h5>

            </div>
            <div class="card-body p-0">

            <h5>Schedules</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th>Titles</th>
                    <th>Details</th>
                    <th class="eventDate" width="1%" nowrap="">Date</th>
                  </tr>
                </thead>
                <tbody>

                    <?php 


                    $slect="SELECT * FROM `tblevent` WHERE status =0  ORDER BY eventid ASC";
 $runslect=mysqli_query($conn, $slect);

 while ($row = mysqli_fetch_assoc($runslect))
 {
    echo'  <tr>';
    echo '<td><a href="schedules.php">'.$row['eventname'].'</a></td>';
    echo '<td></td>';
    echo '<td width="1%" nowrap="">'.$row['eventdate'].'</td>';
    echo' </tr>';
 }


                    $slect="SELECT * FROM `tblactivity`";
 $runslect=mysqli_query($conn, $slect);

 while ($row = mysqli_fetch_assoc($runslect))
 {
    echo'  <tr>';
    echo '<td><a href="awareness-activity.php">'.strtoupper($row['activityname1']).'</a></td>';
    echo '<td>'.strtoupper($row['activityname']).'</td>';
    echo '<td width="1%" nowrap="">'.$row['activitydate'].'</td>';
    echo' </tr>';
 }



                     ?>
                
                    
                    
              
                </tbody>
              </table>

                <h5>Patents</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th>Titles</th>
                    <th>Action</th>
                    <th>Deadline</th>
                  </tr>
                </thead>
                <tbody>
                                    <?php 

$selectinventions="SELECT * FROM `tblinventions`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 while ($rowinventions = mysqli_fetch_assoc($runselectinventions))
 {

    echo ' <tr>

                                        <td class="text-center">'.$rowinventions['inventiontitle'].'</td>';

$x="SELECT * FROM `tblinventionlog` WHERE inventionid='$rowinventions[inventionid]' ORDER BY inventionlogid DESC limit 1";
$runx=mysqli_query($conn, $x);
$rowx = mysqli_fetch_assoc($runx);
                                      echo '  
                                        <td class="font-w600">'.$rowx['status'].'</td>';


                                        echo '
                                        <td class="d-none d-sm-table-cell">';
if ($rowx['deadline']=='')
{
    echo 'N/A';
}
else
{
    echo $rowx['deadline'];
}
                                        echo'</td>
                                        


                                    </tr>';
 }
    

                                     ?>

                  <!-- <tr>
                    <td>Phasellus</td>
                    <td>03-3-2020</td>
                    <td>03-3-2021</td>
                    <td>364 days</td>
                </tr>
                  <tr>
                    <td>Phasellus</td>
                    <td>03-3-2020</td>
                    <td>03-3-2021</td>
                    <td>364 days</td>
                </tr> -->
                </tbody>
              </table>

              <h5>Trademark</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th>Titles</th>
                    <th>Actions</th>
                    <th>Deadline</th>
                 
                  </tr>
                </thead>
                
                <tbody>


                                                   <?php 

$selectinventions1="SELECT * FROM `tbltrademark`";
 $runselectinventions1=mysqli_query($conn, $selectinventions1);

 while ($rowinventions1 = mysqli_fetch_assoc($runselectinventions1))
 {

    echo ' <tr>

                                        <td class="text-center">'.$rowinventions1['marktitle'].'</td>';

$x="SELECT * FROM `tbltrademarklog` WHERE trademarkid='$rowinventions1[trademarkid]' ORDER BY trademarklog DESC limit 1";
$runx=mysqli_query($conn, $x);
$rowx = mysqli_fetch_assoc($runx);

                                       echo ' <td class="font-w600">'.$rowx['status'].'</td>
                                        <td class="d-none d-sm-table-cell">';



if ($rowx['deadline']=='')
{
    echo 'N/A';
}
else
{
    echo $rowx['deadline'];
}


// $string1 = date('Y-m-d');
// $date1 = new DateTime($string1);
// $date1->add(new DateInterval('P5Y')); //60 Years 5 Months 2 Days 6 Hours 3 Minutes 25 Seconds
// $date1 = $date1->format('Y-m-d'); //output: 2060-06-03 06:03:25
// echo $date1;
                                        echo'</td>
                                       

                                    </tr>';
 }
    

                                     ?>
               
                 <!--  <tr>
                    <td>Phasellus</td>
                    <td>03-3-2020</td>
                    <td>03-3-2021</td>
                    <td>364 days</td>
                </tr>
                  <tr>
                    <td>Phasellus</td>
                    <td>03-3-2020</td>
                    <td>03-3-2021</td>
                    <td>364 days</td>
                </tr> -->
                </tbody>
              </table>




            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
                            </div>

                        </div>
                        <!-- END Row #3 -->

                    </div>
                    <div class="row gutters-tiny invisible" data-toggle="appear">




                        <table class="table table-sm table-bordered table-hover">
                                
                                <tr>
                                    <td class="text-center">
                                    <div class="block block-transparent bg-info">
                                        <div class="block-content block-content-full">
                                        <div class="mb-20">
                                            <i class="fa fa-clone fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h6 font-w600 text-white">PATENTS<br>DISCLOSED</div>

                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="patent-disclosed.php">
                                                <i class="fa fa-file-text-o mr-5"></i> <?php 

$selectinventions="SELECT * FROM `tblinventions`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 echo '0';



                                                 ?>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </td>


                                 <td class="text-center">
                                    <div class="block block-transparent bg-info">
                                        <div class="block-content block-content-full">
                                        <div class="mb-20">
                                            <i class="fa fa-object-group fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h6 font-w600 text-white">PATENTS<br>FILED</div>

                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="patents-applied.php">
                                                <i class="fa fa-file-text-o mr-5"></i> <?php 

 $selectinventions="SELECT * FROM `tblinventions`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 echo mysqli_num_rows($runselectinventions);



                                                 ?>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </td>

                                 <td class="text-center">
                                    <div class="block block-transparent bg-info">
                                        <div class="block-content block-content-full">
                                        <div class="mb-20">
                                            <i class="fa fa-certificate fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h6 font-w600 text-white">PATENTS<br>GRANTED</div>

                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="patents-registered.php">
                                                <i class="fa fa-file-text-o mr-5"></i> <?php 

  $selectinventions="SELECT * FROM `tblinventions`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 echo mysqli_num_rows($runselectinventions);



                                                 ?>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                 <td class="text-center">
                                    <div class="block block-transparent bg-info">
                                        <div class="block-content block-content-full">
                                        <div class="mb-20">
                                            <i class="fa fa-paperclip fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h6 font-w600 text-white">TRADEMARKS<br>APPLIED</div>

                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="trademark-applied.php">
                                                <i class="fa fa-file-text-o mr-5"></i> <?php 

                                              $selectinventions="SELECT * FROM `tbltrademark`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 echo mysqli_num_rows($runselectinventions);


                                                 ?>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                 <td class="text-center">
                                    <div class="block block-transparent bg-info">
                                        <div class="block-content block-content-full">
                                        <div class="mb-20">
                                            <i class="fa fa-trademark fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h6 font-w600 text-white">TRADEMARKS<br>REGISTERED</div>

                                        <div class="pt-20">
                                              <a class="btn btn-rounded btn-alt-info" href="trademark_registered.php">
                                                <i class="fa fa-file-text-o mr-5"></i>     <?php 
                                                $selectinventions="SELECT * FROM `tbltrademark`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 echo mysqli_num_rows($runselectinventions);
                                                 ?>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                 <td class="text-center">
                                    <div class="block block-transparent bg-info">
                                        <div class="block-content block-content-full">
                                        <div class="mb-20">
                                            <i class="fa fa-tasks fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h6 font-w600 text-white">ACTIVITIES<br>CONDUCTED</div>

                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-info" href="activities_conducted.php">
                                                <i class="fa fa-file-text-o mr-5"></i>     <?php 
                                                $selectinventions="SELECT * FROM `tblactivity`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 echo mysqli_num_rows($runselectinventions);
                                                 ?>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                 <td class="text-center">
                                    <div class="block block-transparent bg-info">
                                        <div class="block-content block-content-full">
                                        <div class="mb-20">
                                            <i class="fa fa-group fa-4x text-info-light"></i>
                                        </div>
                                        <div class="font-size-h6 font-w600 text-white">INNOVATION<br>PARTNERS</div>

                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-info" href="innovation-analytic.php">
                                                <i class="fa fa-file-text-o mr-5"></i>      <?php 
                                                $selectinventions="SELECT * FROM `tblpartner`";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 echo mysqli_num_rows($runselectinventions);
                                                 ?>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                </tr>


                        </table>


                        <!-- Row #4 -->

                      
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
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <script src="assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/moment/moment.min.js"></script>
        <script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

        <!-- Page JS Code -->
        <!-- <script src="assets/js/pages/be_comp_calendar.min.js"></script> -->

        <!-- Page JS Code -->
       <!--  <script src="assets/js/pages/be_pages_dashboard.min.js"></script> -->
    </body>
</html>



<script type="text/javascript">
   
 /*!
 * Codebase - v3.3.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2020
 */





function  eventCalendar()
{
! function (e) {
    var t = {};

    function n(r) {
        if (t[r]) return t[r].exports;
        var a = t[r] = {
            i: r,
            l: !1,
            exports: {}
        };
        return e[r].call(a.exports, a, a.exports, n), a.l = !0, a.exports
    }
    n.m = e, n.c = t, n.d = function (e, t, r) {
        n.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: r
        })
    }, n.r = function (e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, n.t = function (e, t) {
        if (1 & t && (e = n(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var r = Object.create(null);
        if (n.r(r), Object.defineProperty(r, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var a in e) n.d(r, a, function (t) {
                return e[t]
            }.bind(null, a));
        return r
    }, n.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return n.d(t, "a", t), t
    }, n.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, n.p = "", n(n.s = 2)
}([, , function (e, t, n) {
    e.exports = n(3)
}, function (e, t) {
    function n(e, t) {
        for (var n = 0; n < t.length; n++) {
            var r = t[n];
            r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
        }


    }
    var r = function () {
        function e() {
            ! function (e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e)
        }
        var t, r, a;
        return t = e, a = [{
            key: "addEvent",
            value: function () {
                var e = this,
                    t = jQuery(".js-add-event"),
                    n = "";
                jQuery(".js-form-add-event").on("submit", (function (r) {
                    return (n = t.prop("value")) && (jQuery(".js-events").prepend("<li>" + jQuery("<div />").text(n).html() + "</li>"), t.prop("value", ""), e.initEvents()), !1
                }))
            }
        }, {
            key: "initEvents",
            value: function () {
                jQuery(".js-events").find("li").each((function (e, t) {
                    var n = jQuery(t),
                        r = {
                            title: jQuery.trim(n.text()),
                            color: n.css("background-color")

                        };
                    n.data("eventObject", r), n.draggable({
                        zIndex: 999,
                        revert: !0,
                        revertDuration: 0
                    })
                }))


            }
        }, {
            key: "initCalendar",
            value: function () {
                var e = new Date(),
                    t = e.getDate(),
                    n = e.getMonth(),
                    r = e.getFullYear();
                    
                jQuery(".js-calendar").fullCalendar({
                    firstDay: 1,
                    editable: !0,
                    droppable: !0,
                    header: {
                        left: "title",
                        right: "prev,next today month,agendaWeek,agendaDay,listWeek"
                    },
                    drop: function (e, t, n, r) {
                        var a = jQuery(n.helper),
                            i = a.data("eventObject"),
                            l = jQuery.extend({}, i);
                        l.start = e, jQuery(".js-calendar").fullCalendar("renderEvent", l, !0), a.remove()
                        
                       

                    },
                    events: <?php

$slect="SELECT * FROM `tblevent` WHERE status =0  ORDER BY eventid DESC";
 $runslect=mysqli_query($conn, $slect);
echo '[';

 while ($row = mysqli_fetch_assoc($runslect))
 {

     $eventday = $row['eventdate'];

    $eventday =explode('-', $eventday);


echo '{title: "'.strtoupper($row['eventname']).'",
start: new Date(r, n,'.$eventday[2].'),allDay: !0,backgroundColor :"#ff6e6e"},';
 }



$slect="SELECT * FROM `tblactivity`";
 $runslect=mysqli_query($conn, $slect);


 while ($row = mysqli_fetch_assoc($runslect))
 {

     $eventday = $row['activitydate'];

    $eventday =explode('-', $eventday);

 
echo '{title: "'.strtoupper($row['activityname1']).'",
start: new Date(r, n,'.$eventday[2].'),allDay: !0,backgroundColor :"#ff6e6e"},';
 }
echo ']';

                        ?>
      

                })

            }
        }, {
            key: "init",
            value: function () {
                this.addEvent(), this.initEvents(), this.initCalendar()
            }
        }], (r = null) && n(t.prototype, r), a && n(t, a), e
    }();
    jQuery((function () {
        r.init()
    }))
}]);

}

</script>