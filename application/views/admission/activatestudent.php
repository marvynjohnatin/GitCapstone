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
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
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
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Students</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="viewapplicant">View Applicants</a>
                        </li>
                        <li class="">
                            <a href="viewcreateapplicant">Create Applicant</a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Students</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="">
                            <a href="addstudent">Create New</a>
                        </li>
                        <li class="active">
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
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Students with Pending Account
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Student No.</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Age</th>
                                    <th>Birthday</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>Level</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($results as $student) : ?>
                                <tr>
                                    <td><?php echo $student['studentnumber'] ?></td>
                                    <td><?php echo $student['fname'] ?></td>
                                    <td><?php echo $student['mname'] ?></td>
                                    <td><?php echo $student['lname'] ?></td>
                                    <td><?php echo $student['age'] ?></td>
                                    <td><?php echo $student['dateofbirth'] ?></td>
                                    <td><?php echo $student['gender'] ?></td>
                                    <td><?php echo $student['address'] ?></td>
                                    <td><?php echo $student['current_level'] ?></td>
                                    <td><?php echo $student['current_year'] ?></td>
                                    <td><button type="button" data-toggle="modal" data-target="#activateModal" class="btn bg-brown waves-effect" id="buttonid<?php echo $student['Id'] ?>" value="<?php echo $student['Id'] ?>"> Activate </button></td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>

                                <div class="pagination-links">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
        <div class="modal fade" id="activateModal" tabindex="-1" role="dialog">
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

                                    <?php echo form_open('admission/activatestudent/activating')?>
                                        Are you sure you want to activate this record?
                                    <input type="hidden" id="hiddenidval" name="studentid" > </input>
                                        <br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style = "background-color:red;" >
                        <button type="submit" class="btn btn-link waves-effect" name="submit"><font color = "orange">Activate</font></button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal"><font color = "orange">CLOSE</font></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>



</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('[id^=buttonid]').click(function() {
            $('#hiddenidval').val($(this).val());
        });
    });
</script>
<script>
    $( function() {
        var availableTags = [
            <?php foreach ($searchbar as $student):?>
            <?php echo "'".$student['studentnumber'].$student['lname']."'".','?>
            <?php endforeach;?>
            ''
        ];
        $( "#search" ).autocomplete({
            source: availableTags
        });
    } );
    //javascript
</script>


</html>