<?php get_header(); ?>

<?php if (is_front_page()) : ?>
    Here goes home content.
<?php else : ?>
    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>

            <?php the_title(); ?>
            <?php the_content(); ?>

    <?php endwhile;
    endif;
    wp_reset_postdata(); ?>
<?php endif; ?>


<?php get_footer() ?>