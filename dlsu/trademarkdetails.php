<?php
session_start();
ob_start();
include 'include/db.php';
//

$selectinventions="SELECT * FROM `tbltrademark` WHERE trademarkid ='$_GET[tmid]'";
 $runselectinventions=mysqli_query($conn, $selectinventions);
$rowinventions = mysqli_fetch_assoc($runselectinventions);
 

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
                    <div class="block" id="formBlock">
                       
                        <div class="block-content block-content-full">
                                                  
                            <!-- Default Elements -->
                            <div class="block-header block-header-default">
                            <h3 class="block-title"><?php echo $rowinventions['marktitle'] ?></h3>                            
                        </div>
                            <div class="block">
                                
                                <div class="block-content">
                            

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">1. Applicant</label>
                                                <input type="text" class="form-control form-control-lg" id="trademarkapplicant" name="trademarkapplicant" value="<?php echo $rowinventions['trademarkapplicant']  ?>" required="" readonly="">

                                                
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                          
                                            <div class="col-3">
                                               
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" checked="" value="NATURAL" readonly="">
                                                <span class="css-control-indicator"></span> Natural
                                            </label>
                                           <!--  <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL" readonly="">
                                                <span class="css-control-indicator" ></span>Juridical
                                            </label> -->
                                            </div>


                                            <div class="col-9">
                                                <input type="text" class="form-control form-control-lg" id="countryofresidence" name="countryofresidence" pvalue="<?php echo $rowinventions['countryofresidence']  ?>" required="" readonly="">
                                            </div>

                                        </div>


                                         <div class="form-group row">
                                            <div class="col-12">
                                                <input type="text" class="form-control form-control-lg" id="completeaddress" name="completeaddress" value="<?php echo $rowinventions['completeaddress']  ?>" required="" readonly="">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                          
                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" id="telephone" name="telephone" value="<?php echo $rowinventions['telephone']  ?>" required="" readonly="">
                                            </div>

                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" id="fac" name="fac"required="" readonly="" value="<?php echo $rowinventions['fac']  ?>">
                                            </div>

                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" id="email" name="email" required="" readonly="" value="<?php echo $rowinventions['email']  ?>">
                                            </div>

                                        </div>


                                         <div class="form-group row">
                                            <div class="col-sm-12 col-lg-12">
                                                <label class="col-form-label" for="val-name">Name of Other Applicants <br>(if any)</label>
                                              <!--   <input type="text" class="form-control form-control-lg" id="apllicant1" name="apllicant1" placeholder="Full Name"> -->
                                            </div>



                                 
                                        </div>



                                             <div class="col-sm-12 col-lg-12">
                                                <?php 
                                                $select="SELECT * FROM `tbltmapplicant` WHERE tmid ='$_GET[tmid]'";
                                                $runselect=mysqli_query($conn, $select);
                                                $count=1;
                                                while ($row=mysqli_fetch_assoc($runselect))
                                                {

                                                    echo '<div class="form-group row">';
                echo '<div class="col-sm-1 col-lg-1"><h6 class="text-left" style="margin-top:20px;">'.$count++.'.</h6></div>';


                                                  echo '<div class="col-sm-11 col-lg-11"><input type="text" class="form-control form-control-lg" id="trademarkapplicant" name="trademarkapplicant" value="'.strtoupper($row['applicantname']).'" required="" readonly="" style="margin-top:5px;"></div>';
                                                    echo '</div>';

                                                }

                                                 ?>
                                            </div>



                                     



                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">2. Resident Agent or Authorized Representatives</label>
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                                 <div class="col-6">
                                                <input type="text" class="form-control form-control-lg" id="agent" name="agent"  required="" readonly="" value="<?php echo $rowinventions['agent']  ?>">
                                                     </div>

                                                      <div class="col-6">
                                                <input type="text" class="form-control form-control-lg" id="agentcode" name="agentcode"  required="" readonly="" value="<?php echo $rowinventions['agentcode']  ?>">
                                                     </div>
                                            </div>


                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input type="text" class="form-control form-control-lg" id="agentaddress" name="agentaddress" required="" readonly="" value="<?php echo $rowinventions['agentaddress']  ?>">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input type="text" class="form-control form-control-lg" id="authorizedagent" name="authorizedagent" required="" readonly="" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input type="text" class="form-control form-control-lg" id="authoaddress" name="authoaddress"  required="" readonly="" value="<?php echo $rowinventions['authoaddress']  ?>">
                                            </div>
                                        </div>


                                         <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">3. Address for service of correspondence in the Philippines</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                          
                                            <div class="col-12">
                                               
                                              <label class="css-control css-control-lg css-control-primary css-radio">
                                                <i>please check one : </i>
                                            </label>
                                             
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="correspondingaddress" id="correspondingaddress" checked="" value="<?php echo $rowinventions['correspondingaddress']  ?>" readonly="">
                                                <span class="css-control-indicator"></span> Applicant's Address
                                            </label>
                                           <!--  <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="correspondingaddress" id="correspondingaddress" value="AGENT" readonly="">
                                                <span class="css-control-indicator"></span>Agent's Address
                                            </label>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="correspondingaddress" id="correspondingaddress" value="AUTHORIZED" readonly="">
                                                <span class="css-control-indicator"></span>Authorized Representatives Adress
                                            </label> -->
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                          
                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" id="correstel" name="correstel"  required="" readonly="" value="<?php echo $rowinventions['correstel']  ?>">
                                            </div>

                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" id="corresfac" name="corresfac"  required="" readonly="" value="<?php echo $rowinventions['corresfac']  ?>">
                                            </div>

                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" id="corresemail" name="corresemail"  required="" readonly="" value="<?php echo $rowinventions['corresemail']  ?>">
                                            </div>

                                        </div>


                                         <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">4. The Mark (<i>Place a copy of mark in the box. The mark should be clear enough to be reproducted and digitized</i>)</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-3">
                                                <img id="blah" height="200" src="assets/media/photos/<?php echo $rowinventions['trademarklogo'] ?>" alt="Trademark Logo" h/>
                                            </div>

                                            <div class="col-9">
                                                    <input type="text" class="form-control form-control-lg" id="marktitle" name="marktitle"  required="" readonly="" value="<?php echo $rowinventions['marktitle']  ?>">

                                                    <textarea class="form-control form-control-lg" id="markdes" name="markdes" rows="6"  readonly=""><?php echo $rowinventions['markdes']  ?></textarea>
                                            </div>


                                        </div>



                                            <div class="form-group row">
                                           
                                                <div class="col-lg-6">
                                                    <a href="assets/media/photos/<?php echo $rowinventions['trademarklogo'] ?>" download>
                                                    <button type="" name="savetrademark" class="btn btn-lg btn-alt-primary pull-left">Download Logo</button>
                                                </a>
                                                </div>

                                                 <div class="col-lg-6">



                                                    <?php 

                                                    $select1="SELECT * FROM `tbltmmilestonefile` WHERE tmlogid='$_GET[tmid]'";
                                                     $runselect1=mysqli_query($conn, $select1);

                                            $count=1;
                                                while ($row1=mysqli_fetch_assoc($runselect1))
                                                {
                                                    


                                                    echo '<a href="assets/media/photos/'.$row1['attactment'].'" id="'.$count.'" download></a>';
                                                    $count++;
                                                }
                                                    ?>


                                                    <input type="hidden" value="<?php echo $count ?>" name="attachcount" id="attachcount">
                                               

                                                

                                          












                                                 
                                                 
                                                    <button type="" name="savetrademark" onclick="downloadFiles()" class="btn btn-lg btn-alt-primary pull-right">Download Attached File</button>
                                             

                                                </div>
                                             </div>


                                        
                          
                                            
                                  
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


    </body>
</html>


<script>
    function downloadFiles()
    {
        var count = $('#attachcount').val();
      


        for(var x=1;x<=4;x++)
        {
            document.getElementById(x).click();
        }

  }
  </script>