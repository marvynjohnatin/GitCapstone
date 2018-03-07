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
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <a href="../../index.html">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                <li class="active">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Students</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="active">
                            <a href="addstudent">Create New</a>
                        </li>
                        <li>
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
                    <!--FORM START -->

                    <div class="body">
                        <h2 class="card-inside-title">Basic Information</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="First name" name="fname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Middle name" name="mname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Last name" name="lname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" name="admission">
                                            <option value="">Year of Admission</option>
                                            <?php
                                            for ($x = 2000; $x <= 3000; $x++) {
                                                echo "<option value='$x'>$x</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" placeholder="Age" name="age" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="birthday" class="datepicker form-control" placeholder="Please choose a date...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <select class="form-control show-tick" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Address" name="address" />
                                    </div><br>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Birthplace" name="birthplace" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" pattern="[0-9]{11}" name="contactno" placeholder="Ex: 09XXXXXXXXX" class = "form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" name="email" class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                    </div>
                                </div>


                                <div class="row clearfix">
                                <div class="col-sm-12">
                                <select name="optone" id="Level" class="form-control show-tick">
                                    <option value="" selected="selected">Select Level</option>
                                </select>
                                <br>
                                <select name="opttwo" id="Grade" class="form-control show-tick">
                                    <option value="" selected="selected">Select Grade </option>
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
                        <h2 class="card-inside-title">Basic Information</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="First name" name="fatherfname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Middle name" name="fathermname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Last name" name="fatherlname" />
                                    </div>
                                </div>

                                <div class="form-group">
                                  <div class="form-line">
                                      <input type="text" pattern="[0-9]{11}" name="fathercontactno" placeholder="Contact: 09XXXXXXXXX" class = "form-control">
                                  </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" name="fatheremail" class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="fatheroccupation" name="fatheroccupation" />
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
                        <h2 class="card-inside-title">Basic Information</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="First name" name="motherfname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Middle name" name="mothermname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Last name" name="motherlname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" pattern="[0-9]{11}" name="mothercontactno" placeholder="Contact: 09XXXXXXXXX" class = "form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" name="motheremail" class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="motheroccupation" name="motheroccupation" />
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
                        <h2 class="card-inside-title">Basic Information</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="First name" name="guardianfname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Middle name" name="guardianmname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Last name" name="guardianlname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" pattern="[0-9]{11}" name="guardiancontactno" placeholder="Ex: 09XXXXXXXXX" class = "form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="email" name="guardianemail" class="form-control email" placeholder="Ex: juandelacruz@mail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="guardianoccupation" name="fatheroccupation" />
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
                            <h2>
                                List Of Parent Account
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

                                    <?php foreach($parents as $parent) : ?>
                                        <tr>
                                            <td><?php echo $parent['Id'] ?></td>
                                            <td><?php echo $parent['fname'] ?></td>
                                            <td><?php echo $parent['mname'] ?></td>
                                            <td><?php echo $parent['lname'] ?></td>
                                            <td><?php echo $parent['address'] ?></td>
                                            <td><?php echo $parent['contactno'] ?></td>
                                            <td><?php echo $parent['email'] ?></td>
                                            <td><button type="button" class="btn bg-brown waves-effect" name="buttonid" id="parentid<?php echo $parent['Id'] ?>" value="<?php echo $parent['Id'] ?>"> Fill Details </button></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            <h2>

                                Account Details
                            </h2>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Account Id" name="accountid" id="accountid"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="First name" name="accoutfname" disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Middle name" name="accountmname" disabled />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Last name" name="accountlname" disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control"  name="accountaddress" placeholder="Address" disabled/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" pattern="[0-9]{11}" name="accountcontactno" class="form-control email" placeholder="Contact: 099999999999" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" class="form-control" placeholder="juandelacruz@mail.com" name="accountemail" disabled />
                                </div>
                            </div>































                        </div>
                    </div>
                </div>
            </div>
        <!-- END Account details -->

<input type="submit">









        </div>
    </div>

    <!-- End Form -->
</section>
<?php echo form_close()?>
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
    var Level = document.getElementById("Level"),
        Grade = document.getElementById("Grade"),
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
            alert('hi');
            var sid = $(this).val();
            $('#accountid').val(sid);
            var data_String = 'sid=' + sid;
            $.get('getparentdetails.php', data_String, function(result) {

                $.each(result, function(){
                    // $('#accountid').val(this.Id);
                });

            });
        });
    });
</script>
</body>



</html>