</div>
<!-- wrapper -->

<div id="search_bar">
  <div class="container text-center pt-5 pb-5">
    <form action="/" method="get">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="s" id="search" value="<?php the_search_query(); ?>" />
        <div class="input-group-append">
          <input type="submit" class="btn btn-outline-secondary" value="Search" />
        </div>
      </div>
      </form>
  </div>
</div>

<div id="footer">
  <div class="container">
    <div id="footer-inner" class="row pt-5 pb-5">
      <div class="mb-5 col-md-6 col-12">
        <a href="#">
          <img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.svg" alt="Alam Kita" style="width:120px"></a> <div id="footer-icon" class="mt-4">
        <a href="#">
          <img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-twitter.svg" style="width:32px"></a> 
        <a href="#">
          <img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-instagram.svg" style="width:32px"></a> 
        <a href="#">
          <img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-facebook.svg" style="width:32px"></a> 
        <a href="#">
          <img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-youtube.svg" style="width:32px"></a>
      </div>
    </div> 
    <div class="col-md-3 col-6">
      <h5>Home</h5> 
      <ul class="footer-link p-0">
        <li><a href="<?php echo get_main_website_url(); ?>/#howitworks">How it works</a></li> 
        <li><a href="<?php echo get_main_website_url(); ?>/#calculate">Calculate</a></li> 
        <li><a href="<?php echo get_main_website_url(); ?>/#usecases">Use Case</a></li> 
        <li><a href="<?php echo get_main_website_url(); ?>/login">Login</a></li>
      </ul>
    </div> 
    <div class="col-md-3 col-6">
      <h5>Contact</h5> 
      <ul class="footer-link p-0">
        <li>hello@alamkita.id</li> 
        <li>+62 274 153 55</li> 
        <li>+62 812 655 455</li> 
        <li>Jakarta, Indonesia</li>
      </ul>
    </div>
  </div>
</div>
<!-- footer -->

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>

<script>
  jQuery(document).ready(function() {
    $('.post img').addClass('img-fluid');
    $('.pagination a').addClass('btn btn-lg btn-outline-success');
    $('#respond input[type=text]').addClass('form-control');
    $('#respond textarea').addClass('form-control');
    $('#respond #submit').addClass('btn btn-lg btn-outline-success');
  });
</script>

</body>
</html>