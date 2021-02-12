<?php ini_set('display_errors', 0); ?>
<?php get_header(); ?>
            
    <div class="maintop">
      <div class="container">
        <div class="maintopin">
        <h2><i class="fa fa-exclamation-circle"></i> Error 404</h2>
        </div><!-- /.maintopin -->
      </div><!-- /.container -->
    </div><!-- /.maintop -->
    
    <div class="mainbody container">
      <div class="mainbodyrow row">
        <div class="col-full col-md-12">
          <div class="mainbodytext">
            <h2>Page Not Found</h2>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.mainbody -->       

<?php get_footer(); ?>
