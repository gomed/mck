<!DOCTYPE html>

<head>
   
    
<link href="<?php echo base_url();?>css/js-image-slider.css" type="text/css" rel="stylesheet">
<script src="http://localhost/mck/js/js-image-slider.js"></script>
<link href="<?php echo base_url();?>css/generic.css" type="text/css" rel="stylesheet">


</head>
<body>
 <div id="sliderFrame">
        <div id="slider">
           
                <img src="images/image-slider-1.jpg" alt="gomed" />
            </a>
            <img src="../img/image-slider-2.jpg" alt="" />
            <img src="../img/image-slider-3.jpg" alt="Pure Javascript. No jQuery. No flash." />
            <img src="../img/image-slider-4.jpg" alt="#htmlcaption" />
            <img src="../img/image-slider-5.jpg" />
        </div>
        <div id="htmlcaption" style="display: none;">
            <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
        </div>
    </div>


 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>


<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../img/image-slider-2.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="../img/image-slider-3.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="../img/image-slider-4.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="../img/image-slider-5.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>