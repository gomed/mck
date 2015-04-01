
            <h1><center>COMPLEX DETAIL</center></h1><hr/>
            <center>
            <div id="main_body">
                <form action="<?php echo base_url();?>welcome/complex_insert" method="post">
                    <fieldset class="field_set">
                        <table>
                            <tr><td>Complex  Name :</td> <td><input type="text" name="complex_name" class="form-control"></td></tr>
                            <tr><td>Zone Name :</td> <td><input type="text" name="zone_name" class="form-control"></td></tr>
                            <tr><td>Ward Name :</td> <td><input type="text" name="shop_name" class="form-control"></td></tr>
                            <tr><td>Number Of Hall :</td> <td><input type="text" name="hall" class="form-control" id="hall"></td></tr>
                            <tr><td>Number Of Room :</td> <td><input type="text" name="room" class="form-control" id="room"></td></tr>
                            <tr><td>Number Of Canteen :</td> <td><input type="text" name="canteen" class="form-control" id="canteen"></td></tr>
                            <tr><td>Number Of Lauge :</td> <td><input type="text" name="lauge" class="form-control" id="lauge"></td></tr>
                            <tr><td>Total Shop :</td> <td><input type="text" name="total_shop" class="form-control" onblur="add();" id="total"></td></tr>
                            <tr><td>Alloted Shop :</td> <td><input type="text" name="alloted" class="form-control" id="alloted" onblur="err();"></td></tr>
                            <tr><td>UnAlloted Shop :</td> <td><input type="text" name="unalloted" class="form-control" id="unalloted" onblur="sub();"></td></tr>
                            <tr><td></td> <td></td></tr>
                            <tr><td></td> <td></td></tr>
                            <tr><td><input type="submit" value="Submit" class="btn btn-primary"></td> <td><input type="submit" value="reset" class="btn btn-primary"></td></tr>
                        </table>
                    </fieldset>
                </form>
            </div>
            </center>
            
        