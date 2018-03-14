  <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="" width="107" height="107"/>
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
                        <a href="scholarship">
                            <i class="material-icons">date_range</i>
                            <span>Scholarships</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="scheduling">
                            <i class="material-icons">folder_shared</i>
                            <span>Subject Scheduling</span>
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
                <h2>Scholarship Section</h2>
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
                                            <tr>
                                            <th>Student Number</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Year</th>
                                            <th>Level</th>
                                            <th>Course</th>
                                            <th>School Year</th>
                                            <th>Status</th>
                                            <th>Scholarship</th>
                                            
                                            
                                        </tr>
                                        <tbody>
                                        <tr>
                                        
                                            <td>2014141811</td>
                                            <td>Iris Joshua</td>
                                            <td>Loren</td>
                                            <td>Tanyag</td>
                                            <td>8</td>
                                            <td>Highschool</td>
                                            <td>N/A</td>
                                            <td>2016-2017</td>
                                            <td>Enrolled</td>
                                            <td>ESC</td>
                                            
                                            
         
                                        </tr>
                                        </tbody>
                                    <button type="button" class="btn bg-orange waves-effect" data-toggle="modal" data-target="#defaultModal">
                                    <i class="material-icons">add_circle</i>
                                    <span>Add New Student</span>
                                    </button>
                                    <br>
                                    <br>
                                    </thead>
                                   
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

