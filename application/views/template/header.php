<html>
    <style>
    #top
    {
        background-color:#eef2f1;
        height:150px;
        width:auto;
    }
    .mono
    {
        height:auto;
        width:auto;
    }
    .heading
    {
        float:right;
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
    } 
    </style>
    <head>
        <title><?php echo $title; ?></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>js/cal.js"></script>
        <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    </head>
    <body>
        <div id="top">
            <div class="mono">
                <img height="150px" src="../img/mono.jpg">
                <img src="../img/mono1.jpg">
            </div>
        </div>
        <div class="container">
                  <!-- Fixed navbar -->
            <nav class="navbar navbar-default navbar-static-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Nagar Nigam Korba</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                                    <li class="active"><a href="home">Home</a></li>
                                    <li><a href="zone">Zone</a></li>
                                    <li><a href="complex">Complex</a></li>
                                    <li><a href="shop">shop</a></li>
                                    <li><a href="owner">Owner</a></li>
                                    <li><a href="rent">Rent Detail</a></li>
                                    <li><a href="about">About</a></li>
                                    </ul>
                </div>
                <!--/.nav-collapse -->
              </div>
            </nav>
        </div>
        <!-- containter end-->