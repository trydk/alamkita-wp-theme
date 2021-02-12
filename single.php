<?php
get_header();
?>

<div class="col-md-8 offset-md-2">

  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
  </ol>
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="post">
      <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <div class="postinfo">
        <div><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?> | 
        <?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></div>
      </div>

      <div class="entry">
        <?php the_content(); ?>
      </div>
    </div>

    <?php comments_template(); ?>

  <?php endwhile; ?>

  <?php else : ?>

    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

  <?php endif; ?>
</div>

<?php
get_footer();
