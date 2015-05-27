 <h1><center>USER DETAIL</center></h1><hr/>
      
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
                 
                <form action="<?php echo base_url();?>admin/add_user" method="POST">
                    <fieldset class="field_set">
                        <table>
                            <?php
                            echo form_error('user_id');
                            echo form_error('user_name');
                            echo form_error('fname');
                            echo form_error('contact');
                            ?>
                            <tr><td>User Id :</td> <td><input type="text" name="user_id" class="form-control input-md"></td></tr>
                            <tr><td>User Name :</td> <td><input type="text" name="user_name" class="form-control input-md"></td></tr>
                            <tr><td>Father's Name :</td> <td><input type="text" name="fname" class="form-control input-md"></td></tr>
                            <tr><td>Contact No. :</td> <td><input type="text" name="contact" class="form-control input-md"></td></tr>
                            <tr><td>Email Id :</td> <td><input type="email" name="uemail" class="form-control input-md"></td></tr>
                            <tr><td>Password :</td> <td><input type="text" name="upass" class="form-control input-md"></td></tr>
                            
                            <tr><td><input type="submit" value="Submit" class="btn btn-primary"></td> <td><input type="submit" value="reset" class="btn btn-primary"></td></tr>
                                               </table>
                    </fieldset>
                </form>
            </div>
            </center>