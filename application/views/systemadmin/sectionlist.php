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
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_box</i>
                            <span>Student Section</span>
                        </a>
                        <ul class="ml-menu">
                            <li class = "active">
                                <a href="studentlist">Student List</a>
                            </li>
                            <li>
                                <a href="">Student Sectioning</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="">
                        <a href="subjects">
                            <i class="material-icons">date_range</i>
                            <span>Subject Section</span>
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
                <h2>Student Section</h2>
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
                    Level:<font color = "green"> <b>Highschool</b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Year:<font color = "green"> <b>Grade 7</b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#1st" data-toggle="tab">Grade 7</a></li>
                                <li role="presentation"><a href="#2nd" data-toggle="tab">Grade 8</a></li>
                                <li role="presentation"><a href="3rd" data-toggle="tab">Grade 9</a></li>
                                <li role="presentation"><a href="#4th" data-toggle="tab">Grade 10</a></li>
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
                                            <th>School Year</th>
                                            <th>Status</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="2nd">
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
                                            <th>School Year</th>
                                            <th>Status</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <!-- #END# Example Tab -->


                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            <!-- Textarea -->

            
        </div>
    </section>

   
</body>

