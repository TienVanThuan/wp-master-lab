<?php get_header(); ?>

<main id="content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h2>', '</h2>');
            the_excerpt();
        endwhile;
    else :
        echo '<p>Chưa có bài viết nào.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>