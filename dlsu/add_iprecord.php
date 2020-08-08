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
                    <div class="block" id="formBlock">
                       <form action="include/all_query.php" method="post" enctype="multipart/form-data"> 
                        <div class="block-content block-content-full dipoform02">
                            
                             <h2 class="content-heading float-right">Form DIPO-01</h2>

                            
                                        
                             </div>

                             <div class="text-center">
                             <h4>De La Salle University<br>
Intellectual Property Record Form <br>
(CONFIDENTIAL) </h4></div>


 <div class="form-group row">
                                <div class="col-5 offset-7">
                               <input type="text" class="form-control form-control-lg" placeholder="Tracking No." name="trackingno" id="trackingno">     
                                </div>
                                </div>

<div id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="block blockheading block-rounded mb-2">
                                    <div class="block-header" role="tab" id="accordion_h1">
                                        <a class="font-w600" data-toggle="collapse" data-parent="#accordion" href="#accordion_q1" aria-expanded="true" aria-controls="accordion_q1"><i class="fa fa-arrow-down"></i> INSTRUCTIONS </a>
                                    </div>
                                    <div id="accordion_q1" class="collapse " role="tabpanel" aria-labelledby="accordion_h1" data-parent="#accordion">
                                        <div class="block-content">
                                            <p>The purpose of this  DLSU  Record of Invention  and Assignment of Intellectual Property 
Form is to record  the creation of  University-owned  intellectual property  of university 
employees  and students  and  the circumstances under which it  was  created,  or other 
intellectual property assigned to the University.  It provides  a written record of the 
invention to the DLSU  Intellectual Property Office  (DIPO)  about  patentability,  possible 
drafting of a patent application, commercialization and/or for registering a mark or a work 
protected by copyright. </p>

<p>This DLSU Record of Invention and Assignment of Intellectual Property Form  should be 
completed when  an intellectual property  has been developed or created by university 
employees and students pursuant to the Intellectual Property Policies of the University, or 
when a university employee  or student  seeks the assistance of the University in 
patenting/registering and/or commercializing the intellectual property. Royalties derived 
from any use, publication, license or any other exploitation of the intellectual property will 
be shared with the creator(s) in accordance with the implementing rules and regulations of 
the DLSU Intellectual Property Policies. </p>

<p> 
This form shall be accomplished when the intellectual property is owned by the university 
or when the inventor assigns his intellectual property rights to the University.   The 
assignment of intellectual  property contained in this form seeks to formalize this 
ownership of the university. </p>

<p>It is important to identify all the individuals who contributed to the conception or 
development of the invention.  Inventorship is not the same as ownership of the intellectual 
property, as the latter will be determined according to the Intellectual Property Code of the 
Philippines (RA 8293) and related laws, the DLSU IP Policies, or by agreement of the 
parties.  </p>
<p>Once the form is signed by the  inventor(s)/contributor(s), the form and supporting 
documents should then be submitted to the Vice Chancellor for Research, who is also the 
Chair of the University Committee on  Intellectual Property (UCIP), and copy furnished the 
Director of the DIPO. </p>

