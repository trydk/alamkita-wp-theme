<?php
get_header();
?>

<div class="col-md-8 offset-md-2">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="post">
      <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <div class="postinfo">
        <div><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?> | 
        <?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></div>
        <span class="badge badge-secondary">
          <?php comments_number( 'no comments', 'one comment', '% comments' ); ?>
        </span>
      </div>

      <div class="entry">
        <?php the_content(); ?>
      </div>
    </div>

  <?php endwhile; ?>
  
  <div class="pagination">
    <div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
    <div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
  </div>

  <?php else : ?>

    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

  <?php endif; ?>
</div>

<?php
get_footer();
