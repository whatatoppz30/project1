<?php
session_start();
ob_start();
include 'include/db.php';
//


$selectinventions="SELECT * FROM `tbliprecord` WHERE iprecordid ='$_GET[iprecordid]'";
 $runselectinventions=mysqli_query($conn, $selectinventions);

 while ($rowinventions = mysqli_fetch_assoc($runselectinventions))
{
$inventiontitle=$rowinventions['iprecodname'];
}

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
                       
                        <div class="block-content block-content-full dipoform02">
                            
                             <h2 class="content-heading float-right">Form DIPO-01</h2>

                             <div class="text-center">
                             <h4>De La Salle University<br>
Record of Invention and Assignment of Intellectual Property <br>
(CONFIDENTIAL) </h4></div>

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
                                    <form action="include/all_query.php" method="post">

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">1. NON-CONFIDENTIAL TITLE OF INTELLECTUAL PROPERTY (Invention, Utility Model, Industrial Design, etc.) </label>

                                            
                                                <textarea class="form-control form-control-lg" id="inventiontitle" name="inventiontitle" rows="6" placeholder="" required="" value=""><?php echo $inventiontitle ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">2. INVENTOR(S)/CONTRIBUTOR(S)  Use additional sheets if necessary to include all contributors. </label>
                                        </div>
                                            <div class="col-12">
                                                <label class="col-form-label" for="val-username"><b>(Contributor 1, estimated contribution to the work</b></label>
                                                <input type="text" class="col-xs-12 col-md-5 form-control form-control-lg" id="contributorsno" name="contributorsno" placeholder="%) (If only 1 contributor, 100%) ">
                                            </div>
                                        </div>
                                            
                                            
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                            <label class="col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                            
                                                <input type="text" class="form-control form-control-lg" id="contributorname" name="contributorname" placeholder="Full name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Citizenship: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Citizenship" name="citizenship" id="citizenship">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Position: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Position" name="position" id="position">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Department: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Department" name="department" id="department">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Work Phone: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="work phone" name="workphone" id="workphone"> 
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Fax: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="fax#" name="fax" id="fax">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Email: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="email address" name="email" id="email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-8">
                                                 <label class="col-form-label" for="val-username">Home Address: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="address" name="homeadress" id="homeadress">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Home Phone: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="#" name="homephone" id="homephone">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                 <label class="col-form-label" for="val-username">Nature of Contribution: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="" name="nature" id="nature">
                                            </div>

                                        </div>
                                        <!-- end Contributor 1 -->

                                            <div class="form-group row">

                                                <div class="col-12">
                                                    <label class="col-form-label" for="val-username"><b>(Contributor 2, estimated contribution to the work</b></label>
                                               
                                                    <input type="text" class="col-xs-12 col-md-5 form-control form-control-lg" id="mega-city" name="mega-city" placeholder="%) (If applicable) ">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <div class="col-sm-12">
                                            <label class="col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                            
                                                <input type="text" class="form-control form-control-lg" id="val-username" name="val-username" placeholder="Full name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Citizenship: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Citizenship">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Position: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Position">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Department: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Department">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Work Phone: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="work phone">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Fax: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="fax#">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Email: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="email address">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-8">
                                                 <label class="col-form-label" for="val-username">Home Address: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="address">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Home Phone: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="#">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                 <label class="col-form-label" for="val-username">Nature of Contribution: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="">
                                            </div>

                                        </div>

                                        <!-- end Contributor 2 -->

                                        <div class="form-group row">

                                                <div class="col-12">
                                                    <label class="col-form-label" for="val-username"><b>(Contributor 3, estimated contribution to the work</b></label>
                                               
                                                    <input type="text" class="col-xs-12 col-md-5 form-control form-control-lg" id="mega-city" name="mega-city" placeholder="%) (If applicable) ">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <div class="col-sm-12">
                                            <label class="col-form-label" for="val-username">Name <span class="text-danger">*</span></label>
                                            
                                                <input type="text" class="form-control form-control-lg" id="val-username" name="val-username" placeholder="Full name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Citizenship: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Citizenship">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Position: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Position">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Department: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Department">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Work Phone: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="work phone">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Fax: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="fax#">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Email: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="email address">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-8">
                                                 <label class="col-form-label" for="val-username">Home Address: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="address">
                                            </div>
                                            <div class="col-4">
                                                 <label class="col-form-label" for="val-username">Home Phone: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="#">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                 <label class="col-form-label" for="val-username">Nature of Contribution: <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="">
                                            </div>

                                        </div>

                                        <!-- end Contributor 3 -->

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">3. SPONSOR(S) and CONTRACT/GRANT NUMBER(S) Please provide the list of all funding sources for materials, equipment, salaries 
of personnel in the conception and development of the invention.    </label>

                                            
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="(If none, please indicate “None”)"></textarea>
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
                                                <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">5.  ABSTRACT OF THE INVENTION: (Provide a short and general description of the invention or work and attach supporting documents like 
charts, graphs, drawings, abstracts, presentations, etc.)  </label>
                                            </div>

                                            <div class="col-12">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="ABSTRACT OF THE INVENTION"></textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">6.  SEARCH ITEMS: (please provide a short list of words, common industry phrases, and/or categories directly related to your invention, mark or 
creative work). </label>
                                            </div>

                                            <div class="col-12">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="SEARCH ITEMS"></textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">7.  PRIOR ART:   </label>
                                            </div>
                                            <div class="col-12 block">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="a.) Prior art includes any publicly available knowledge or related information about the invention available anywhere in the world, including your own 
publications. (attach copies, if available)."></textarea>
</div>

<div class="col-12">
<textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="b.) Have the essential elements of the invention been communicated to anyone outside of your laboratory either orally or in writing? (public disclosure 
through publication, thesis/dissertation, seminar, poster, meeting, web page, newspaper, etc)  "></textarea>
</div>

                                            
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">8.  COMMERCIAL VALUE    </label>
                                            </div>
                                            <div class="col-12 block">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="a.)  Please describe any known commercial interest in this work, or companies which may have commercial interest in this work and/or give your 
