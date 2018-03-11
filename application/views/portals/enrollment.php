<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->

   

    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">

                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <img src="<?php echo base_url(); ?>assets-2/images/sja.png" width="40" height="50" alt="User" />
                <a class="navbar-brand" href="">SJA ACADEMY STUDENT PORTAL</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><font color = "yellow">Logged in As: <?php echo $this->session->userdata['accounttype']?> || ID: <?php echo $this->session->userdata['studentnumber'] ?> || Name: <?php echo $this->session->userdata['fname'] ?> </font></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url() ?>assets/images/students/<?php echo $results['stud_pic'] ?>" width="107" height="107" alt="User" />
                </div>

            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="">
                        <a href="dashboard">
                            <i class="material-icons">home</i>
                            <span>Student Profile</span>
                        </a>
                    </li>
                     <li class="">
                        <a href="gradelist">
                            <i class="material-icons">insert_drive_file</i>
                            <span>Grades</span>
                        </a>
                    </li>
                     <li class="active">
                        <a href="enrollment">
                            <i class="material-icons">folder_shared</i>
                            <span>Online Enrollment</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="schedule">
                            <i class="material-icons">schedule</i>
                            <span>Subject Schedule</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="account">
                            <i class="material-icons">account_balance_wallet</i>
                            <span>Account Ledger</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="payment">
                            <i class="material-icons">payment</i>
                            <span>Online Payment</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>logout">
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
        
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Enrollment Section</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Online Enrollment</b></font>
                            </h2>
                        </div>
                        <div class="body">
                            <?php echo form_open('portals/details');?>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Level:<font color = "green"> <b><?php echo $results['current_level']?></b></font>
                                            <input type="hidden" value="<?php echo $results['current_level']?>" name="currentlevel"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Year:<font color = "green"> <b>Grade <?php echo $results['current_year']?></b></font>
                                   <input type="hidden" value="<?php echo $results['current_year']?>" name="currentyear"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            Strand: <font color = "green"> <b><?php echo $results['current_strand']?></b></font>
                                            <input type="hidden" value="<?php echo $results['current_strand']?>" name="strand"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
            Present School Year: <font color = "green"> <b><?php echo $sy[0]?></b></font>
                                            <input type="hidden" value="<?php echo $sy[0]?>" name="schoolyear"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                Payment Type:&emsp;
                                <input type="radio" id="md_checkbox_21" name="payment" value="Monthly" class="radio-col-brown" required/>
                                <label for="md_checkbox_21">Monthly</label>&emsp;
                                <input type="radio" id="md_checkbox_23" name="payment"value="Full" class="radio-col-brown"/>
                                <label for="md_checkbox_23">Full Payment</label>&emsp;
                                    </div>
                                </div>
                            
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                     <button type="submit" class="btn btn-block btn-lg btn-warning waves-effect">Enroll Now!</button>
                                     <?php echo form_close(); ?>
                                    </div>
                                </div>
                            
                            </div>

                            
                          
   
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            <!-- Textarea -->
         
           

            
        </div>
    </section>


</body>

