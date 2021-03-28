<article id="post-<?php the_id(); ?>" <?php post_class(); ?>>         
<header class="entry-header"> 
    <?php echo get_post_format( $post->ID ); ?>          
    <?php the_title( "<h1>", "</h1>" ) ?>           
</header>           
<div class="entry-content">             
    <?php the_content(); ?>           
</div>
</article>  

<?php comments_template(); ?>