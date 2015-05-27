
            <h1><center>RENT DETAIL</center></h1><hr/>
            <center>
            <div id="main_body">
                <table>
                   
            
            <center>
            <div id="main_body">
                <form action="<?php echo base_url();?>welcome/complex_insert" method="post">
                    <fieldset class="field_set">
                        <table>
                            <tr><td>Owner Name :</td> <td></td> <td>
                                <?php echo $this->mck->owner();?>
                                </td><td id="oname">owner name</td></tr>
                            <tr><td>Shop Name :</td> <td></td> <td>
                                <?php echo $this->mck->shop();?>
                                </td><td id="sname">shop name</td></tr>
                            <tr><td>Payment Mode :</td> <td></td> <td><select name="pay_mode" id="pay_mode" class="form-control">
                                                                            <option value="select">Select</option>
                                                                            <option value="online_banking">Online Banking</option>
                                                                            <option value="cash">Cash</option>
                                                                        </select></td> <td></td></tr>
                            <tr><td>Pay For Month :</td> <td></td> <td><?php $months = array(0 => 'Select', 1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December');
                                                                            ?>
                                                                            <select name="month" class="form-control">
                                                                                <?php
                                                                                    foreach ($months as $num => $name) {
                                                                                        printf('<option value="%u">%s</option>', $num, $name);
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                        <td>To</td><td><?php $months = array(0 => 'Select', 1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December');
                                                                            ?>
                                                                            <select name="month" class="form-control">
                                                                                <?php
                                                                                    foreach ($months as $num => $name) {
                                                                                        printf('<option value="%u">%s</option>', $num, $name);
                                                                                    }
                                                                                ?>
                                                                            </select></td></tr>
                            <tr><td>Cash :</td> <td>Rs.</td> <td><input type="text" name="cash" id ="cash" class="form-control"></td> <td></td></tr>
                            <tr><td>Late Fee :</td> <td>Rs.</td> <td><input type="text" name="late_fee" id ="late_fee" class="form-control"></td> <td></td></tr>
                            <tr><td>Total :</td> <td>Rs.</td> <td><input type="text" name="total" class="form-control" onblur="add_rent()" id="total"></td> <td></td></tr>
                            <tr><td>Payment Date :</td> <td></td> <td><input type="date" name="payment_date" class="form-control"></td> <td></td></tr>
                            <tr><td><input type="submit" value="Submit" class="btn btn-primary"></td> <td></td> <td><input type="submit" value="reset" class="btn btn-primary"></td> <td></td></tr>
                        </table>
                    </fieldset>
                </form>
            </div>
            </center>
                </table>
            </div>
            </center>
        