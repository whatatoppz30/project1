<?php
if (!$_SESSION) {
session_start();
ob_start();
include 'include/db.php';
}

//

 ?>
<aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">Jp Miranda</a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Search -->
                    <div class="block pull-t pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <form action="be_pages_generic_search.html" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary px-10">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Search -->

                    <!-- Mini Stats -->
                    <div class="block pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="row">
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted"><a href="schedules.php">Schedules</a></div>
                                    <div class="font-size-h4">5</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Patents</div>
                                    <div class="font-size-h4">253</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Claims</div>
                                    <div class="font-size-h4">60</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Mini Stats -->

                    <!-- Inventor/Client -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>New CLients</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar8.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Ragnar Loth
                                        <div class="font-w400 font-size-xs text-muted">Inventor</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar16.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Dwight Josland
                                        <div class="font-w400 font-size-xs text-muted">Engineer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar8.jpg" alt="">
                                        <i class="fa fa-circle text-warning"></i> Pam Eirene
                                        <div class="font-w400 font-size-xs text-muted">Software Engineer</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Friends -->

                    <!-- Activity -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="list list-activity">
                                <li>
                                    <i class="si si-wallet text-success"></i>
                                    <div class="font-w600">New Patent</div>
                                    <div>
                                        <a href="javascript:void(0)">Approved</a>
                                    </div>
                                    <div class="font-size-xs text-muted">5 min ago</div>
                                </li>
                                <li>
                                    <i class="si si-close text-danger"></i>
                                    <div class="font-w600">Schedule removed</div>
                                    <div>
                                        <a href="javascript:void(0)">Details</a>
                                    </div>
                                    <div class="font-size-xs text-muted">26 min ago</div>
                                </li>
                                <li>
                                    <i class="si si-pencil text-info"></i>
                                    <div class="font-w600">You edited the file</div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-text-o"></i> Docs.doc
                                        </a>
                                    </div>
                                    <div class="font-size-xs text-muted">3 hours ago</div>
                                </li>
                                
                                <li>
                                    <i class="si si-wrench text-warning"></i>
                                    <div class="font-w600">Profile Update</div>
                                    <div>
                                        <a href="javascript:void(0)">Update</a>
                                    </div>
                                    <div class="font-size-xs text-muted">8 hours ago</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Activity -->

                    <!-- Profile -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-name">Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="Jp Miranda">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-email">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="jpmiranda@itbs.com.ph">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-password">New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-block btn-alt-primary">
                                            <i class="fa fa-refresh mr-5"></i> Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Profile -->
                </div>
                <!-- END Side Content -->
            </aside>