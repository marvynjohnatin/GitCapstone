<div>

    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">
        <thead>
        <tr>
            <th colspan = 12>
                <h3><b><font color = "red">Parent List</font></b></h3>
            </th>
        </tr>
        <a href="<?php echo base_url() ?>admission/activatestudent">Go Back</a><br>
        <form action="<?php echo base_url()?>admission/activate"?>
            Activating student # <?php echo $this->session->userdata['studentid']?>
            <tr>
                <th colspan="10">
                    Search: <input type="text" name ="search">&nbsp;&nbsp;<button type="submit" class="btn btn-success" ><i class="icon-search icon-large"></i>&nbsp;</button>
                </th>
        </form>
        <th colspan="2">
            <a href="addparent"><button  align='right' data-toggle="modal" data-target="#myModal" class="btn btn-primary" ><i class="icon-search icon-large"></i>&nbsp; Add Parent</button></a>
            <br>

        </th>
        </tr>

        <tr>
            <th>Parent ID</th>
            <th>First Name</th>
            <th>Last name </th>
            <th>Middle Name</th>
            <th>Address</th>
            <th>Contact No</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <form action="<?php echo base_url() ?>admission/activatestudent/activating" method="post" onsubmit="return confirm('Are you sure you want to assign this parent?');">
            <?php foreach($results as $parent) : ?>
                <tr>
                    <th><?php echo $parent['Id'] ?></th>
                    <th><?php echo $parent['fname'] ?></th>
                    <th><?php echo $parent['lname'] ?></th>
                    <th><?php echo $parent['mname'] ?></th>
                    <th><?php echo $parent['address'] ?></th>
                    <th><?php echo $parent['contactno'] ?></th>
                    <th><?php echo $parent['email'] ?></th>
                    <th><button type="submit" name="parentid" value="<?php echo $parent['Id'] ?>">Assign </button></th>
                </tr>
            <?php endforeach;?>
        </form>
        <tr>
            <th colspan = 12>
                <button name="submit" type="submit" class="btn btn-danger" style="width: 200px;"><i class="icon-print icon-large"></i>&nbsp;Print Parent</button>
            </th>
        </tr>

        </thead>
    </table>
    <div class="pagination-links">
        <?php echo $this->pagination->create_links(); ?>
    </div>




    </thead>
    <tbody>



    </tbody>
    </table>

</div>
</div>


</div>
</div>

<script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this category?');
    }
</script>

