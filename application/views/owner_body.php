
            <h1><center>OWNER DETAIL</center></h1><hr/>
      
            <link href="<?php echo base_url();?>css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href ="<?php echo base_url();?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap-theme.css" type="text/css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
<!-- <link  href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            
            <center>
            <div id="main_body">
                <form action="<?php echo base_url();?>admin/owner_insert" method="post">
                    <fieldset class="field_set">
                        <table><?php echo validation_errors(); ?>
                            <tr><td>Shop Name :</td> <td>
                                <?php echo $this->mck->shop();?>
                                </td><td id="sname">shop name</td></tr>
                            <tr><td>Owner Name :</td> <td><input type="text" name="owner_name" class="form-control input-md"></td></tr>
                            <tr><td>Address :</td> <td><input type="text" name="address" class="form-control input-md"></td></tr>
                            <tr><td>Contact No. :</td> <td><input type="text" name="contact" class="form-control input-md"></td></tr>
                            <tr><td>Lease Issue Date :</td> <td><input type="date" name="issue_date" class="form-control input-md"></td></tr>
                            <tr><td>Lease Close Date :</td> <td><input type="date" name="close_date" class="form-control input-md"></td></tr>
                            <tr><td>Allotment Date :</td> <td><input type="date" name="alloted_date" class="form-control input-md"></td></tr>
                            <tr><td><input type="submit" value="Submit" class="btn btn-primary"></td> <td><input type="submit" value="reset" class="btn btn-primary"></td></tr>
                                               </table>
                    </fieldset>
                </form>
            </div>
            </center>
