<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo base_url()?>assets/images/users/<?php echo $account[0]['user_pic'] ?>" width="48" height="48" alt="User" />
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
                    <a href="managefees">
                        <i class="material-icons">folder_shared</i>
                        <span>Manage Fees</span>
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
            <h2>Create Schedule</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <font color = "red"><b>Create Schedule</b></font>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                        <tr>
                                            <th>Section Id</th>
                                            <th>Section Level</th>
                                            <th>Section Grade</th>
                                            <th>Section Name</th>
                                            <th>Section Strand</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach ($sections as $section): ?>
                                            <tr>
                                                <td><?php echo $section['Id']?></td>
                                                <td><?php echo $section['level']?></td>
                                                <td><?php echo $section['grade']?></td>
                                                <td><?php echo $section['name']?></td>
                                                <td><?php echo $section['strand']?></td>
                                                <td>
                                                    <button type="button" class="btn bg-green waves-effect"  onclick="window.location='sectionschedule/<?php echo $section['Id'] ?>'">
                                                        <i class="material-icons">create</i>
                                                        <span>Create</span>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                        </tbody>
                                        <button type="button" class="btn bg-orange waves-effect" data-toggle="modal" data-target="#defaultModal">
                                            <i class="material-icons">add_circle</i>
                                            <span>Add New Subject</span>
                                        </button>
                                        &nbsp;
                                        <a href="<?php echo base_url(); ?>systemadmin/report">
                                            <button type="button" class="btn bg-orange waves-effect" style = "width:150px;" >
                                                <i class="material-icons">print</i>
                                                <span>Print</span>
                                            </button>
                                        </a>
                                        <br>
                                        <br>
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
        <!-- Default Size -->
        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style = "background-color:red;">
                        <h4 class="modal-title" id="defaultModalLabel"><font color = "white">Add Subject</font></h4>
                        <br>
                    </div>
                    <div class="modal-body">
                        <div class="body">
                            <div class="row clearfix">



                                <div class="col-sm-12">

                                    <form action ="subjects" method="POST">
                                        <h4><font color = "red"><b>Subject Description:</b></font></h4><input type = "text" class = "form-control" name = "description" required>
                                        <h4><font color = "red"><b>Subject Code:</b></font></h4><input type = "text" class = "form-control" name = "code" required>
                                        <h4><font color = "red"><b>Subject Coordinator:</b></font></h4><input type = "text" class = "form-control" name = "coordinator" required>

                                        <h4><font color = "red"><b>Subject Level:</b></font></h4>
                                        <select name="level" id="level" class="form-control show-tick">
                                            <option value="" selected="selected" name = "level">Select Level</option>
                                        </select>

                                        <h4><font color = "red"><b>Subject Year:</b></font></h4>
                                        <select name="year" id="year" class="form-control show-tick">
                                            <option value="" selected="selected" name = "year">Select Year </option>
                                        </select>

                                        <h4><font color = "red"><b>Subject Course: - For Senior High School Level</b></font></h4>
                                        <select name="course" id="strand" class="form-control show-tick">
                                            <option value="N/A" selected="selected" name ="course">N/A</option>
                                            <option value="ABM">ABM</option>
                                            <option value="HUMMS">HUMMS</option>
                                            <option value="STEM">STEM</option>
                                        </select>
                                        <br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style = "background-color:red;" >
                        <button type="submit" class="btn btn-link waves-effect" name="submit"><font color = "orange">SAVE CHANGES</font></button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal"><font color = "orange">CLOSE</font></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
</section>


</body>



</html>