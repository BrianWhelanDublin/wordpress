<?php get_header(); ?>
<div class="row">
  <div class="col-sm-8 blog-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="blogpost">
          <h2 class="blog-post-title">
            <?php the_title();  ?>
          </h2>
          <p><?php the_content(); ?></p>
        </div>
      <?php endwhile;
    else :  ?>
      <p><?php __("No Page Found"); ?></p>
    <?php endif; ?>
  </div><!-- /.blog-main -->
<?php get_footer(); ?>