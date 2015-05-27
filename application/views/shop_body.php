
            <h1><center>SHOP DETAIL</center></h1><hr/>
            <?php echo validation_errors(); ?>
            <center>
            <div id="main_body">
                <form action="<?php echo base_url();?>admin/shop_insert" method="post">
                    <fieldset class="field_set">
                        <table>
                            <tr><td>Complex Name :</td> <td>
                                <?php echo $this->mck->complex();?>
                                </td><td id="cname">complex name</td></tr>
                            <tr><td>Shop Name :</td> <td><input type="text" name="shop_name" class="form-control"></td><td></td></tr>
                            <tr><td>Type of shop :</td> <td>
                                    <select name="shop_type" id="shop_type">
                                        <option >- Select -</option>
                                        <option value="1">Shop</option>
                                        <option value="2">Hall</option>
                                        <option value="3">Canteen</option>
                                        <option value="4">Louge</option>
                                        <option value="5">Room</option>
                                    </select>
                                    </td><td id="shop_cal"> </td>
                            <tr><td>Shop Size :</td> <td><input type="text" name="shop_size" class="form-control"></td><td></td></tr>
                            <tr><td>Class :</td> <td><input type="text" name="shop_class" class="form-control"></td><td></td></tr>
                            <tr><td>Premium Of Shop :</td> <td><input type="text" name="shop_premium" class="form-control"></td><td></td></tr>
                            <tr><td>Rent :</td> <td><input type="text" name="shop_rent" class="form-control"></td><td></td></tr>
                            
                            <tr><td><input type="submit" value="Submit" class="btn btn-primary"></td> <td><input type="submit" value="reset" class="btn btn-primary"></td><td></td></tr>
                        </table>
                    </fieldset>
         
                </form>
            </div>
            </center>
