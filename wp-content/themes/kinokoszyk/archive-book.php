<?php get_header() ?>



<?php 
    


    if (have_posts()) : 
    

    while (have_posts()) : the_post(); 
    
        

        $writers = get_field("writers");
        $publisher = get_field("publisher");
        $language = get_field("language");
        $releaseDate = get_field("release_date");
        $isbn = get_field("isbn");

        $image = get_field("image");
        $size = 'full'; // (thumbnail, medium, large, full or custom size)

        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
            echo "<br>";
        }?>

        <h2> <?php the_title(); ?> </h2>
        <p> <?php the_content(); ?> </p>

        
        <p> Writers: <?= $writers ?> </p>   <!-- Check for plural? -->
        <p> Publisher: <?= $publisher ?> </p>
        <p> Language: <?=$language ?> </p>
        <p> Release Data: <?= $releaseDate?> </p>
        <p> ISBN: <?= $isbn ?> </p>

        
        <?php
        
    endwhile; ?>

<?php endif; ?>
PEPE




<?php get_footer() ?>