<p>The DLSU Record of Invention and Assignment of Intellectual Property Form  is treated as
confidential information. All persons engaged in the evaluation, recording and processing
of the intellectual property shall not divulge any information  to others without the
permission of the University. </p>
 
 
<p>Unless otherwise indicated herein, the requirements to disclose information about the 
intellectual  property in this disclosure  this disclosure form applies to patents, utility 
models, industrial designs and similar forms of intellectual property, except copyright.  </p>
 
 
<p>To fully and properly evaluate the invention, the DIPO must receive all relevant documents
(tables, charts, drawings, concept paper, presentations, etc.).  Incomplete submissions may
cause delay in the processing of your invention.  Please do not modify the form.  If a 
question does not apply, please mark “N/A”. </p>
 
 
<p>For any additional information, please contact the DLSU Intellectual Property Office (DIPO)
(dipo@dlsu.edu.ph), or the DLSU Innovation & Technology Office (DITO) (dito@dlsu.edu.ph) </p>
                                        </div>
                                    </div>
                                </div>
                              
                              
                            </div>
                        
                            <!-- Default Elements -->
                            <div class="block">
                                
                                <div class="block-content">
                                   

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">1. PROPOSED TITLE</label>

                                            
                                                <textarea class="form-control form-control-lg" id="iprecodname" name="iprecodname" rows="6" placeholder="(Invention, Utility Model, Industrial Design, etc.) " required=""></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">2. PROJECT CONTRIBUTOR(S) (Provide the following information on the individuals who will work on the project. The list includes the project proponent, and any co-proponents.) </label>
                                        </div>
                                        </div>
                                            
                                            
                                        <div class="form-group row">

                                        
                                           
                                               <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-lg" id="contributorname1" name="contributorname1" placeholder="1. Contributor (Full Name)">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="email1" name="email1" placeholder="E-mail">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="department1" name="department1" placeholder="Department/Unit">
                                            </div>

                                            <div class="col-sm-2">
                                                <input type="text" class="form-control form-control-lg" id="position1" name="position1" placeholder="Position">
                                            </div> 

                                            <p style="margin-top: 30px"></p>

                                            <!-- contributor2 -->
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-lg" id="contributorname2" name="contributorname2" placeholder="2. Contributor (Full Name)">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="email2" name="email2" placeholder="E-mail">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="department2" name="department2" placeholder="Department/Unit">
                                            </div>

                                            <div class="col-sm-2">
                                                <input type="text" class="form-control form-control-lg" id="position2" name="position2" placeholder="Position">
                                            </div> 



                                             <p style="margin-top: 30px"></p>

                                            <!-- contributor3 -->
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-lg" id="contributorname3" name="contributorname3" placeholder="3. Contributor (Full Name)">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="email3" name="email3" placeholder="E-mail">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="department3" name="department3" placeholder="Department/Unit">
                                            </div>

                                            <div class="col-sm-2">
                                                <input type="text" class="form-control form-control-lg" id="position3" name="position3" placeholder="Position">
                                            </div> 

                                                
                                            </div>



                                            <div id="applicantdiv">
                                                


                                            </div>



                                            <div class="form-group row">
                                            <div class="col-12">
                                                <span class="btn btn-lg btn-alt-primary pull-right fa fa-plus-circle" style="margin-top: 5px;" onclick="addapplicantip()"> Add Applicant</span>
                                            </div>
                                            </div>
                                        

                                        
                                            <input type="hidden" name="applicantcount" id="applicantcount">
                                        

                                       
                                       
                                       <!--  -->


                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">3. FUNDING SOURCES. Provide the list of all entities or individuals that have agreed to provide funds for materials, equipment, salaries of personnel, and other expenses in the conduct of the project in the table below.</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                        <div class="col-3">
                                        <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">Funding Source/Sponsor</label>
                                        </div>

                                    <div class="col-3">
                                        <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">Contract No. / Grant No.</label>
                                    </div>

                                     <div class="col-6">
                                          <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">Funding Source Sector</label>
                                    </div>
                                        </div>


                                        <!--  -->

                                        <div class="form-group row">
                                            <div class="col-3">
                                            <textarea class="form-control form-control-lg" >
                                                
                                            </textarea>
                                        </div>

                                          <div class="col-3">
                                            <textarea class="form-control form-control-lg" >
                                                
                                            </textarea>
                                        </div>

                                        <div class="col-6">
                                               
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" checked="" value="NATURAL">
                                                <span class="css-control-indicator"></span> DLSU
                                            </label>
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Government
                                            </label>
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Industry
                                            </label>
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Non-Profit
                                            </label>
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Other
                                            </label>
                                            </div>
                                        </div>




                                         <div class="form-group row">
                                            <div class="col-3">
                                            <textarea class="form-control form-control-lg" >
                                                
                                            </textarea>
                                        </div>

                                          <div class="col-3">
                                            <textarea class="form-control form-control-lg" >
                                                
                                            </textarea>
                                        </div>

                                        <div class="col-6">
                                               
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" checked="" value="NATURAL">
                                                <span class="css-control-indicator"></span> DLSU
                                            </label>
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Government
                                            </label>
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Industry
                                            </label>
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Non-Profit
                                            </label>
                                            <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="radio" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Other
                                            </label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">4. KEY EVENTS (please write NA if not applicable) </label>
                                            </div>

                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">A. Idea First Conceived (conception)  </label>
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control form-control-lg" placeholder="Date">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" placeholder="Remarks">
                                            </div>
                                        
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">B. Experimentation, if any (first reduction to practice) </label>
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control form-control-lg" placeholder="Date">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" placeholder="Remarks">
                                            </div>
                                        
                                        </div>

                                         <div class="form-group row">

                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">C. First publication (Invention or creative work) </label>
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control form-control-lg" placeholder="Date">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" placeholder="Remarks">
                                            </div>
                                        
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">D. First oral disclosure to the public  </label>
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control form-control-lg" placeholder="Date">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" placeholder="Remarks">
                                            </div>
                                        
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">E. If unpublished and undisclosed, provide the anticipated publication or
oral disclosure date and any submissions made for potential publication. </label>
                                            </div>
                                            <div class="col-4">
                                                <input type="date" class="form-control form-control-lg" placeholder="Date">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control form-control-lg" placeholder="Remarks">
                                            </div>
                                        
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">5.  PROBLEM STATEMENT. What problem does the project aim to solve? What questions does the project seek to answer?</label>
                                            </div>

                                            <div class="col-12">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="PROBLEM STATEMENT"></textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">6.  PROJECT OUTCOMES. What are the expected outcomes of this project? How do the expected outcomes address the problems / answer the questions stated in item 5 above?</label>
                                            </div>

                                            <div class="col-12">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="PROJECT OUTCOMES"></textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">7.  POTENTIAL INTELLECTUAL PROPERTY. Please use the checklist below to identify the intellectual property that might be generated from this project. You may check more than one box.</label>
                                            </div>
                                            <div class="col-12 block">
                                                 <div class="form-group row">    
                                                    <div class="col-4">
                                                        <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Machine or device
                                                      </label>
                                                      <br> 

                                                       <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Substance or composition
                                            </label>
                                                <br>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Method or process
                                            </label>
                                                <br>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Computer program or software
                                            </label>
                                                <br>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Living organism or plant/animal variety
                                            </label>
                                                    </div>

                                                  <div class="col-4">
                                                        <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>DNA sequences
                                                      </label>
                                                      <br> 

                                                       <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Writings (books, pamphlets, articles)
                                            </label>
                                                <br>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Artwork (drawing, painting, sculpture)
                                            </label>
                                                <br>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Educational/informational materials/modules
                                            </label>
                                                <br>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Musical or dramatic composition
                                            </label>
                                                    </div>                               


                                                    <div class="col-4">
                                                        <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Mathematical model or method
                                                      </label>
                                                      <br> 

                                                       <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Scientific theory or conceptual framework
                                            </label>
                                                <br>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Trade secret or undisclosed information
                                            </label>
                                                <br>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>Other (Pls. specify): _____________
                                            </label>
                                                <br>
                                             <label class="css-control css-control-lg css-control-primary css-radio">
                                                <input type="checkbox" class="css-control-input" name="naturaljuridical" id="naturaljuridical" value="JURIDICAL">
                                                <span class="css-control-indicator"></span>I don’t know.
                                            </label>
                                                    </div>

                                                </div>
                                            </div>

                                   </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">8.  CONTRIBUTOR CERTIFICATION. I (we) hereby assign all right, title, and interest to inventions or works generated from this project, now and in the future, to DLSU, if the following are true: (1) The circumstances in section 5.2 of the DLSU IP policies are met; (2) The project is funded by a Government Funding Agency, and the circumstances in section 6 of RA 10055, or the Philippine Technology Transfer Act of 2009, are met. I (we) hereby declare that all information above is true to the best of my (our) knowledge and based on authentic documents </label>
                                            </div>
                                            <div class="col-12 block">
                                               
                                            </div>

                                              <div class="form-group row">

                                        
                                           <!--  -->
                                               <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="" name="" placeholder="1. Contributor (Full Name)">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="" name="" placeholder=" Contributor Signature">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="" name="" placeholder="Witness Signature">
                                            </div>

                                            <div class="col-sm-3">
                                                <input type="date" class="form-control form-control-lg" id="" name="" placeholder="Position">
                                            </div> 


                                            <!--  -->

                                            <p style="margin-top: 30px"></p>
                                               <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="" name="" placeholder="2. Contributor (Full Name)">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="" name="" placeholder=" Contributor Signature">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="" name="" placeholder="Witness Signature">
                                            </div>

                                            <div class="col-sm-3">
                                                <input type="date" class="form-control form-control-lg" id="" name="" placeholder="Position">
                                            </div> 

                                            <!--  -->
                                            <p style="margin-top: 30px"></p>
                                               <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="" name="" placeholder="3. Contributor (Full Name)">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="" name="" placeholder=" Contributor Signature">
                                            </div>

                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-lg" id="" name="" placeholder="Witness Signature">
                                            </div>

                                            <div class="col-sm-3">
                                                <input type="date" class="form-control form-control-lg" id="" name="" placeholder="Position">
                                            </div> 

                                        </div>

                                        </div>

                                        



<div class="form-group row">
                                            <label class="col-12">Attach File(s)</label>
                                             <div class="col-12">
                                                 <input type="file" class="form-control form-control-lg" id="attachfile" name="attachfile" >
                                             </div>

                                        </div>






                                       

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" name="saveiprecord" class="btn btn-hero btn-lg btn-success text-uppercase mb-10">SAVE</button>
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
    </body>
</html>


<script type="text/javascript">
    var count1=3
    function addapplicantip()
    {
        count1++;
         $.ajax({
             type: "POST",
             url: "include/all_query.php",
             data: {
                 "addapplicantx" :'1',
                  "count1" :count1,
             }, 
             success: function(data)
             {
              // //alert('xx');
             $("#applicantdiv").append(data);
              //    getdestination();
             }
         });

         $('#applicantcount').val(count1); 
    }
</script>
