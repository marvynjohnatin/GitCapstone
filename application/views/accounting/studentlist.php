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

                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><font color = "yellow">Logged in As:  || ID:  || Name:  </font></a>
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
                    <li class="active">
                        <a href="studentlist">
                            <i class="material-icons">home</i>
                            <span>General Management</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="history">
                            <i class="material-icons">home</i>
                            <span>Payment History</span>
                        </a>
                    </li>
                    
                    <li class="">
                        <a href="<?php echo base_url(); ?>accounting/logout">
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
                <h2>Management Section</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Student List</b></font>
                            </h2>
                        </div>
                        <div class="body">

                        <div class="row clearfix">
                                <div class="col-sm-12">
                                <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                        <th>Student Number</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Year Level</th>
                                        <th>Section</th>
                                        <th>Action</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>2014141811</td>
                                        <td>Iris Joshua</td>
                                        <td>Loren</td>
                                        <td>Tanyag</td>
                                        <td>Highschool-Grade 7</td>
                                        <td>St. Lorenzo</td>
                                        <td>
                                            <a href="account">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View Account</span>
                                            </button>
                                            </a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>2014141912</td>
                                        <td>Marvyn John</td>
                                        <td>Casao</td>
                                        <td>Atin</td>
                                        <td>Highschool-Grade 7</td>
                                        <td>St. Lorenzo</td>
                                        <td>
                                            <a href="account">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View Account</span>
                                            </button>
                                            </a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>2014141317</td>
                                        <td>Christian Joash</td>
                                        <td>De Guzman</td>
                                        <td>Cabungcal</td>
                                        <td>Highschool-Grade 7</td>
                                        <td>St. Lorenzo</td>
                                        <td>
                                            <a href="account">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View Account</span>
                                            </button>
                                            </a>
                                        </td>
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

