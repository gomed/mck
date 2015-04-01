<?php $this->load->view('template/header'); ?>
    <body>
        <h1><center>REGISTRATION</center></h1><hr/>
            <center>
            <div id="main_body">
                <form>
                    <fieldset class="field_set">
                        <table>
                            <tr><td>Name :</td> <td><input type="text" name="shop_name" class="form-control"></td></tr>
                            <tr><td>Create Username :</td> <td><input type="text" name="complex_nm" class="form-control"></td></tr>
                            <tr><td>E-mail :</td> <td><input type="text" name="shop_size" class="form-control"></td></tr>
                            <tr><td>Password :</td> <td><input type="text" name="shop_type" class="form-control"></td></tr>
                            <tr><td>Designation :</td> <td><input type="text" name="class" class="form-control"></td></tr>
                            <tr><td>Role :</td> <td><input type="text" name="premium" class="form-control"></td></tr>
                            <tr><td>Address :</td> <td><input type="text" name="rent" class="form-control"></td></tr>
                            <tr><td></td> <td><input type="submit" value="Sign In" class="btn btn-primary"></td></tr>
                            <?php
                            echo "<div class='error_msg'>";
                            echo validation_errors();
                            echo "</div>";
                            echo form_open('user_authentication/new_user_registration');
                            echo form_label('Name : ');
                            echo form_input('name');
                            echo form_label('Create Username : ');
                            echo form_input('username');
                            echo "<div class='error_msg'>";
                            if (isset($message_display))
                            {
                                echo $message_display;
                            }
                            echo "</div>";
                            echo form_label('Email : ');
                            $data = array('type' => 'email','name' => 'email_value');
                            echo form_input($data);
                            echo form_label('Password : ');
                            echo form_password('password');
                            
                            echo form_label('Designation : ');
                            echo form_input('designation');
                            echo form_label('Role :');
                            echo form_input('role');
                            echo form_label('Address :');
                            echo form_input('address');
                                                    
                            echo form_submit('submit', 'Sign Up');
                            echo form_close();
                            ?>
                            
                            <a href="template/home_body.php"><input type="submit" value=" Sign Up " name="submit"></a>
                        </table>
                    </fieldset>
                </form>
            </div>
            </center>
        
        
        
    </body>
<?php $this->load->view('template/footer'); ?>