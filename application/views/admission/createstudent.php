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
                <li class="">
                    <a href="javascript:void(0);">
                        <i class="material-icons">view_list</i>
                        <span>Students</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="">
                            <a href="viewapplicant">View Applicants</a>
                        </li>
                        <li>
                            <a href="createapplicant">Create Applicant</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Students</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
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
    <?php echo form_open_multipart('admission/create');?>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Admission Section</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add New Student
                            </h2>
                          
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">STUDENT DETAILS</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab">PARENT AND GUARDIAN DETAILS</a></li>
                                <li role="presentation"><a href="#messages" data-toggle="tab">PARENT ACCOUNT</a></li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                        <tr>
                                            <th>Account Id</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Address</th>
                                            <th>Contact No</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($parents as $parent) : ?>
                                            <tr>
                                                <td><?php echo $parent['Id'] ?></td>
                                                <td><?php echo $parent['fname'] ?></td>
                                                <td><?php echo $parent['mname'] ?></td>
                                                <td><?php echo $parent['lname'] ?></td>
                                                <td><?php echo $parent['address'] ?></td>
                                                <td><?php echo $parent['contactno'] ?></td>
                                                <td><?php echo $parent['email'] ?></td>
                                                <td><button type="button" class="btn bg-brown waves-effect" name="buttonid" id="parentid<?php echo $parent['Id'] ?>" value="<?php echo $parent['Id'] ?>"> Fill Details </button></td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="body">

                                <b></b><h3>Fill Student Details</h3></b>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">First Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" placeholder="First name" name="fname" />
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Middle Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                              <input type="text" class="form-control" placeholder="Middle name" name="mname" />
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Last Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Last name" name="lname" />
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Gender:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                               <select name="gender" id="gender" class="form-control show-tick">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Address:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Address" name="address" />
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Age:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="form-control" placeholder="Age" name="age" />
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Birthday:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                               <input type="date" name="birthday" class="form-control" placeholder="Please Input Birthday">
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Birth Place:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                             <input type="text" class="form-control" placeholder="Birthplace" name="birthplace" />
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Contact:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                             <input type="text" pattern="[0-9]{11}" name="contactno" placeholder="Ex: 09XXXXXXXXX" class = "form-control">
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                             <input type="email" name="email" class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Level:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                             <select name="level" id="level" class="form-control show-tick">
                                                <option value="" selected="selected">Select Level</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Year:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                            <div class="form-line">
                                               <select name="grade" id="grade" class="form-control show-tick">
                                                <option value="" selected="selected">Select Grade </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Image:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                               <input type="file" name="userfile" onchange="readURL(this);">
                                               <br>
                                                <img id="imagetag"  height="200" width="200">
                                        </div>
                                    </div>
                                  </div>

                                  <!-- Entrance Exam Info -->
                                 <b></b><h3>Entrance Exam Details</h3></b><br>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Exam Grade:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Exam Grade" name="examgrade" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Exam Remarks:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                        <div class="form-line">
                                            <select name="examremark" class="form-control show-tick">
                                            <option value="PASS" selected="selected">PASS </option>
                                            <option value="FAIL" selected="selected">FAIL </option>
                                        </select>
                                        </div>
                                        </div>
                                    </div>
                                  </div>
                            </div>

                                </div>


                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="body">
                                <!-- Father Info -->
                                    <b></b><h3>Father Details</h3></b><br>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">First Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" class="form-control" placeholder="First name" id="fatherfname" name="fatherfname" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Middle Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Middle name" id="fathermname" name="fathermname" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Last Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                              <input type="text" class="form-control" placeholder="Last name" id="fatherlname" name="fatherlname" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Contact Number:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" pattern="[0-9]{11}" id="fathercontactno" name="fathercontactno"  placeholder="Contact: 09XXXXXXXXX" class = "form-control">
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                           <input type="email" id="fatheremail" name="fatheremail"  class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Occupation:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                           <input type="text" class="form-control"  placeholder="Occupation" id="fatheroccupation" name="fatheroccupation" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>
                                  <!-- Father Info -->

                                  <!-- Mother Info -->
                                    <b></b><h3>Mother Details</h3></b><br>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">First Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="First name" id="motherfname" name="motherfname" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Middle Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Middle name" id="mothermname" name="mothermname" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Last Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                              <input type="text" class="form-control" placeholder="Last name" id="motherlname" name="motherlname" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Contact Number:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" pattern="[0-9]{11}" id="mothercontactno" name="mothercontactno" placeholder="Contact: 09XXXXXXXXX" class = "form-control">
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                             <input type="email" id="motheremail" name="motheremail" class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Occupation:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Occupation" id="motheroccupation" name="motheroccupation" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>
                                  <!-- Mother Info -->

                                  <!-- Guardian Info -->
                                    <b></b><h3>Guardian Details</h3></b><br>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">First Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                           <input type="text" class="form-control" placeholder="First name" id="guardianfname" name="guardianfname" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Middle Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Middle name" id="guardianmname" name="guardianmname" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Last Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                              <input type="text" class="form-control" placeholder="Last name" id="guardianlname" name="guardianlname" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Contact Number:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" pattern="[0-9]{11}" id="guardiancontactno" name="guardiancontactno" placeholder="Ex: 09XXXXXXXXX" class = "form-control">
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" id="guardianemail" name="guardianemail" class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                        </div>
                                        </div>
                                    </div>
                                  </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Occupation:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Occupation" id="guardianoccupation" name="guardianoccupation" />
                                        </div>
                                        </div>
                                    </div>
                                  </div>
                                  <!-- Guardian Info -->
                                </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="messages">
                                
                                <!-- Account details -->

                                <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>Account Id</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($parents as $parent) : ?>
                                        <tr>
                                            <td><?php echo $parent['Id'] ?></td>
                                            <td><?php echo $parent['fname'] ?></td>
                                            <td><?php echo $parent['mname'] ?></td>
                                            <td><?php echo $parent['lname'] ?></td>
                                            <td><?php echo $parent['address'] ?></td>
                                            <td><?php echo $parent['contactno'] ?></td>
                                            <td><?php echo $parent['email'] ?></td>
                                            <td><button type="button" class="btn bg-brown waves-effect" name="buttonid" id="parentid<?php echo $parent['Id'] ?>" value="<?php echo $parent['Id'] ?>"> Fill Details </button></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                </div>

                    <div class="body">
                            
                            <h3>
                                Account Details

                            </h3>

                            <button type="button" class="btn bg-green waves-effect" name="buttonfatherid" id="btnfather" > Use Father Details </button>
                            <button type="button" class="btn bg-pink waves-effect" name="buttonmotherid" id="btnmother" > Use Mother Details </button>
                            <button type="button" class="btn bg-gray waves-effect" name="buttonguardianid" id="btnguardian" > Use Guardian Details </button>
                            <br>
                            <br>

                             <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Account ID:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" class="form-control" placeholder="Account Id"  id="accountid" readonly/>
                                             <input type="hidden" class="form-control" name="accountid" id="accounthidid" />
                                        </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">First Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                             <input type="text" class="form-control" placeholder="First name"  id="accountfname" readonly />
                                            <input type="hidden" class="form-control" name="accountfname" id="accounthidfname" />
                                        </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Middle Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                         <input type="text" class="form-control" placeholder="Middle name"  id="accountmname" readonly />
                                        <input type="hidden" class="form-control" name="accountmname" id="accounthidmname" />
                                        </div>
                                        </div>
                                    </div>
                            </div>

                             <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Last Name:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                          <input type="text" class="form-control" placeholder="Last name"  id="accountlname" readonly/>
                                          <input type="hidden" class="form-control" name="accountlname" id="accounthidlname" />
                                        </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Contact Number:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                         <input type="text" pattern="[0-9]{11}"  class="form-control" id="accountcontactno" placeholder="Contact: 099999999999" readonly>
                                        <input type="hidden" class="form-control" name="accountcontactno" id="accounthidcontactno" />
                                        </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Email:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                       <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" class="form-control" placeholder="juandelacruz@mail.com" id="accountemail"  readonly/>
                                            <input type="hidden" class="form-control" name="accountemail" id="accounthidemail" />
                                        </div>
                                        </div>
                                    </div>
                            </div>

                            <br>
                            <br>

                              <input type="submit" value = "SUBMIT ALL DETAILS!" class="btn btn-block btn-lg btn-warning waves-effect">
                        </div>

                </div>
                <!-- Account details -->
                              
                            </div>
                        </div>
                    </div>
                </div>
        </div>












        </div>
    </div>

    <!-- End Form -->
