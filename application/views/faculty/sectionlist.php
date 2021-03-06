
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
                    <li class="">
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
                    <li class="active">
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
                <h2>Grades Section</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Section List</b></font>
                            </h2>
                        </div>
                        <div class="body">

                              <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Subject:<font color = "green"> <b>Algebra 1</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Year Level:<font color = "green"> <b>Highschool - Grade 7</b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    School Year:<font color = "green"> <b>2013-2014</b></font>
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
                                            <th>Code</th>
                                            <th>Section</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Subject Schedule</th>
                                            <th>Student Count</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>St. Lorenzo</td>
                                            <td>7:00 A.M.</td>
                                            <td>8:00 A.M.</td>
                                            <td>Monday - Friday</td>
                                            <td>45</td>
                                            <td>
                                            <a href="studentlist">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View Student</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>St. Blaise</td>
                                            <td>9:00 A.M.</td>
                                            <td>10:00 A.M.</td>
                                            <td>Monday - Friday</td>
                                            <td>45</td>
                                            <td>
                                            <a href="studentlist">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View Student</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>St. Martin</td>
                                            <td>11:00 A.M.</td>
                                            <td>12:00 A.M.</td>
                                            <td>Monday - Friday</td>
                                            <td>45</td>
                                            <td>
                                            <a href="studentlist">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View Student</span>
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

