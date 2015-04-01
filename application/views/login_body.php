
            <h1><center>LOGIN</center></h1><hr/>
            <center>
            <div id="main_body">
                <form>
                    <fieldset class="field_set">
                        <?php echo form_open('user_authentication/user_login_process'); ?>
                        <?php
                            echo "<div class='error_msg'>";
                            if (isset($error_message))
                            {
                            echo $error_message;
                            }
                            echo validation_errors();
                            echo "</div>";
                        ?>
                        <label>UserName :</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        <label>Password :</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required></br>
                        <input type="submit" value=" Login " name="submit" class="btn btn-lg btn-primary btn-block"/>
                        <a href="registration">To SignUp Click Here</a>
                        <?php echo form_close(); ?>
                    </fieldset>
                </form>
            </div>
            </center>