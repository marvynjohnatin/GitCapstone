<div class="span2">
                   
            <div class="life-side-bar">


             <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">              
                                <thead>

            <?php

                echo "<tr>";

                echo "<th>Faculty ID:";
                echo "</th>";
                echo "</tr>";

                echo "<tr>";

                echo "<th><font color = 'green'>". $results['teacher_ID'] . "</font>";

                echo "</th>";
                echo "</tr>";

            ?>
            

                                  
                                </thead>
               </table>

                <p><img src="<?php echo base_url() ?>" alt="" width="160" class="img-polaroid"/></p>


           

            <div class="hero-container">                  
                    <ul class="nav nav-tabs nav-stacked">
                    
                        <li class="">
                        <a href="dashboard" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Profile</a>
                        
                        </li>
                        
                        <li class="">
                            <a href="subjects" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Schedule</a>
                        
                        </li>
                        
                                            
                        <li class="active">
                        <a href="maintenance" class="yellow_link"><i class="icon-list icon-large icon-large"></i>&nbsp;Maintenance</a>
                        
                        </li>
                        
                    
                    
                        
                        
                        
                        
                            
                    </ul>
            </div>
            

            </div>
    
    </div>

            <?php //--------------------------------------------------------------------------------------?>

             

                <div class="span10">
            
                         <table cellpadding="0" cellspacing="0" border="6" class="table  table-bordered">                      
                                <thead>

                                    <tr>
                                        <th colspan = 2>
                                           <h3><b><font color = "red">Student Information</font></b></h3>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>
                                            Present Address: <input type = "text" name = "address" required>
                                        </th>

                                        <th>
                                        &emsp;&emsp;&nbsp;Place Of Birth: <input type = "text" name = "birth" required>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>
                                            &nbsp;&nbsp;&nbsp;Phone Number: <input type = "text" required>
                                        </th>

                                        <th>
                                            Telephone Number: <input type = "text" required>
                                        </th>
                                    </tr>

                                     <tr>
                                        <th>
                                         &emsp;&nbsp;Old Password: <input type = "text" required>
                                        </th>

                                        <th>
                                        &emsp;&emsp;New Password: <input type = "text" required>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th colspan = 2 align = "right">

                                             <button type="button" name = "submit" style="vertical-align:middle" class="button1"><span>Update Information</span></button>

                                        </th>
                                    </tr>


                                </thead>
                                <tbody>
                                 

                           
                                </tbody>
                            </table>
                                
                </div>


             <?php //--------------------------------------------------------------------------------------?>

            </div>


        </div>
</div>

