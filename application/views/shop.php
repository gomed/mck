<html>
    <head>
        <title><?php echo $title; ?></title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="http://localhost/mck/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Nagar Nigam Korba</a>
              </div>
              <div>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="page">Home</a></li>
                  <li><a href="welcome/zone">Zone</a></li>
                  <li><a href="complex">Complex</a></li>
                  <li><a href="shop">shop</a></li>
                  <li><a href="#">Owner</a></li>
                  <li><a href="#">Rent Detail</a></li>
                </ul>
              </div>
            </div>
        </nav>

        <h1>Shop</h1>
        Shop ID<input type="text" name="sid">
        Shop Name<input type="text" name="ssname">
        Complex Name<input type="text" name="scname">
        Size Of Shop<input type="text" name="ssize">
        Shop Type
        Shop Premium<input type="text" name="spri">
        Class
        Shop Rent<input type="text" name="srent">
        Shop Rent Date<input type="text" name="srentdate">
        Rent Date Update<input type="text" name="srdu">
        Rent Date Premium<input type="text" name="srdp">
        Lease Issue Date<input type="text" name="sldi">
        Lease Close Date<input type="text" name="slcd">
        <input type="submit" name="submit" value="Submit">
            <input type="submit" name="reset" value="Reset">
    </body>
</html>