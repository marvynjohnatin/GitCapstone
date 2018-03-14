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
                        <li class="active">
                            <a href="addstudent">Create New</a>
                        </li>
                        <li class="">
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
            <h2>Add new Student</h2>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Input Student Details
                        </h2>
                    </div>


                    <div class="body">
                        <h2 class="card-inside-title">Basic Information</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Age</th>
                                            <th>Birthday</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($applicants as $app) : ?>
                                            <tr>
                                                <td><?php echo $app['Id'] ?></td>
                                                <td><?php echo $app['fname'] ?></td>
                                                <td><?php echo $app['mname'] ?></td>
                                                <td><?php echo $app['lname'] ?></td>
                                                <td><?php echo $app['age'] ?></td>
                                                <td><?php echo $app['dateofbirth'] ?></td>
                                                <td><?php echo $app['address'] ?></td>
                                                <td><?php echo $app['email'] ?></td>
                                                <td><button type="button" class="btn bg-brown waves-effect" id="appid<?php echo $app['Id'] ?>" value="<?php echo $app['Id'] ?>"> Fill Details </button></td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>


                                <b></b><h2>Fill Student Details</h2></b>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" class="form-control" placeholder="First name" name="appid" id="appid" required/>
                                        <input type="text" class="form-control" placeholder="First name" name="fname" id="fname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Middle name" name="mname" id="mname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Last name" name="lname" id="lname" />

                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <select name="gender" id="gender" class="form-control show-tick">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Address" name="address" id="address"/>
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" placeholder="Age" name="age" id="age" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <strong>Birthday:</strong><input type="date" name="birthday" id="birthday" class="form-control" placeholder="Please Input Birthday">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Birthplace" id="birthplace" name="birthplace" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" pattern="[0-9]{11}" name="contactno" id="contactno" placeholder="Ex: 09XXXXXXXXX" class = "form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control email" id="email" placeholder="Ex: juandelacruz@mail.com">
                                    </div>
                                </div>


                                <div class="row clearfix">
                                <div class="col-sm-12">
                                <select name="level" id="level" class="form-control show-tick">
                                    <option value="" selected="selected">Select Level</option>
                                </select>
                                <br>
                                <select name="grade" id="grade" class="form-control show-tick">
                                    <option value="" selected="selected">Select Grade </option>
                                </select>
                                    <br>
                                    <select name="strand" id="strand" class="form-control show-tick">
                                        <option value="N/A" selected="selected">N/A </option>
                                        <?php foreach ($strands as $strand):?>
                                        <option value="<?php echo $strand['code'] ?>"><?php echo $strand['code'] ?> </option>
                                        <?php endforeach;?>
                                    </select>
                                </select>
                                </div>
                                </div>

                                <div class="form-group">
                                    <label> Upload Image</label><br>
                                    <input type="file" name="userfile" onchange="readURL(this);"    >
                                </div><img id="imagetag"  height="160" width="200">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Student Info -->

        <!-- Entrance Exam Info -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Entrance Exam Details
                        </h2>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Basic Information</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Exam Grade" name="examgrade" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="examremark" class="form-control show-tick">
                                            <option value="PASS" selected="selected">PASS </option>
                                            <option value="FAIL" selected="">FAIL </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <strong>Exam Date:</strong><input type="date" name="examdate" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Entrance Exam Details -->

        <!-- Father Info -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Father Details
                        </h2>
                    </div>
                    <div class="body">
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

                                <?php foreach($fathers as $father) : ?>
                                    <tr>
                                        <td><?php echo $father['Id'] ?></td>
                                        <td><?php echo $father['fname'] ?></td>
                                        <td><?php echo $father['mname'] ?></td>
                                        <td><?php echo $father['lname'] ?></td>
                                        <td><?php echo $father['address'] ?></td>
                                        <td><?php echo $father['contactno'] ?></td>
                                        <td><?php echo $father['email'] ?></td>
                                        <td><button type="button" class="btn bg-brown waves-effect" name="buttonid" id="fatherid<?php echo $father['Id'] ?>" value="<?php echo $father['Id'] ?>"> Fill Details </button></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        <h2 class="card-inside-title">Basic Information</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Id" id="fatheridtext" readonly/>
                                        <input type="hidden" class="form-control" id="fatheridhid" name="fatherid" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="First name" id="fatherfname" name="fatherfname" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Middle name" id="fathermname" name="fathermname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Last name" id="fatherlname" name="fatherlname" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="fatheraddress" name="fatheraddress"  placeholder="Address" class = "form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" pattern="[0-9]{11}" id="fathercontactno" name="fathercontactno"  placeholder="Contact: 09XXXXXXXXX" class = "form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" id="fatheremail" name="fatheremail"  class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control"  placeholder="fatheroccupation" id="fatheroccupation" name="fatheroccupation" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- #END# Father Details -->

        <!-- Mother Info -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Mother Details
                            </h2>
                        </div>
                        <div class="body">
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

                                    <?php foreach($mothers as $mother) : ?>
                                        <tr>
                                            <td><?php echo $mother['Id'] ?></td>
                                            <td><?php echo $mother['fname'] ?></td>
                                            <td><?php echo $mother['mname'] ?></td>
                                            <td><?php echo $mother['lname'] ?></td>
                                            <td><?php echo $mother['address'] ?></td>
                                            <td><?php echo $mother['contactno'] ?></td>
                                            <td><?php echo $mother['email'] ?></td>
                                            <td><button type="button" class="btn bg-brown waves-effect" name="buttonid" id="motherid<?php echo $mother['Id'] ?>" value="<?php echo $mother['Id'] ?>"> Fill Details </button></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                                <h2 class="card-inside-title">Basic Information</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Id" id="motheridtext" readonly/>
                                                <input type="hidden" class="form-control" id="motheridhid" name="motherid" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="First name" id="motherfname" name="motherfname" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Middle name" id="mothermname" name="mothermname" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Last name" id="motherlname" name="motherlname" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="motheraddress" name="motheraddress"  placeholder="Address" class = "form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" pattern="[0-9]{11}" id="mothercontactno" name="mothercontactno"  placeholder="Contact: 09XXXXXXXXX" class = "form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" id="motheremail" name="motheremail"  class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control"  placeholder="motheroccupation" id="motheroccupation" name="motheroccupation" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Mother Details -->

        <!-- Guardian Info -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Guardian Details
                                </h2>
                            </div>
                            <div class="body">
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

                                        <?php foreach($guardians as $guardian) : ?>
                                            <tr>
                                                <td><?php echo $guardian['Id'] ?></td>
                                                <td><?php echo $guardian['fname'] ?></td>
                                                <td><?php echo $guardian['mname'] ?></td>
                                                <td><?php echo $guardian['lname'] ?></td>
                                                <td><?php echo $guardian['address'] ?></td>
                                                <td><?php echo $guardian['contactno'] ?></td>
                                                <td><?php echo $guardian['email'] ?></td>
                                                <td><button type="button" class="btn bg-brown waves-effect" name="buttonid" id="guardianid<?php echo $guardian['Id'] ?>" value="<?php echo $guardian['Id'] ?>"> Fill Details </button></td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    <h2 class="card-inside-title">Basic Information</h2>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Id" id="guardianidtext" readonly/>
                                                    <input type="hidden" class="form-control" id="guardianidhid" name="guardianid" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="First name" id="guardianfname" name="guardianfname" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Middle name" id="guardianmname" name="guardianmname" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Last name" id="guardianlname" name="guardianlname" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="guardianaddress" name="guardianaddress"  placeholder="Address" class = "form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" pattern="[0-9]{11}" id="guardiancontactno" name="guardiancontactno"  placeholder="Contact: 09XXXXXXXXX" class = "form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="email" id="guardianemail" name="guardianemail"  class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control"  placeholder="guardianoccupation" id="guardianoccupation" name="guardianoccupation" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- #END# Guardian Details -->

        <!-- Account details -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h3>
                                Primary Account<br>
                                Which Account to use as Primary Parent Account?
                            </h3>
                        </div>

                            <div class="form-group"><h4>
                                <div class="form-line">
                                    <input name="primaryrole" type="radio" id="radio_30" class="radio-col-blue" value="father"  />
                                    <label for="radio_30">Father</label>
                                    <input name="primaryrole" type="radio" id="radio_31" class="radio-col-pink" value="mother" />
                                    <label for="radio_31">Mother</label>
                                    <input name="primaryrole" type="radio" id="radio_32" class="radio-col-green" value="guardian" />
                                    <label for="radio_32">Guardian</label>
                                </div></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END Account details -->

    <button type="submit" class="btn bg-red waves-effect">Submit</button>









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

        $('[id^=appid]').click(function() {
            var sid = $(this).val();

            $.ajax({
                type : "POST",
                url : "<?php echo base_url(); ?>admissions/getappdetails",
                dataType : "json",
                data : {"sid" : sid},
                success : function(data) {
                    $('#appid').val(data[0]['Id']);
                    $('#fname').val(data[0]['fname']);
                    $('#mname').val(data[0]['mname']);
                    $('#lname').val(data[0]['lname']);
                    $('#gender').val(data[0]['gender']);
                    $('#address').val(data[0]['address']);
                    $('#age').val(data[0]['age']);
                    $('#birthday').val(data[0]['dateofbirth']);
                    $('#birthplace').val(data[0]['placeofbirth']);
                    $('#contactno').val(data[0]['contactno']);
                    $('#email').val(data[0]['email']);
                }
            });
        });

        $('[id^=fatherid]').click(function() {
            var sid = $(this).val();
            $.ajax({
                type : "POST",
                url : "<?php echo base_url(); ?>admissions/getparentdetails",
                dataType : "json",
                data : {"sid" : sid},
                success : function(data) {
                    $('#fatheridtext').val(data[0]['Id']);
                    $('#fatheridhid').val(data[0]['Id']);
                    $('#fatherfname').val(data[0]['fname']);
                    $('#fathermname').val(data[0]['mname']);
                    $('#fatherlname').val(data[0]['lname']);
                    $('#fatheraddress').val(data[0]['address']);
                    $('#fathercontactno').val(data[0]['contactno']);
                    $('#fatheremail').val(data[0]['email']);
                    $('#fatheroccupation').val(data[0]['occupation']);
                }
            });
        });

        $('[id^=motherid]').click(function() {
            var sid = $(this).val();
            $.ajax({
                type : "POST",
                url : "<?php echo base_url(); ?>admissions/getparentdetails",
                dataType : "json",
                data : {"sid" : sid},
                success : function(data) {
                    $('#motheridtext').val(data[0]['Id']);
                    $('#motheridhid').val(data[0]['Id']);
                    $('#motherfname').val(data[0]['fname']);
                    $('#mothermname').val(data[0]['mname']);
                    $('#motherlname').val(data[0]['lname']);
                    $('#motheraddress').val(data[0]['address']);
                    $('#mothercontactno').val(data[0]['contactno']);
                    $('#motheremail').val(data[0]['email']);
                    $('#motheroccupation').val(data[0]['occupation']);
                }
            });
        });

        $('[id^=guardianid]').click(function() {
            var sid = $(this).val();
            $.ajax({
                type : "POST",
                url : "<?php echo base_url(); ?>admissions/getparentdetails",
                dataType : "json",
                data : {"sid" : sid},
                success : function(data) {
                    $('#guardianidtext').val(data[0]['Id']);
                    $('#guardianidhid').val(data[0]['Id']);
                    $('#guardianfname').val(data[0]['fname']);
                    $('#guardianmname').val(data[0]['mname']);
                    $('#guardianlname').val(data[0]['lname']);
                    $('#guardianaddress').val(data[0]['address']);
                    $('#guardiancontactno').val(data[0]['contactno']);
                    $('#guardianemail').val(data[0]['email']);
                    $('#guardianoccupation').val(data[0]['occupation']);
                }
            });
        });


    });
</script>



</html>