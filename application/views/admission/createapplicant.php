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
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">

            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <img src="<?php echo base_url(); ?>assets-2/images/sja.png" width="40" height="50" alt="User" />
            <a class="navbar-brand" href="">SJA ADMISSION PORTAL</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="javascript:void(0);" class="js-search" data-close="true"><font color = "yellow">Logged in As: <?php echo $this->session->userdata['accounttype']?> || ID: <?php echo $this->session->userdata['user_id'] ?> || Name: <?php echo $this->session->userdata['fname'] ?> </font></a>
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
                <img src="<?php echo base_url()?>assets/images/users/<?php echo $account[0]['user_pic'] ?>" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $account[0]['fname']?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo base_url()?>user/logout"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Students</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="viewapplicant">View Applicants</a>
                        </li>
                        <li class="active">
                            <a href="viewcreateapplicant">Create Applicant</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Students</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="">
                            <a href="addstudent">Create New</a>
                        </li>
                        <li>
                            <a href="activatestudent">Activate</a>
                        </li>
                    </ul>
                </li>

        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2017-2018 <a href="javascript:void(0);">Saint James Academy</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    <!--FORM START -->

    <?php echo form_open_multipart('admission/createapplicant');?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Applicant Section</h2>
        </div>

         <!-- Example Tab -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Add New Applicant
                            </h2>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#details" data-toggle="tab">APPLICANT DETAILS</a></li>
                                <li role="presentation"><a href="#requirements" data-toggle="tab">ACADEMY REQUIREMENTS</a></li>
                         
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="details">
                                 <div class="body">
                                    
                             <!-- Applicant Details -->
                        <h2 class="card-inside-title">Basic Information</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="First name" name="fname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Middle name" name="mname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Last name" name="lname" />
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select name="gender" id="gender" class="form-control show-tick">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Address" name="address" />
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" placeholder="Age" name="age" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <strong>Birthday:</strong><input type="date" name="birthday" class="form-control" placeholder="Please Input Birthday">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Birthplace" name="birthplace" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" pattern="[0-9]{11}" name="contactno" placeholder="Ex: 09XXXXXXXXX" class = "form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                                </div>
                        <div role="tabpanel" class="tab-pane fade" id="requirements">

                         <!-- Academic Requirements -->

                                  <div class="body">
                        <h2 class="card-inside-title">File Upload</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label> Birth Certificate</label><br>
                                    <input type="file" name="birthfile">
                                </div>

                                <div class="form-group">
                                    <label> Form 137</label><br>
                                    <input type="file" name="formonethreeseven">
                                </div>

                                <div class="form-group">
                                    <label> Form 9</label><br>
                                    <input type="file" name="formnine">
                                </div>

                                <div class="form-group">
                                    <label> Certificate of Good Moral</label><br>
                                    <input type="file" name="goodmoral">
                                </div>

                                <div class="form-group">
                                    <label> Baptismal Certificate</label><br>
                                    <input type="file" name="baptismal">
                                </div>
                                <div class="form-group">
                                    <label> Honor Certificate</label><br>
                                    <input type="file" name="honorfile">
                                </div>
                            </div>
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example Tab -->


       


    </div>
    </div>

    <!-- End Form -->
</section>
<?php echo form_close()?>
</body>
</html>