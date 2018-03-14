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
                                <a href="studentlist">File Management</a>
                            </li>
                            <li>
                                <a href="">Student Sectioning</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="">
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
                                <div class="col-sm-12">
                                <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Level</th>
                                            <th>Action</th>           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Kindergarten</td>
                                            <td>
                                            <a href="yearlist">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Elementary</td>
                                            <td>
                                            <a href="yearlist">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>High School</td>
                                            <td>
                                            <a href="yearlist">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View</span>
                                            </button>
                                            </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Senior High School</td>
                                            <td>
                                            <a href="yearlist">    
                                            <button type="button" class="btn bg-green waves-effect">
                                            <i class="material-icons">search</i>
                                            <span>View</span>
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

