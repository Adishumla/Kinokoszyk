
<?php get_header() ?>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post();
        the_title();
        the_content();
        $image = get_field('image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
            echo "<br>";
        }



        //the_title();
    endwhile; ?>

<?php endif; ?>

<?php get_footer() ?>

