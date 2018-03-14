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
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->

   

    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">

                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <img src="<?php echo base_url(); ?>assets-2/images/sja.png" width="40" height="50" alt="User" />
                <a class="navbar-brand" href="">SJA ACADEMY STUDENT PORTAL</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><font color = "yellow">Logged in As: <?php echo $this->session->userdata['accounttype']?> || ID: <?php echo $this->session->userdata['studentnumber'] ?> || Name: <?php echo $this->session->userdata['fname'] ?> </font></a>
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
                    <img src="<?php echo base_url() ?>assets/images/students/<?php echo $results['stud_pic'] ?>" width="107" height="107" alt="User" />
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
                            <span>Student Profile</span>
                        </a>
                    </li>
                     <li class="">
                        <a href="gradelist">
                            <i class="material-icons">insert_drive_file</i>
                            <span>Grades</span>
                        </a>
                    </li>
                     <li class="active">
                        <a href="enrollment">
                            <i class="material-icons">folder_shared</i>
                            <span>Online Enrollment</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="schedule">
                            <i class="material-icons">schedule</i>
                            <span>Subject Schedule</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="account">
                            <i class="material-icons">account_balance_wallet</i>
                            <span>Account Ledger</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="payment">
                            <i class="material-icons">payment</i>
                            <span>Online Payment</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>logout">
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
    <?php echo form_open('portals/addinvoicerecord')?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Enrollment Section</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Enrollment Details</b></font>
                            </h2>
                        </div>
                        <div class="body">

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Level:<font color = "green"> <?php echo $results['current_level'] ?></font>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Grade:<font color = "green"> <b>Grade <?php echo $results['current_year'] ?></b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                School Year: <font color = "green"> <b><?php echo $sy[0] ?></b></font>
                <input type="hidden" value="<?php echo $sy[0] ?>" name="schoolyear">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <div class="form-line">
                                    Payment Type: 
                                    <font color = "green"><b><?php echo $this->input->post('payment');?></b></font>
                                        <input type="hidden" name="payment" value="<?php echo $this->input->post('payment');?>" ?>
                                        <input type="hidden" name="studentnumber" value="<?php echo $this->session->userdata['studentnumber'];?>" ?>
                                    </div>                          
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            Scholar Type:
                                            <font color = "green"><b><?php echo $results['discounttype'];?></b></font>
                                            <input type="hidden" name="scholar" value="<?php echo $results['discounttype'];?>" ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            Scholarship Discount:
                                            <font color = "green"><b><?php echo $results['discount'];?></b></font>
                                            <input type="hidden" name="discount" value="<?php echo $results['discount'];?>" ?>

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

               <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Subject Details</b></font>
                            </h2>
                    
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($subjects as $subject): ?>
                                        <tr>
                                            <td><?php echo $subject['subject_code']?></td>
                                            <td><?php echo $subject['subject_name']?></td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assesment -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Fee Details</b></font>
                            </h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>Fee Description</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <>
                                    <!-- Initial Payment -->
                                    <input type="hidden" name="initial" value="<?php echo $initial[0]?>">
                                    <?php $total = 0; ?>
                                    <tr>
                                    <td>Initial Payment</td>
                                    <td>Php <?php echo number_format($initial[0], 2, '.', ',');?></td>
                                    <?php $total = $total + $initial[0] ?>
                                    </tr>
                                    <!-- End Initial Payment -->
                                    <?php foreach ($fees as $fee): ?>
                                        <tr>
                                            <td><?php echo $fee['fee_description'] ?></td>
                                            <td>Php <?php echo number_format($fee['amount'], 2, '.', ',');?></td>
                                        </tr>
                                    <?php $total = $total + $fee['amount']; ?>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                            Overall Fee:<?php echo 'Php '.number_format($total, 2, '.', ',')?><br>
                            <?php $percent = str_replace('%', '', $results['discount']) / 100;?>
                            Discount:<?php echo $results['discount']?><br>
                            <?php $disc=0 ?>
                            <?php if($this->input->post('payment') == 'Full'){
                                echo "Fully Paid Discount:".$discount[0]*100;
                                echo "%<br>";
                                $disc = $discount[0] * $total;
                            }
                            ?>


                            Deduction:<?php $deducted = ($total*$percent)+$disc; echo 'Php '.number_format($deducted, 2, '.', ',') ?><br>
                            <strong>Total:<?php $total_fee = $total-$deducted; echo 'Php '.number_format($total_fee, 2, '.', ',') ?><br></strong>
                            <input id="total" type="hidden" value="<?php echo $total_fee?>" name="totalfee"/>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit">Submit</button>
            <?php echo form_close()?>
            <button type="button" data-toggle="modal" data-target="#activateModal" value="<?php echo $total_fee?>" id="buttonmodal">Breakdown of Payment</button>



            <!-- MODAL -->
            <div class="modal fade" id="activateModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style = "background-color:red;">
                            <h4 class="modal-title" id="defaultModalLabel"><font color = "white">Breakdown of Payment</font></h4>
                            <br>
                        </div>
                        <div class="modal-body">
                            <div class="body">
                                <div class="row clearfix">
                                    <table id="breakdown">
                                        <tbody>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style = "background-color:red;" >
                            <button type="button" id="buttonclose" class="btn btn-link waves-effect" data-dismiss="modal"><font color = "orange">CLOSE</font></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- endMODAL -->
        </div>
    </section>


</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('#buttonmodal').click(function() {
            var sid = $(this).val();
            var ctr = 0;
            <?php if ($this->input->post('payment') == 'Monthly'):?>
            $('#breakdown tbody').append('<tr class="child"><td>Initial Payment</td><td>Php <?php echo number_format($initial[0], 2, ".", ",");?></td></tr>');
            <?php foreach ($daterange as $date):?>
            ctr = ctr+1;
            <?php endforeach;?>
            var fee = sid/ctr;
            var feevar = parseFloat(Math.round(fee * 100) / 100).toFixed(2);
            var total =  parseFloat(feevar).toLocaleString('en');
            <?php foreach ($daterange as $date):?>
            $('#breakdown tbody').append('<tr class="child"><td>End of <?php echo $date?>:</td><td>Php '+total+'</td></tr>');
            <?php endforeach;?>
            <?php endif;?>
            <?php if ($this->input->post('payment') == 'Full'):?>
            var fee = sid;
            var feevar = parseFloat(Math.round(fee * 100) / 100).toFixed(2);
            var total =  parseFloat(feevar).toLocaleString('en');
            $('#breakdown tbody').append('<tr class="child"><td>Upon Enrollment:</td><td>Php '+total+'</td></tr>');
            <?php endif;?>

        });

        $('#buttonclose').click(function() {
            var table = document.getElementById("breakdown");
            for(var i = table.rows.length - 1; i >= 0; i--)
            {
                table.deleteRow(i);
            }
        });
    });

</script>

