
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Saint James Academy Registrar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="<?php echo base_url(); ?>logins/login">
         
          <span class="login100-form-title p-b-43">
            
            <b><font color = red>Login</font></b>
          </span>


                <div class="wrap-input100 validate-input" data-validate = "Valid username is required">
                    <input class="input100" type="text" name="username">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Username</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">

                    <div>
                        <a href="#" class="txt1">
                            Forgot Password?
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <input type = "submit" name = "bttLogin" value = "Login" class="login100-form-btn" >
                    <br>
                    <br>
                    <br>
                    <b>
                        <font color = "red">
                            <?php if($this->session->flashdata('login_failed')): ?>
                                <?php echo $this->session->flashdata('login_failed'); ?>
                            <?php endif; ?>
                            <?php if($this->session->flashdata('logged_out')): ?>
                                <?php echo $this->session->flashdata('logged_out'); ?>
                            <?php endif; ?>
                        </font>
                    </b>
                    </font>
                </div>



            </form>
            <div class="login100-more" style="background-image: url('<?php echo base_url() ?>assets/images/dp.jpg');" >
            </div>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>
</html>