estimate of commercial potential.  List any company and contact information that has expressed interest in your invention or work. "></textarea>
</div>
<div class="col-12 block">
<textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="b.)  What are the practical and commercial applications of the inventions?  (What problem does it solve?) "></textarea>
</div>

<div class="col-12 block">
<textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="c.)  What steps (and how much funding) are necessary for commercialization?   "></textarea>
</div>

<div class="col-12">
<textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="d.) What are the advantages of your invention over currently available technologies?  Are there entities and/or dominating patents in this area, if so  
who and/or what are they?  "></textarea>
</div>

                                        </div>

                                         <div class="form-group row">

                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">9.  DETAILED DESCRIPTION OF THE INVENTION (attach additional sheets as necessary, including any draft manuscripts) </label>
                                            </div>

                                            <div class="col-12 block">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="a.)  What is the general purpose of the invention?   What is the problem to be solved by the invention? "></textarea>
                                            </div>
                                            <div class="col-12 block">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="b.)  Describe the benefits that the invention can give.  "></textarea>
                                            </div>
                                            <div class="col-12 block">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="c.) What is new about the invention?  Is there an inventive step?  Is it industrially applicable? "></textarea>
                                            </div>
                                            <div class="col-12 block">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="d.) Please attach a more detailed explanation of your invention, including any figures or sketches useful to illustrate it. "></textarea>
                                            </div>
                                            <div class="col-12 block">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="e.) Please describe the stage of development of the invention. "></textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">10.  OUTSIDE ACTIVITIES / CONSULTING  </label>
                                            </div>

                                            <div class="col-12 block">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="a) Identify any agreements or interactions that you have entered into that are related to the intellectual property (material transfer agreements, commercially sponsored research agreements, consortia agreements, consulting agreements, technology transfer agreements etc.) "></textarea>
                                            </div>
                                            <div class="col-12 block">
                                                <textarea class="form-control form-control-lg" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="b) Do any of the  listed contributors have consulting or other relevant relationships with entities other than De La Salle University or any  of its affiliates? Please explain and attach any consulting agreements or other contracts."></textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">

                                            <div class="col-12">
                                            <label class="col-12 p-10 bg-primary-lighter text-primary-dark" for="">11. CONTRIBUTOR CERTIFICATION AND ASSIGNMENT </label>
                                            <p>
                                                 I (We) hereby assign all right, title and interest to this invention or work to De La Salle University pursuant to the DLSU 
