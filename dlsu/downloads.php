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

        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

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

                    <!-- Files Filtering -->
                    <h2 class="content-heading">Download <small>forms</small></h2>

                    <div class="js-filter" data-speed="400">
                        <div class="p-10 bg-white push">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" data-category-link="all">
                                        <i class="fa fa-fw fa-folder-open-o mr-5"></i> All
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-category-link="dipoform">
                                        <i class="fa fa-fw fa-file-text-o mr-5"></i> DIPO Form
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-category-link="claims">
                                        <i class="fa fa-fw fa-file-text-o mr-5"></i> Claims
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-category-link="request">
                                        <i class="fa fa-fw fa-file-text-o mr-5"></i> Request
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-category-link="patentreport">
                                        <i class="fa fa-fw fa-file-text-o mr-5"></i> Patent Report
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
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
                            <div class="col-md-6 col-xl-3" data-category="claims">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-info-light text-info mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">Nam et nunc</div>
                                        <div class="font-size-sm text-muted">41</div>
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
                            </div>
                            <div class="col-md-6 col-xl-3" data-category="dipoform">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-danger-light text-danger mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">DIPO Form</div>
                                        <div class="font-size-sm text-muted">1</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3" data-category="claims">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-info-light text-info mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">Aliquam scelerisque</div>
                                        <div class="font-size-sm text-muted">32</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3" data-category="request">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-success-light text-success mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">Phasellus</div>
                                        <div class="font-size-sm text-muted">22 | 384 kbps</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3" data-category="dipoform">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-danger-light text-danger mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">DIPO Form</div>
                                        <div class="font-size-sm text-muted">1</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3" data-category="dipoform">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-danger-light text-danger mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">DIPO Form</div>
                                        <div class="font-size-sm text-muted">1</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3" data-category="request">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-success-light text-success mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">Class aptent</div>
                                        <div class="font-size-sm text-muted">25 | 384 kbps</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3" data-category="claims">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-info-light text-info mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">Curabitur vel</div>
                                        <div class="font-size-sm text-muted">324</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3" data-category="patentreport">
                                <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                    <div class="block-content block-content-full text-center">
                                        <div class="item item-circle bg-warning-light text-warning mx-auto my-20">
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                        <div class="font-size-lg">Duis molestie </div>
                                        <div class="font-size-sm text-muted">24 | 5 pages</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Files Filtering -->

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

        <!-- Page JS Helpers (Content Filtering helper) -->
        <script>jQuery(function(){ Codebase.helpers('content-filter'); });</script>
    </body>
</html>