
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
                                <font color = "red"><b>Student List</b></font>
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
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                    School Year:<font color = "green"> <b>2013-2014</b></font>
                                        </div>
                                    </div>
                                </div>
                                  <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                    Section:<font color = "green"> <b>St. Lorenzo</b></font>
                                        </div>
                                    </div>
                                </div>
                                       <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                    Student Count:<font color = "green"> <b>45</b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row clearfix">
                                <div class="col-sm-12">
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#1st" data-toggle="tab">1st Quarter</a></li>
                                <li role="presentation"><a href="#2nd" data-toggle="tab">2nd Quarter</a></li>
                                <li role="presentation"><a href="3rd" data-toggle="tab">3rd Quarter</a></li>
                                <li role="presentation"><a href="#4th" data-toggle="tab">4th Quarter</a></li>
                                <li role="presentation"><a href="#final" data-toggle="tab">Final GPA</a></li>
                                </ul>
                                <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="1st">
                                   <!-- Basic Examples -->
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Student Number</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Grade</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2014141811</td>
                                            <td>Iris Joshua</td>
                                            <td>Loren</td>
                                            <td>Tanyag</td>
                                            <td>
                                            <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Grade" />
                                            </div>
                                            </div>
                                            </td>
                                            
                                        </tr>
                                           <tr>
                                            <td>2014151912</td>
                                            <td>Marvyn John</td>
                                            <td>Casao</td>
                                            <td>Atin</td>
                                            <td>
                                            <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Grade" />
                                            </div>
                                            </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2014132319</td>
                                            <td>Christian Joash</td>
                                            <td>De Guzman</td>
                                            <td>Cabungcal</td>
                                            <td>
                                            <div class="form-group">
                                            <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Grade" />
                                            </div>
                                            </div>
                                            </td>
                                            
                                        </tr>
                                      
                                        
                                    </tbody>
                                </table>
                                <button type="button" class="btn bg-orange waves-effect" style = "width:150px;">
                                <i class="material-icons">save</i>
                                <span>SAVE</span>
                                </button>
                                <br>
                                <br>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="2nd">
                                  
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="3rd">
                                    
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="4th">
                                  
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="final">
                                  
                                </div>
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

