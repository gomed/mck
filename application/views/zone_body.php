
            <h1><center>ZONE DETAIL</center></h1><hr/>
            <center>
            <div id="main_body">
                <?php
                echo validation_errors();
                if(isset($message))
                {
                    echo "<h4>".$message."<h4>";
                }
                ?>
                
                <form action="<?php echo base_url(); ?>admin/insert_zone" method="post">
                    <fieldset class="field_set">
                        <table>
                           
                            
                            <tr><td>Zone ID :</td> <td><input type="text" name="z_id" class="form-control"></td></tr>
                            <tr><td>Zone Name :</td> <td><input type="text" name="z_name" class="form-control"></td></tr>
                            <tr><td><input type="submit" value="Submit" class="btn btn-primary"></td> <td><input type="submit" value="reset" class="btn btn-primary"></td></tr>
                           
                        </table>
                    </fieldset>
                </form>
            </div>
            </center>
        