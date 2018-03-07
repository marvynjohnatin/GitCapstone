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
                    
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><font color = "yellow">Logged in As: <?php echo $this->session->userdata['accounttype']?> || ID: <?php echo $this->session->userdata['facultynumber'] ?> || Name: <?php echo $this->session->userdata['fname'] ?> </font></a>
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
                    <img src="" width="107" height="107" />
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
                            <span>Teacher Profile</span>
                        </a>
                    </li>
                     <li class="active">
                        <a href="subjects">
                            <i class="material-icons">date_range</i>
                            <span>Schedule</span>
                        </a>
                    </li>
                      <li class="">
                        <a href="subjectlist">
                            <i class="material-icons">folder_shared</i>
                            <span>Grade Posting</span>
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
        
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Schedule Section</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Subject Schedule</b></font>
                            </h2>
                        </div>
                        <div class="body">

                             <div class="row clearfix">
                                <div class="col-sm-12">
                                <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Subject</th>
                                            <th>Section</th>
                                            <th>Year Level</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Day</th>        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Algebra 1</td>
                                            <td>St. Blaise</td>
                                            <td>Highschool - Grade 7</td>
                                            <td>7:00 A.M.</td>
                                            <td>8:00 A.M.</td>
                                            <td>Monday - Friday</td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Algebra 1</td>
                                            <td>St. Lorenzo</td>
                                            <td>Highschool - Grade 7</td>
                                            <td>9:00 A.M.</td>
                                            <td>10:00 A.M.</td>
                                            <td>Monday - Friday</td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Algebra 1</td>
                                            <td>St. Martin</td>
                                            <td>Highschool - Grade 7</td>
                                            <td>10:00 A.M.</td>
                                            <td>11:00 A.M.</td>
                                            <td>Monday - Friday</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Filipino 1</td>
                                            <td>St. Blaise</td>
                                            <td>Highschool - Grade 7</td>
                                            <td>11:00 A.M.</td>
                                            <td>12:00 A.M.</td>
                                            <td>Monday - Friday</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Filipino 1</td>
                                            <td>St. Lorenzo</td>
                                            <td>Highschool - Grade 7</td>
                                            <td>1:00 P.M.</td>
                                            <td>2:00 P.M.</td>
                                            <td>Monday - Friday</td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Filipino 1</td>
                                            <td>St. Martin</td>
                                            <td>Highschool - Grade 7</td>
                                            <td>2:00 A.M.</td>
                                            <td>3:00 A.M.</td>
                                            <td>Monday - Friday</td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
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
