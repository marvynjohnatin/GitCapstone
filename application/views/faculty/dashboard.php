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
                <a class="navbar-brand" href="index.html">SJA ACADEMY STUDENT PORTAL</a>
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
                    <img src="<?php echo base_url() ?>assets/images/faculties/<?php echo $results['faculty_pic'] ?>" width="107" height="107" alt="User" />
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="dashboard">
                            <i class="material-icons">home</i>
                            <span>Teacher Profile</span>
                        </a>
                    </li>
                    <li class="">
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
                <h2>Student Profile</h2>
            </div>

            
            <div class="row clearfix">

           
            
<?php

            
            echo "<div class='row clearfix'>";
                echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
                    echo "<div class='card'>";
                        echo "<div class='header'>";
                        echo "<h2>
                                <font color = 'red'><b>Student Information</b></font>
                              </h2>";
                        echo "</div>";
                        echo "<div class='body'>
                            <div class='demo-masked-input'>
                                <div class='row clearfix'>";

                                    echo "<div class='col-md-3'>
                                        <b>First Name</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>assignment_ind</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control date' value = '". $results['fname'] . "' readonly>
                                            </div>
                                        </div>
                                    </div>";

                                     echo "<div class='col-md-3'>
                                        <b>Middle Name</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>assignment_ind</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control date' value = '". $results['mname'] . "' readonly>
                                            </div>
                                        </div>
                                    </div>";

                                     echo "<div class='col-md-3'>
                                        <b>Last Name</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>assignment_ind</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control date' value = '". $results['lname'] . "' readonly>
                                            </div>
                                        </div>
                                    </div>";

                                     echo "<div class='col-md-3'>
                                        <b>Age</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>assignment_ind</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control date' value = '". $results['age'] . "' readonly>
                                            </div>
                                        </div>
                                    </div>";

                                    echo "<div class='col-md-3'>
                                        <b>Date Of Birth</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>date_range</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control date' value = '". $results['dateofbirth'] . "' readonly>
                                            </div>
                                        </div>
                                    </div>";

                                      echo "<div class='col-md-3'>
                                        <b>Gender</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>assignment_ind</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control date' value = '". $results['gender'] . "' readonly>
                                            </div>
                                        </div>
                                    </div>";

                                    echo "<div class='col-md-3'>
                                        <b>Present Address</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>assignment_ind</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control date' value = '". $results['address'] . "' readonly>
                                            </div>
                                        </div>
                                    </div>";

                                    echo "<div class='col-md-3'>
                                        <b>Place Of Birth</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>assignment_ind</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control date' value = '". $results['placeofbirth'] . "' readonly>
                                            </div>
                                        </div>
                                    </div>";

                                  

                                    echo "<div class='col-md-3'>
                                        <b>Phone Number</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>phone</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control date' value = '". $results['contactno'] . "' readonly>
                                            </div>
                                        </div>
                                    </div>";

                                     echo "<div class='col-md-3'>
                                        <b>Email Address</b>
                                        <div class='input-group'>
                                            <span class='input-group-addon'>
                                                <i class='material-icons'>email</i>
                                            </span>
                                            <div class='form-line'>
                                                <input type='text' class='form-control email' value = '' readonly>
                                            </div>
                                        </div>
                                    </div>";
                   
                              echo "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";

            //==============================================================================>

?>

               
               
              
            
            </div>
         
           

            
        </div>
    </section>

   
</body>

