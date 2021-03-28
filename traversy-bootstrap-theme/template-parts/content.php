<div class="blogpost">
    <h2 class="blog-post-title">
        <!-- conditional statement for single pages -->
        <?php if (is_single()) : ?>
            <?php the_title();  ?>
        <?php else :  ?>
            <a href="<?php the_permalink(); ?>"><?php the_title();  ?></a>
        <?php endif; ?>
    </h2>
    <p class="blog-post-meta">
        <!-- Date -->
        <?php the_time("Y-m-d"); ?>
        <!-- get the author name and link to thir post page -->
        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>"><?php the_author(); ?></a></p>
    <!-- Featured image -->
    <?php if (has_post_thumbnail()) :  ?>
        <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <!-- The excerpt which we can change length in functions.php -->
    <?php if (is_single()) : ?>
        <p><?php the_content();  ?></p>
    <?php else :  ?>
        <p><?php the_excerpt(); ?></p>
    <?php endif; ?>
    <!-- the content with the readmore set on each post in the block
      <p><?php the_content("Read more ...."); ?></p> -->

    <!-- add the comments for the single page -->
    <?php if (is_single()) :  ?>
        <?php comments_template();  ?>
    <?php endif;  ?>
</div>