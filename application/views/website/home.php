<?php //include('header.php'); ?>
<?php //include('navbar-1.php'); ?>
    <div class="container">
        <div class="margin-top">
            <div class="row">

            <?php //--------------------------------------------------------------------------------------?>
                    <?php //include('head.php'); ?>
            <div class="span12">
                    <div class="alert alert-danger"><Strong>Heads Up!</strong>&nbsp;Welcome to Saint James Academy Online
                            <div class="pull-right">
                                <i class="icon-calendar icon-large"></i>
                                <?php
                                $Today = date('y:m:d');
                                $new = date('l, F d, Y', strtotime($Today));
                                echo $new;
                                ?>
                            </div>
                    </div>
            </div>

            <?php //--------------------------------------------------------------------------------------?>

            <div class="span2">
                    <?php //include('sidebar.php'); ?>

                <div class="life-side-bar">
                    <p><img src="<?php echo base_url(); ?>assets/images/sja.png" alt="" width="170" class="img-polaroid"/></p>

                <div class="hero-container">                  
                    <ul class="nav nav-tabs nav-stacked">
                    <li>
                    <a  class="yellow_link" href="sitemap"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map</a>
                    </li>

                    <li>
                    <a  class="yellow_link" href="about"><i class="icon-user icon-large"></i>&nbsp;About Us</a>
                    </li>

                    <li>
                    <a  class="yellow_link" href="galleries"><i class="icon-picture icon-large"></i>&nbsp;Galleries</a>
                    </li>
                </ul>
                </div>
                </div>
            </div>

            <?php //--------------------------------------------------------------------------------------?>

            <div class="span10">
                    <?php //include('videos.php'); ?>

                            <div style="overflow:hidden; width:960px; margin:0 auto; padding:0 20px;"> 
                <div class="pix_diapo">           
                <div data-thumb="<?php echo base_url();?>assets/images/Slider-1.jpg" width = "900px" data-time="7000">
                <img src="<?php echo base_url();?>assets/images/Slider-1.jpg">
                </div>
                
                <div data-thumb="<?php echo base_url();?>assets/images/Slider-2.jpg" width = "900px" data-time="7000">
                <img src="<?php echo base_url();?>assets/images/Slider-2.jpg">
                </div>

                <div data-thumb="<?php echo base_url();?>assets/images/Slider-3.jpg" width = "900px" data-time="7000">
                <img src="<?php echo base_url();?>assets/images/Slider-3.jpg">
                </div>

                <div data-thumb="<?php echo base_url();?>assets/images/Slider-4.jpg" width = "900px" data-time="7000">
                <img src="<?php echo base_url();?>assets/images/Slider-4.jpg">
                </div>

                <div data-thumb="<?php echo base_url();?>assets/images/Slider-5.jpg" width = "900px" data-time="7000">
                <img src="<?php echo base_url();?>assets/images/Slider-5.jpg">
                </div>

                <div data-thumb="<?php echo base_url();?>assets/images/Slider-6.jpg" width = "900px" data-time="7000">
                <img src="<?php echo base_url();?>assets/images/Slider-6.jpg">
                </div>   
               </div><!-- #pix_diapo -->
                
              </div>
        </div>

        

        </div>


        <br>
        <br>
        <br>

        <?php //--------------------------------------------------------------------------------------?>

            <div class = "row">
                <div class="span6">
                    <div class="w3-panel w3-red">
                    <h3><b>MISSION</b></h3>
                    <br>
We commit ourselves to Christ-like servant leadership through:

excellent and relevant humanistic and practical education.

an integral and balanced spiritual and human and practical fromation.

a life of witnessing to God by serving the church.

community involvement and service towards nation bulding.

                    <br>
                    <br>

                    </div>
                </div>  

                <div class="span6">
                    <div class="w3-panel w3-red">
                    <h3><b>VISION</b></h3>
                    <br>
                    The leading Catholic institution for the integral

humanistic education of the Filipino youth in the light of the

Josephite-Marellian spirit of the Christ-like servant leadership to

Eempower them to be competent and truly ready for life.

                    <br>
                    <br>
                    <br>
                    
                    </div>
                </div>  

                
            </div>

            <?php //--------------------------------------------------------------------------------------?>

        </div>
    </div>
<?php //include('footer.php') ?>