<div class="container">
        <div class="margin-top">
            <div class="row">
            <?php //--------------------------------------------------------------------------------------?>
                    <?php //include('head.php'); ?>
            <div class="span12">
                    <div class="alert alert-danger">
                        <Strong>Heads Up!</strong>&nbsp;Welcome to Saint James Academy Online
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
                    
            </div>


            <div class = "row">

            <?php //--------------------------------------------------------------------------------------?>
                
                <div class="span6">

                    <table>
                    <tr>
                        <td align = "center">
                          <div class="w3-panel w3-white">
                        <img class="img-responsive" src="<?php echo base_url() ?>assets/images/upcoming.png" alt="" style="width:530px;height:250px;">
                        <a href="upcoming"><br><br><h3><b>Upcoming Events</b></a>

                    </div>
                        </td>
                    </tr>
                    </table>


                
                </div> 

            <?php //--------------------------------------------------------------------------------------?> 

                <div class="span6">

                    <table>
                    <tr>
                        <td align = "center">
                         <div class="w3-panel w3-white">
                        <img class="img-responsive" src="<?php echo base_url() ?>assets/images/news.jpg" alt="" style="width:530px;height:270px;">
                        <a href="latest"><h3><b>Latest News</b></a>
                        </div>
                        </td>
                    </tr>
                    </table>


                
                </div>

            <?php //--------------------------------------------------------------------------------------?>
                
            </div>


        </div>
    </div>


