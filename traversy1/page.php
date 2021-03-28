<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- give the post a id including its id from wordpress and the post classes -->
        <article id="post-<?php the_ID() ?>" <?php post_class(); ?>>
            <div class="post">
                <!-- gets post title -->
                <h2 class="title"><?php the_title() ?></h2>
                    <p> <?php the_content(); ?> <p>
                </div>
        </article>

    <?php endwhile;
else : ?>
    <p>
        <?php _e("no content available"); ?>
    </p>
<?php endif; ?>


<?php get_footer(); ?>