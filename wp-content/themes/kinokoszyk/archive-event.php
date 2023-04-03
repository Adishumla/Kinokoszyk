
<?php get_header() ?>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post();

        $year = get_field("year");

        $image = get_field("image");
        $size = 'full'; // (thumbnail, medium, large, full or custom size)

        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
            echo "<br>";
        }?>
        
        <h2> <?php the_title(); ?> </h2>
        <p> <?php the_content(); ?> <p>

        <p>Year: <?=$year?> </p>

    
        <?php endwhile;
    endif;



get_footer();

