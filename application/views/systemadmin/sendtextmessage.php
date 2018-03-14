<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?php echo base_url()?>assets/images/users/noimage.jpg width="48" height="48" alt="User" />
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
                <li class="active">
                    <a href="managefees">
                        <i class="material-icons">folder_shared</i>
                        <span>Manage Fees</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url(); ?>user/logout">
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
    <?php echo form_open('systemadmin/sending'); ?>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <font color = "red"><b>Send Text Message</b></font>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="level" class="form-control show-tick">
                                            <option value="all">All</option>
                                            <option value="elem">Elementary</option>
                                            <option value="hs">High School</option>
                                            <option value="shs">Senior High School</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                       <textarea rows="4" cols="50" name="text"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
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

                                    <form action ="addfee" method="POST">

                                        <h4><font color = "red"><b>Fee Description:</b></font></h4><input type = "text" class = "form-control" name = "description" required>
                                        <h4><font color = "red"><b>Level:</b></font></h4>
                                        <select name="level" id="level" class="form-control show-tick">
                                            <option value="General" selected="selected">General</option>
                                        </select>

                                        <h4><font color = "red"><b>Year:</b></font></h4>
                                        <select name="year" id="year" class="form-control show-tick">
                                            <option value="General" selected="selected">General</option>
                                        </select>
                                        <h4><font color = "red"><b>Strand: - For Senior High School Level</b></font></h4>
                                        <select name="strand" class="form-control show-tick">
                                            <option value="N/A" selected="selected">N/A</option>
                                            <?php foreach ($strands as $str): ?>
                                                <option value="<?php echo $str['code']?>"><?php echo $str['code']?></option>
                                            <?php endforeach;?>
                                        </select>
                                        <h4><font color = "red"><b>Amount Fee:</b></font></h4><input type = "text" class = "form-control" name = "amount" required>

                                        <br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style = "background-color:red;" >
                        <button type="submit" class="btn btn-link waves-effect" name="submit"><font color = "orange">Add Fee</font></button>
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