<!--<div style="background-image:url('img/bg2.png'); min-height:74vh; width:100%; background-size:cover; background-position:center;">

</div>-->
<div id="demo" class="carousel slide" data-ride="carousel" style="max-height:90vh; overflow-Y:hidden;">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<style>
.carousel-item img{
    height: auto;
    width:100%;
    
}
</style>