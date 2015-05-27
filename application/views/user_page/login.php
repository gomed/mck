<html>
    <title>Sub user Login</title>
    <style>
    #top
    {
	background-color:#eef2f1;
	height:150px;
	width:auto;
    }
    #footer
    {
        height:30px;
	width:auto;
	background-color:#f2f4fd;
    }
    #main_body
    {
        height:auto;
        width:900px;
        background-color:#eef2f1;
    }
    .field_set
    {
        display: block;
        margin-left: 2px;
        margin-right: 2px;
        padding-top: 0.35em;
        padding-bottom: 0.625em;
        padding-left: 0.75em;
        padding-right: 0.75em;
        border: 2px groove (internal value);
        border-color:#eef2f1;
    } 
    </style>
    <head>
    </head>
    <body>
        <div id="top">
	    <div class="mono">
                <img height="150px" src="<?php echo base_url();?>/img/mono.jpg">
                <img src="<?php echo base_url();?>/img/mono1.jpg">
            </div>
	</div>
	<center>
	<div id="main_body">
            <fieldset class="field_set">
            <?php echo validation_errors(); ?>
            <h2> Sub User Login Page </h2>
            <form action="<?php echo base_url();?>sub/login" method="POST">
                  <label>UserName :</label></br>
                            <input type="email" id="inputEmail" name="inputEmail" placeholder="Email address" required autofocus>
                           </br>
                           <label>Password :</label>
                           </br>
                            <input type="password" id="inputPassword"  name ="inputPassword" placeholder="Password" required></br>
                            </br>
                            <input type="submit" value=" Login " name="submit" />
                  
            </form>
            </fieldset>
        </div>
        </center>
        <div id="footer">
            <center>
	    <address>
		developed by : <a href=""> Gomed & Alok</a>.<br> 
	    </address>
            </center>
	    <input type="hidden" name="url" id="base_url" value="<?php echo base_url();?>">
	</div>
    </body>
</html>