</section>
<?php echo form_close()?>
</body>
<script>
    var levelObject = {
    "Elementary": {
        "1": [],
        "2": [],
        "3": [],
        "4": [],
        "5": [],
        "6": []
    },

    "Highschool": {
        "7": [],
        "8": [],
        "9": [],
        "10": []
    },

    "Senior Highschool": {
        "11": [],
        "12": []
       
    },
   
}
window.onload = function () {
    var Level = document.getElementById("level"),
        Grade = document.getElementById("grade"),
        variable = document.getElementById("variable");
    for (var level in levelObject) {
        Level.options[Level.options.length] = new Option(level, level);
    }
    Level.onchange = function () {
        Grade.length = 1; // remove all options bar first
        
        if (this.selectedIndex < 1) return; // done   
        for (var grade in levelObject[this.value]) {
            Grade.options[Grade.options.length] = new Option(grade, grade);
        }
    }
    Level.onchange(); // reset in case page is reloaded
    Grade.onchange = function () {
        
        if (this.selectedIndex < 1) return; // done   
        var cities = levelObject[Level.value][this.value];
        
    }
}

</script>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagetag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('[id^=parentid]').click(function() {
            var sid = $(this).val();
            $.ajax({
                type : "POST",
                url : "<?php echo base_url(); ?>admission/getparentdetails",
                dataType : "json",
                data : {"sid" : sid},
                success : function(data) {
                    $('#accountid').val(data[0]['Id']);
                    $('#accountfname').val(data[0]['fname']);
                    $('#accountmname').val(data[0]['mname']);
                    $('#accountlname').val(data[0]['lname']);
                    $('#accountcontactno').val(data[0]['contactno']);
                    $('#accountemail').val(data[0]['email']);
                    $('#accounthidid').val(data[0]['Id']);
                    $('#accounthidfname').val(data[0]['fname']);
                    $('#accounthidmname').val(data[0]['mname']);
                    $('#accounthidlname').val(data[0]['lname']);
                    $('#accounthidcontactno').val(data[0]['contactno']);
                    $('#accounthidemail').val(data[0]['email']);
                }
            });
        });
    });