Intellectual Property Policies and agree to execute all documents as requested, assigning to De La Salle University my/our 
rights in  the above described intellectual property, and  to cooperate with De La Salle University in the protection of this 
invention or work.  De La Salle University will share any royalty income derived from the invention or work with the actual 
legal  inventor(s)  (for patented inventions) or creator(s)  (for copyrighted works)  according to the implementing rules and 
regulations of the intellectual property policies, unless there is an agreement to the contrary.  By signing below, I (we) agree 
that  I (we) have not knowingly omitted the inclusion of other potential contributors or creators.  I (We) attest that  the 
information provided in this form is correct  and complete  to the best of my (our)  knowledge and based on authentic 
documents.   
 
I agree that by submitting this Record of Invention  and Assignment of Intellectual Property, I  (we)  am  (are)  bound to 
conform to the Intellectual Property Policies of De La Salle University and any future revisions thereto. </p>
                                            </div>


                                            <div class="col-xl-4 col-sm-8">
                                                 <label class="col-form-label" for="val-username">Signature over Printed Name of Contributor<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Contributor Name">
                                            </div>
                                            <div class="col-xl-2 col-sm-4">
                                                 <label class="col-form-label" for="val-username">Date</label>
                                                <input type="date" class="form-control form-control-lg" placeholder="date signed">
                                            </div>
                                            <div class="col-xl-4 col-sm-8">
                                                 <label class="col-form-label" for="val-username">Witness’ Signature </label>
                                                <input type="text" class="form-control form-control-lg" placeholder="witness">
                                            </div>
                                            <div class="col-xl-2 col-sm-4">
                                                 <label class="col-form-label" for="val-username">Date </label>
                                                <input type="date" class="form-control form-control-lg" placeholder="date signed">
                                            </div>

                                             <div class="col-xl-4 col-sm-8">
                                                 <label class="col-form-label" for="val-username">Signature over Printed Name of Contributor</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Contributor Name">
                                            </div>
                                            <div class="col-xl-2 col-sm-4">
                                                 <label class="col-form-label" for="val-username">Date</label>
                                                <input type="date" class="form-control form-control-lg" placeholder="date signed">
                                            </div>
                                            <div class="col-xl-4 col-sm-8">
                                                 <label class="col-form-label" for="val-username">Witness’ Signature </label>
                                                <input type="text" class="form-control form-control-lg" placeholder="witness">
                                            </div>
                                            <div class="col-xl-2 col-sm-4">
                                                 <label class="col-form-label" for="val-username">Date </label>
                                                <input type="date" class="form-control form-control-lg" placeholder="date signed">
                                            </div>

                                             <div class="col-xl-4 col-sm-8">
                                                 <label class="col-form-label" for="val-username">Signature over Printed Name of Contributor</label>
                                                <input type="text" class="form-control form-control-lg" placeholder="Contributor Name">
                                            </div>
                                            <div class="col-xl-2 col-sm-4">
                                                 <label class="col-form-label" for="val-username">Date</label>
                                                <input type="date" class="form-control form-control-lg" placeholder="date signed">
                                            </div>
                                            <div class="col-xl-4 col-sm-8">
                                                 <label class="col-form-label" for="val-username">Witness’ Signature </label>
                                                <input type="text" class="form-control form-control-lg" placeholder="witness">
                                            </div>
                                            <div class="col-xl-2 col-sm-4">
                                                 <label class="col-form-label" for="val-username">Date </label>
                                                <input type="date" class="form-control form-control-lg" placeholder="date signed">
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <label class="col-12">Attach File(s)</label>
                                            <div class="col-8">
                                                <div class="custom-file">
                                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                    <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom" data-toggle="custom-file-input">
                                                    <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                                </div>
                                            </div>
                                        </div>








                                       

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" name="updateinvention" class="btn btn-hero btn-lg btn-success text-uppercase mb-10">UPDATE</button>
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