
<!-- For a single blogpost -->

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- give the post a id including its id from wordpress and the post classes -->
        <article id="post-<?php the_ID() ?>" <?php post_class(); ?>>
            <div class="post">
                <!-- gets post title -->
                <h2 class="title"><a href="<?php the_permalink(); ?>""><?php the_title() ?></a></h2>
                <!-- gets the author name and link to all their posts -->
                <p class="meta">Posted by:<a href="#"><?php the_author_posts_link(); ?></a> 
                <!-- Gets the date formatted month day year-->
                <?php the_time("F j, Y "); ?>
                <!-- link to the comments -->
                <a href="<?php comments_link(); ?>" class="comments">
                <!-- get no of comments and add parameters -->
                <?php comments_number("0 Comments", "1 Comment", "%responses")  ?></a> &nbsp;&bull;&nbsp; 
                
                <a href="<?php the_permalink(); ?>" class="permalink">Full article</a></p>

                <div class="entry">
                    <!-- gets post image -->
                    <a href="<?php the_permalink(); ?>" class="image image-full">
                    <?php the_post_thumbnail("full") ?>
                    </a>

                    <p> <?php the_content(); ?> <p>
                </div>
        </article>

    <?php endwhile;
else : ?>
    <p>
        <?php _e("no content available"); ?>
    </p>
<?php endif; ?>

<!-- comments -->
<?php comments_template() ?>


<?php get_footer(); ?>