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
                     <li class="">
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
                    <li class="active">
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

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Payment Section</h2>
            </div>

            
            <div class="row clearfix">

            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <font color = "red"><b>Online Payment</b></font>
                            </h2>
                    
                        </div>
                        <div class="body">

                        <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Level:<font color = "green"> <b><?php echo $results['current_level'] ?></b></font>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                    Current Year:<font color = "green"> <b><?php echo $results['current_year'] ?></b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                Current School Year: <font color = "green"> <b><?php echo $sy[0] ?></b></font>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>Detail Number</th>
                                        <th>Due</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                                <?php foreach ($invoices as $invoice):?>
                                                    <tr>
                                                        <td><?php echo $invoice['Id']?></td>
                                                        <?php if ($invoice['month'] == 'Initial' ||$invoice['month'] == 'Upon Enrollment'): ?>
                                                        <td><?php echo $invoice['month']?></td>
                                                        <?php else:?>
                                                        <td><?php echo 'End of '.$invoice['month']?></td>
                                                        <?php endif;?>
                                                        <td><?php echo 'Php '.number_format($invoice['amount'], 2, '.', ',');?></td>
                                                        <td>
                                                            <button type="button" data-toggle="modal" data-target="#activateModal" class="btn bg-green waves-effect" id="paymentbutton<?php echo $invoice['Id']?>" value="<?php echo $invoice['Id']?>">
                                                                <i class="material-icons">payment</i>
                                                                <span>Pay Online</span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach;?>
                                                </tbody>
                                </table>
                            </div>

                            <br>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                <div class="alert alert-danger">
                                All online payments are done through <strong>PayPal!</strong>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>




            <!-- #END# Basic Examples -->
            <div class="modal fade" id="activateModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style = "background-color:red;">
                            <h4 class="modal-title" id="defaultModalLabel"><font color = "white">You are Proceeding to Paypal Payment</font></h4>
                            <br>
                        </div>

                        <div class="modal-body">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <?php echo form_open('paypal/create_payment_with_paypal')?>
                                        <input type="hidden" name="item_name" value="Payment Fee SJA" > </input>
                                        Id:<input type="text" id="paymentid" readonly>
                                        <input type="hidden" id="hiddenpaymentid" name="payment_number" > </input>
                                        Month:<input type="text" id="month" readonly><br>
                                        <input name="item_description" type="hidden" value="School Fee">
                                        <input type="hidden" id="hiddenmonth" name="payment_description" > </input>
                                        Amount:<input type="text" id="paymentamount" readonly><br>
                                        <input type="hidden" id="hiddenpaymentamount" name="paymentamount" > </input>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style = "background-color:red;" >
                            <button type="submit" class="btn btn-link waves-effect" ><font color = "orange">Proceed</font></button>
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
        $('[id^=paymentbutton]').click(function() {
            var sid = $(this).val();
            $.ajax({
                type : "POST",
                url : "<?php echo base_url(); ?>portals/getinvoicedetails",
                dataType : "json",
                data : {"sid" : sid},
                success : function(data) {
                    $('#paymentid').val(data[0]['Id']);
                    $('#month').val(data[0]['month']);
                    $('#paymentamount').val(data[0]['amount']);
                    $('#hiddenpaymentid').val(data[0]['Id']);
                    $('#hiddenmonth').val(data[0]['month']);
                    $('#hiddenpaymentamount').val(data[0]['amount']);

                }
            });
        });
    });
</script>
