<style>
  #slideImage{
    width: 100%;
    height: 400px;
  }
</style>
<section id="imageGallery">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px;">
  <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
       <div class="item active">
          <img id="slideImage" src="<?php echo base_url();?>Assets/Images/ex5.jpg" alt="Buddha">
        </div>
       <div class="item">
          <img id="slideImage" src="<?php echo base_url();?>Assets/Images/ex3.jpg" alt="Cevorlet">
        </div>
        <div class="item">
          <img id="slideImage" src="<?php echo base_url();?>Assets/Images/ex2.jpg" alt="Lambo">
        </div>
        <div class="item">
          <img id="slideImage" src="<?php echo base_url();?>Assets/Images/ex1.jpg" alt="Bugati">
        </div>
      </div>
      <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
     </a>
  </div>
</section>