	    <table cellpadding="0" cellspacing="0" border="6" class="table  table-bordered">                      
	    <thead>
	                                  <tr>
	                                        <th>
	                                           <h3><b><font color = "red">Office of the Registrar</font></b></h3>
	                                        </th>
	                                    </tr>
	                                </thead>
	  </table>

	  <div>
            
                         <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">                      
                                <thead>
                                    <tr>
                                       <th colspan = 12>
                                           <h3><b><font color = "red">Student List</font></b></h3>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th colspan="10">
                                            Search: <input type = "text" name = "search">&nbsp;&nbsp;<button name="submit" type="submit" class="btn btn-success" ><i class="icon-search icon-large"></i>&nbsp;</button>
                                        </th>

                                        <th colspan="2">
                                            <a href="addstudent"><button  align='right' class="btn btn-primary" ><i class="icon-search icon-large"></i>&nbsp; Add Student</button></a>
                                            <br>

                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Student ID</th>
                                        <th>First Name</th>                                                     
                                        <th>Last name </th>                                                  
                                        <th>Middle Name</th>
                                        <th>Age</th>
                                        <th>Date of Birth</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Current Level</th>
                                        <th>Current Section</th>
                                        <th>Account Status</th>                                                
                                                                                        
                                    </tr>

                                     <?php foreach($students as $student) : ?>
                                    <tr>
                                        <th><?php echo $student['studentnumber'] ?></th>
                                        <th><?php echo $student['fname'] ?></th>
                                        <th><?php echo $student['lname'] ?></th>
                                        <th><?php echo $student['mname'] ?></th>
                                        <th><?php echo $student['age'] ?></th>
                                        <th><?php echo $student['dateofbirth'] ?></th>
                                        <th><?php echo $student['gender'] ?></th>
                                        <th><?php echo $student['address'] ?></th>
                                        <th><?php echo $student['contactno'] ?></th>
                                        <th><?php echo $student['current_level'] ?></th>
                                        <th><?php echo $student['current_section'] ?></th>
                                        <th><?php echo $student['account_status'] ?></th>
                                    </tr>
                                    <?php endforeach;?>


                                    <tr>
                                       
                                        <th colspan = 12>
                                       <button name="submit" type="submit" class="btn btn-danger" style="width: 200px;"><i class="icon-print icon-large"></i>&nbsp;Print Student</button>
                                        </th>

                                    </tr>

                                </thead>
                        </table>



                                     
                                 

                                </thead>
                                <tbody>
                                 

                           
                                </tbody>
                    </table>
                                
                </div>


             <?php //--------------------------------------------------------------------------------------?>

            </div>


        </div>
</div>
