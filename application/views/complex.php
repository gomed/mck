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
                    <li><a href="zone">Zone</a></li>
                    <li><a href="complex">Complex</a></li>
                    <li><a href="shop">shop</a></li>
                    <li><a href="#">Owner</a></li>
                    <li><a href="#">Rent Detail</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <h1>COMPLEX INFO.</h1>
        Complex ID<input type="text" name="cid">
        Complex Name<input type="text" name="cname">
        Zone Name<input type="text" name="czname">
        Ward Name<input type="text" name="cwname">
        Number Of Hall<input type="text" name="chall">
        Number Of Room<input type="text" name="croom">
        Number Of Canteen<input type="text" name="ccanteen">
        Number Of Lauge<input type="text" name="clauge">
        Alloted Complex<input type="text" name="callote">
        Remaning Complex<input type="text" name="cremaning">
        Total<input type="text" name="ctotal">
        <input type="submit" name="submit" value="Submit">
        <input type="submit" name="reset" value="Reset">
    </body>
</html>