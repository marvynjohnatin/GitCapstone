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
    <div class="container-fluid">
        <div class="block-header">
            <h2>Manage Fee</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <font color = "red"><b>Fee Records</b></font>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                        <tr>
                                            <th>Fee Id</th>
                                            <th>Description</th>
                                            <th>Level</th>
                                            <th>Year</th>
                                            <th>Strand</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach ($fees as $fee): ?>
                                            <tr>
                                                <td><?php echo $fee['Id']?></td>
                                                <td><?php echo $fee['fee_description']?></td>
                                                <td><?php echo $fee['level']?></td>
                                                <td><?php echo $fee['year']?></td>
                                                <td><?php echo $fee['strand']?></td>
                                                <td>Php <?php echo number_format($fee['amount'], 2, '.', ',');?></td>
                                                <td>
                                                    <a href="grade">
                                                        <button type="button" class="btn bg-green waves-effect">
                                                            <i class="material-icons">create</i>
                                                            <span>Update</span>
                                                        </button>
                                                    </a>
                                                    &nbsp;
                                                    <a href="grade">
                                                        <button type="button" class="btn bg-red waves-effect">
                                                            <i class="material-icons">clear</i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                        </tbody>
                                        <button type="button" class="btn bg-orange waves-effect" data-toggle="modal" data-target="#defaultModal">
                                            <i class="material-icons">add_circle</i>
                                            <span>Add Fee Record</span>
                                        </button>
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

<script>
    var levelObject = {
        "Elementary": {
            "Grade 1": [],
            "Grade 2": [],
            "Grade 3": [],
            "Grade 4": [],
            "Grade 5": [],
            "Grade 6": []
        },

        "Highschool": {
            "Grade 7": [],
            "Grade 8": [],
            "Grade 9": [],
            "Grade 10": []
        },

        "Senior Highschool": {
            "Grade 11": [],
            "Grade 12": []

        },

    }
    window.onload = function () {
            var Level = document.getElementById("level"),
                Grade = document.getElementById("year"),
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

</html>