</script>




<script type="text/javascript">
    $(document).ready(function() {
        $('#btnfather').click(function() {
            var fname = $('#fatherfname').val();
            var mname  = $('#fathermname').val();
            var lname  = $('#fatherlname').val();
            var contactno  = $('#fathercontactno').val();
            var email  = $('#fatheremail').val();
            $('#accountid').val('');
            $('#accountfname').val(fname);
            $('#accountmname').val(mname);
            $('#accountlname').val(lname);
            $('#accountcontactno').val(contactno);
            $('#accountemail').val(email);
            $('#accounthidid').val('');
            $('#accounthidfname').val(fname);
            $('#accounthidmname').val(mname);
            $('#accounthidlname').val(lname);
            $('#accounthidcontactno').val(contactno);
            $('#accounthidemail').val(email);

        });

        $('#btnmother').click(function() {
            var fname = $('#motherfname').val();
            var mname  = $('#mothermname').val();
            var lname  = $('#motherlname').val();
            var contactno  = $('#mothercontactno').val();
            var email  = $('#motheremail').val();
            $('#accountid').val('');
            $('#accountfname').val(fname);
            $('#accountmname').val(mname);
            $('#accountlname').val(lname);
            $('#accountcontactno').val(contactno);
            $('#accountemail').val(email);
            $('#accounthidid').val(this.Id);
            $('#accounthidfname').text(this.fname);
            $('#accounthidmname').val(this.mname);
            $('#accounthidlname').val(this.lname);
            $('#accounthidcontactno').val(this.contactno);
            $('#accounthidemail').val(this.email);
        });

        $('#btnguardian').click(function() {
            var fname = $('#guardianfname').val();
            var mname  = $('#guardianmname').val();
            var lname  = $('#guardianlname').val();
            var contactno  = $('#guardiancontactno').val();
            var email  = $('#guardianemail').val();
            $('#accountid').val('');
            $('#accountfname').val(fname);
            $('#accountmname').val(mname);
            $('#accountlname').val(lname);
            $('#accountcontactno').val(contactno);
            $('#accountemail').val(email);
            $('#accounthidid').val(this.Id);
            $('#accounthidfname').val(this.fname);
            $('#accounthidmname').val(this.mname);
            $('#accounthidlname').val(this.lname);
            $('#accounthidcontactno').val(this.contactno);
            $('#accounthidemail').val(this.email);

        });

    });











</script>


</html>