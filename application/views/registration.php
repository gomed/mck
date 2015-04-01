<!DOCTYPE html>

<head>
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
<!--<script src="<?php echo base_url();?>js/ValidationFormScript.js"></script>-->
<title>bootstrap login validation demo</title>
</head>
<body>
<div class="container">
<h1 class="text-center">User Registration </h1>
<div class="jquery-script-ads text-center"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<form class="form-horizontal" id="form1" method="post" action="<?php echo base_url();?>welcome/user_reg">
  <fieldset>
    
    <!-- Form Name -->
    <legend>
    <center>
      <?php echo validation_errors(); ?>
    </center>
    </legend>
    
    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="Email">Name</label>
      <div class="col-md-3">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
          <input id="Email" name="name" type="text" placeholder="Enter Your Email" class="form-control input-md">
        </div>
      </div>
    </div>
    <div class="form-group">
        
      <label class="col-md-4 control-label" for="Email">Email</label>
      <div class="col-md-3">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
          <input id="Email" name="email" type="text" placeholder="Enter Your Email" class="form-control input-md">
        </div>
      </div>
    </div>
    
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Password">Password</label>
      <div class="col-md-3">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
          <input id="password" name="password" type="password" placeholder="Enter Your Password" class="form-control input-md">
        </div>
      </div>
    </div>
    
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="ConfirmPassword">Confirm Password</label>
      <div class="col-md-3">
        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
          <input id="password_again" name="password_again" type="password" placeholder="Enter Your Password Again" class="form-control input-md">
        </div>
      </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Submit"></label>
      <div class="col-md-4">
        <button id="Submit" class="btn btn-success" type="Submit">Press To Validate</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>