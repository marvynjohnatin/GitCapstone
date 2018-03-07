<div class="container">
		<div class="margin-top">
			
      <?php //--------------------------------------------------------------------------------------?>
      <div class="row">
					
        <div class = "span12">
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
			

				<div class ="span12">
					<h3>Category: Upcoming Events</h3>
                    <font color = "red">Announcements > Upcoming Events</font>
                    <br>
                    <br>
				</div>
				
			</div>
      <?php //--------------------------------------------------------------------------------------?>


      <div class = "row">
                    <div class ="span4">    
                      <i class="icon-time icon-large"> January 24,2018
                      </i>
                    
                      <div class="polaroid">
        <a href = "events.php">
       <img src="<?php echo base_url() ?>assets/images/prom.jpg" alt="" style="width:360px;height:300px;" >
     </a>
      <p><b>Claire De Lune</b></p>
    </div>


            </div>

                 <div class ="span4">    
                    <i class="icon-time icon-large"> January 24,2018
                      </i>
                    
                      <div class="polaroid">
       <img src="<?php echo base_url() ?>assets/images/wika.jpg" alt="" style="width:360px;height:300px;" >
      <p><b>Buwan Ng Wika</b></p>
    </div>


            </div>

                 <div class ="span4">    
                     <i class="icon-time icon-large"> January 24,2018
                      </i>
                    
                      <div class="polaroid">
       <img src="<?php echo base_url() ?>assets/images/fiesta.jpg" alt="" style="width:360px;height:300px;" >
      <p><b>Saint James The Greater Feast Day</b></p>
    </div>


            </div>

            

      </div>
      <?php //--------------------------------------------------------------------------------------?>

          


	 </div>
</div>
