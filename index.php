<?php get_header(); ?>

<?php
if (have_posts()) : while (have_posts()) : the_post();
        the_content();
    endwhile;
    
else : ?>
    <p>PAGE 404</p>
<?php endif; ?>

<?php get_footer(); ?>