<?php
if (!$_SESSION) {
  session_start();
ob_start();
include 'include/db.php';
}

//

 ?>
<div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15 logoMain">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->

                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="img-link" href="user_dashboard.php">
                                <img class="" src="assets/media/img/logo.png" alt="">
                            </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center logo-home">
                            
                            <p><a class="img-link" href="#">
                                <img class="" src="assets/media/img/logo-dipo.png" alt="">
                            </a></p>
                            <p><a class="img-link" href="#">
                                <img class="" src="assets/media/img/logo-dito.png" alt="">
                            </a></p>
                        </div>

                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a href="user_dashboard.php"><i class="si si-home"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li>
                                <a href="schedules.php"><i class="si si-note"></i><span class="sidebar-mini-hide">Schedule</span></a>
                            </li>
                            <li>
                                <a href="accounts.php"><i class="si si-note"></i><span class="sidebar-mini-hide">Accounts</span></a>
                            </li>
                            <!-- <li>
                                <a href="downloads.php"><i class="si si-docs"></i><span class="sidebar-mini-hide">Downloads</span></a>
                            </li> -->
                   <!--          <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">FORMS</span></a>
                                <ul>
                                    <li>
                                        <a href="login.php">Login</a>
                                    </li>
                                    <li>
                                        <a href="register.php">Sign up</a>
                                    </li>
                                    <li>
                                        <a href="dipo-form02.php">DIPO Form</a>
                                    </li>
                                    <li>
                                        <a href="form-claims.php">Claims</a>
                                    </li>
                                    <li>
                                        <a href="request-grant-patent.php">Trademark Application Form</a>
                                    </li>
                                    <li>
                                        <a href="downloads.php">Patent Report</a>
                                    </li>

                                </ul>
                            </li> -->
                            <li>
                                <a href="logs.php"><i class="si si-note"></i><span class="sidebar-mini-hide">Logs</span></a>
                            </li>


                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>