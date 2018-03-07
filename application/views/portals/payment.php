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
                     <li class="">
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
                    <li class="active">
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
                <h2>Payment Section</h2>
            </div>

            
            <div class="row clearfix">

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Online Payment</b></font>
                            </h2>
                    
                        </div>
                        <div class="body">

                        <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Level:<font color = "green"> <b>Highschool</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Year:<font color = "green"> <b>Grade 7</b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Section: <font color = "green"> <b>St. Lorenzo</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                Current School Year: <font color = "green"> <b>2013-2014</b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                    Total Amount Due:<font color = "green"> <b>P 7,000.00</b></font>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                        <th>Detail Number</th>
                                        <th>Payment Name</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                        <th>Action</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>5</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>6</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                           <td>7</td>
                                            <td>Monthly</td>
                                            <td>P 1,000/00</td>
                                            <td>05/16/2018</td>
                                            <td>
                                            <a href="grade">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">payment</i>
                                            <span>Pay Online</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>


                                        
                                        
                                    </tbody>
                                </table>
                            </div>

                            <br>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                <div class="alert alert-danger">
                                All online payments are done through <strong>PayPal!</strong>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

           
            
              
            
            </div>
         
           

            
        </div>
    </section>

   
</body>

