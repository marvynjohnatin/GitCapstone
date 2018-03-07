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
                                <font color = "red"><b>Account Ledger</b></font>
                            </h2>
                        </div>
                        <div class="body">

                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Level:<font color = "green"> <b>Highschool</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Grade:<font color = "green"> <b>Grade 7</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Section:<font color = "green"> <b>St. Lorenzo</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current School Year: <font color = "green"> <b>2013-2014</b></font>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                    Student Number:<font color = "green"> <b>2014141811</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                    First Name:<font color = "green"> <b>Iris Joshua</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                    Middle Name:<font color = "green"> <b>Loren</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                    Last Name:<font color = "green"> <b>Tanyag</b></font>
                                        </div>
                                    </div>
                                </div>
                                </div>

                            


                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Total Amount Due:<font color = "green"> <b>P 7,000.00</b></font>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Payment Type:<font color = "green"> <b>Monthly</b></font>
                                        </div>
                                    </div>
                                </div>

                            </div>

                             <div class="row clearfix">
                                <div class="col-sm-12">
                                <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                        <th>Detail Number</th>
                                        <th>Payment Name</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Payment Type</th>
                                        <th>Payment Date</th>
                                        <th>Time of Payment</th>
                                        <th>Action</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>Upon Enrollment</td>
                                        <td>1,000.00</td>
                                        <td>04/16/2018</td>
                                        <td><font color = "green">Paid</font></td>
                                        <td>Cash</td>
                                        <td>04/15/2018</td>
                                        <td>8:00 A.M.</td>
                                        <td>
                                            <a href="payment">    
                                            <button type="button" class="btn bg-green waves-effect" disabled>
                                            <i class="material-icons">payment</i>
                                            <span>Manage Payment</span>
                                            </button>
                                            </a>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>2</td>
                                        <td>Monthly</td>
                                        <td>1,000.00</td>
                                        <td>05/16/2018</td>
                                        <td><font color = "green">Paid</font></td>
                                        <td>Cash</td>
                                        <td>05/15/2018</td>
                                        <td>11:00 A.M.</td>
                                        <td>
                                            <a href="payment">    
                                            <button type="button" class="btn bg-green waves-effect" disabled>
                                            <i class="material-icons">payment</i>
                                            <span>Manage Payment</span>
                                            </button>
                                            </a>
                                        </td>


                                        </tr>

                                        <tr>
                                        <td>3</td>
                                        <td>Monthly</td>
                                        <td>1,000.00</td>
                                        <td>05/16/2018</td>
                                        <td><font color = "red">Not Paid Yet</font></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="payment">    
                                            <button type="button" class="btn bg-green waves-effect" >
                                            <i class="material-icons">payment</i>
                                            <span>Manage Payment</span>
                                            </button>
                                            </a>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>4</td>
                                        <td>Monthly</td>
                                        <td>1,000.00</td>
                                        <td>05/16/2018</td>
                                         <td><font color = "red">Not Paid Yet</font></td>
                                         <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="payment">    
                                            <button type="button" class="btn bg-green waves-effect" >
                                            <i class="material-icons">payment</i>
                                            <span>Manage Payment</span>
                                            </button>
                                            </a>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>5</td>
                                        <td>Monthly</td>
                                        <td>1,000.00</td>
                                        <td>05/16/2018</td>
                                         <td><font color = "red">Not Paid Yet</font></td>
                                         <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="payment">    
                                            <button type="button" class="btn bg-green waves-effect" >
                                            <i class="material-icons">payment</i>
                                            <span>Manage Payment</span>
                                            </button>
                                            </a>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>6</td>
                                        <td>Monthly</td>
                                        <td>1,000.00</td>
                                        <td>05/16/2018</td>
                                         <td><font color = "red">Not Paid Yet</font></td>
                                         <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="payment">    
                                            <button type="button" class="btn bg-green waves-effect" >
                                            <i class="material-icons">payment</i>
                                            <span>Manage Payment</span>
                                            </button>
                                            </a>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>7</td>
                                        <td>Monthly</td>
                                        <td>1,000.00</td>
                                        <td>05/16/2018</td>
                                         <td><font color = "red">Not Paid Yet</font></td>
                                         <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="payment">    
                                            <button type="button" class="btn bg-green waves-effect" >
                                            <i class="material-icons">payment</i>
                                            <span>Manage Payment</span>
                                            </button>
                                            </a>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>8</td>
                                        <td>Monthly</td>
                                        <td>1,000.00</td>
                                        <td>05/16/2018</td>
                                         <td><font color = "red">Not Paid Yet</font></td>
                                         <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="payment">    
                                            <button type="button" class="btn bg-green waves-effect" >
                                            <i class="material-icons">payment</i>
                                            <span>Manage Payment</span>
                                            </button>
                                            </a>
                                        </td>
                                        </tr>
                                        
                                         <tr>
                                        <td>9</td>
                                        <td>Before Finals</td>
                                        <td>1,000.00</td>
                                        <td>05/16/2018</td>
                                        <td><font color = "red">Not Paid Yet</font></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="payment">    
                                            <button type="button" class="btn bg-green waves-effect" >
                                            <i class="material-icons">payment</i>
                                            <span>Manage Payment</span>
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

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Total Fee Breakdown</b></font>
                            </h2>
                        </div>
                        <div class="body">

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                    Total:<font color = "green"> <b>P 10,000.00</b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row clearfix">
                                <div class="col-sm-12">
                                <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Total</th>
                                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tuition Fee</td>
                                            <td>P 3,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Miscellaneous Fee</td>
                                            <td>P 2,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Entrance Fee</td>
                                            <td>P 1,500.00</td>
                                        </tr>
                                        <tr>
                                            <td>Energy Fee</td>
                                            <td>P 1,000.00</td>
                                        </tr>
                                        <tr>
                                            <td>Book Fee</td>
                                            <td>P 1,000.00</td>
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

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Student Fee Discounts</b></font>
                            </h2>
                        </div>
                        <div class="body">

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                    Total:<font color = "green"> <b>P 3,000.00</b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row clearfix">
                                <div class="col-sm-12">
                                <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Total</th>
                                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ESC</td>
                                            <td>P 3,000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                </div>
                            
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                <div class="alert alert-danger">
                                <strong>All Discounts!</strong> Only affect the tuition fee.
                                </div>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>



   
</body>

