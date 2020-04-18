<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>SMPN 3 MARGAHAYU</title>
  <meta name="author" content="Jake Rocheleau">
  <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/assets/css/styles-slider.css">
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/responsiveCarousel.min.js"></script>
  <script type="text/javascript">
$(function(){
  $('.crsl-items').carousel({
    visible: 3,
    itemMinWidth: 180,
    itemEqualHeight: 370,
    itemMargin: 9,
  });
  
  $("a[href=#]").on('click', function(e) {
    e.preventDefault();
  });
});
</script>
</head>

<body>
  <div id="w">
    <h1>Informasi Terbaru</h1>
    
    <nav class="slidernav">
      <div id="navbtns" class="clearfix">
        <a href="#" class="previous">Previous</a>
        <a href="#" class="next">Next</a>
      </div>
    </nav>
    
    <div class="crsl-items" data-navigation="navbtns">
      <div class="crsl-wrap">
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>/assets/assets/img/thumb01.jpg" alt="nyc subway">
            <span class="postdate">Feb 16, 2014</span>
          </div>
          
          <h3><a href="#">SMPN 3 MARGAHAYU Meraih peringkat 1 lomba ....</a></h3>
          
          <p>Dapat diisi dengan point penting berita</p>
          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #1 -->
        
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>/assets/assets/img/thumb02.jpg" alt="danny antonucci">
            <span class="postdate">Feb 19, 2014</span>
          </div>
          
          <h3><a href="#">SMPN 3 MARGAHAYU Meraih peringkat 1 lomba ....</a></h3>
          
          <p>Dapat diisi dengan point penting berita</p>
          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #2 -->
        
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>/assets/assets/img/thumb03.jpg" alt="watercolor paints">
            <span class="postdate">Feb 23, 2014</span>
          </div>
          
          <h3><a href="#">SMPN 3 MARGAHAYU Meraih peringkat 1 lomba ....</a></h3>
          
          <p>Dapat diisi dengan point penting berita</p>          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #3 -->
        
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>/assets/assets/img/thumb04.jpg" alt="apple ipod classic photo">
            <span class="postdate">Mar 02, 2014</span>
          </div>
          
          <h3><a href="#">SMPN 3 MARGAHAYU Meraih peringkat 1 lomba ....</a></h3>
          
          <p>Dapat diisi dengan point penting berita</p>
          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #4 -->
        
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="<?php echo base_url(); ?>/assets/assets/img/thumb05.jpg" alt="web design magazines">
            <span class="postdate">Mar 11, 2014</span>
          </div>
          
         <h3><a href="#">SMPN 3 MARGAHAYU Meraih peringkat 1 lomba ....</a></h3>
          
          <p>Dapat diisi dengan point penting berita</p>
          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #5 -->
      </div><!-- @end .crsl-wrap -->
    </div><!-- @end .crsl-items -->
   <!--  <button style="position: center;">
    <a href="<?php echo base_url();?>/Dashboard/index" class="next">Next</a>
    </button> -->
  </div><!-- @end #w -->

</body>
</html>