<!-- #Top Bar -->
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo base_url()?>assets/images/users/<?php echo $account[0]['user_pic'] ?>" width="48" height="48" alt="User" />
            </div>

        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">account_box</i>
                        <span>Student Section</span>
                    </a>
                    <ul class="ml-menu">
                        <li class = "">
                            <a href="studentlist">Student List</a>
                        </li>
                        <li>
                            <a href="">Student Sectioning</a>
                        </li>

                    </ul>
                </li>
                <li class="active">
                    <a href="subjects">
                        <i class="material-icons">date_range</i>
                        <span>Subject Section</span>
                    </a>
                </li>
                <li class="">
                    <a href="subjectlist">
                        <i class="material-icons">folder_shared</i>
                        <span>Grade Posting</span>
                    </a>
                </li>
                <li class="">
                    <a href="managefees">
                        <i class="material-icons">folder_shared</i>
                        <span>Manage Fees</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url(); ?>faculty/logout">
                        <i class="material-icons">all_out</i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">Saint James Academy</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->

< <section class="content">
        <!--CHECK IF ALREADY ENROLLED -->

        <div class="container-fluid">
            <div class="block-header">
                <h2>Section Scheduling</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Scheduling this Section</b></font>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            Section Name:<font color = "green"> <b><?php echo $sections[0]['name']?></b></font>
                                            <input type="hidden" value="<?php echo $sections[0]['Id']; ?>" name="sectionid" id="sectionid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            Level:<font color = "green"> <b><?php echo $sections[0]['level']?></b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            Grade:<font color = "green"> <b><?php echo $sections[0]['grade']?></b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                           Strand:<font color = "green"> <b><?php echo $sections[0]['strand']?></b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Days</b></font>
                            </h2>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#Monday" data-toggle="tab">MONDAY</a></li>
                                <li role="presentation"><a href="#Tuesday" data-toggle="tab">TUESDAY</a></li>
                                <li role="presentation"><a href="#Wednesday" data-toggle="tab">WEDNESDAY</a></li>
                                <li role="presentation"><a href="#Thursday" data-toggle="tab">THURSDAY</a></li>
                                <li role="presentation"><a href="#Friday" data-toggle="tab">FRIDAY</a></li>
                                <li role="presentation"><a href="#Saturday" data-toggle="tab">SATURDAY</a></li>
                            </ul>
                            <?php $array=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'); ?>



                            <!-- Tab panes -->
                            <div class="tab-content">
                            <?php foreach ($array as $day): ?>
                                <!--start panel -->
                                <?php if ($day == 'Monday'): ?>
                                <div role="tabpanel" class="tab-pane fade in active" id="<?php echo $day?>">
                                <?php else:?>
                                    <div role="tabpanel" class="tab-pane fade" id="<?php echo $day?>">
                                <?php endif; ?>
                                    <div class="body">

                                        <!-- Applicant Details -->
                                        <h2 class="card-inside-title"><?php echo $day?></h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--start panel -->
                            <?php endforeach;?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example Tab -->





        </div>
        </div>
    </section>


</body>
</html>