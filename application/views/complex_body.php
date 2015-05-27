
            <h1><center>COMPLEX DETAIL</center></h1><hr/>
            <center>
            <div id="main_body">
                <?php
                echo validation_errors();
                echo "<br/>";
                ?>
                <?php echo form_error('zone_name', '<div class="error">', '</div>'); ?>
                
                <form action="<?php echo base_url();?>admin/complex_insert" method="post">
                    <fieldset class="field_set">
                        <table>
                            <tr><td>Complex  Name :</td> <td><input type="text" name="complex_name" class="form-control"></td><td></td></tr>
                            <tr><td>Zone Name :</td> <td>
                                <?php echo $this->mck->zone();?>
                                </td><td id="zname">zone name</td></tr>
                            <tr><td>Ward Number :</td> <td><input type="text" name="ward_number" class="form-control"></td><td ></td></tr>
                            <tr><td>Number Of Shop :</td> <td><input type="text" name="shop" class="form-control" id="shop"></td><td ></td></tr>
                            <tr><td>Number Of Hall :</td> <td><input type="text" name="hall" class="form-control" id="hall"></td><td ></td></tr>
                            <tr><td>Number Of Room :</td> <td><input type="text" name="room" class="form-control" id="room"></td><td ></td></tr>
                            <tr><td>Number Of Canteen :</td> <td><input type="text" name="canteen" class="form-control" id="canteen"></td><td ></td></tr>
                            <tr><td>Number Of Lauge :</td> <td><input type="text" name="loudge" class="form-control" id="lauge"></td><td ></td></tr>
                            <tr><td>Total Shop :</td> <td><input type="text" name="total_shop" class="form-control" onblur="add();" id="total"></td><td ></td></tr>
                            <tr><td>Alloted Shop :</td> <td><input type="text" name="alloted" class="form-control" id="alloted" onblur="err();"></td><td ></td></tr>
                            <tr><td>UnAlloted Shop :</td> <td><input type="text" name="unalloted" class="form-control" id="unalloted" onblur="sub();"></td><td class="col-md-3"></td></tr>
                            <tr><td></td> <td></td></tr>
                            <tr><td></td> <td></td></tr>
                            <tr><td><input type="submit" value="Submit" class="btn btn-primary"></td> <td><input type="submit" value="reset" class="btn btn-primary"></td><td></td></tr>
                        </table>
                    </fieldset>
                </form>
            </div>
            </center>
            
        