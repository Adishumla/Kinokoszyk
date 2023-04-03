<?php 
$year = get_field("year");
$directorAndScreenwriters = get_field("director_and_screenwriters");
$directorOfPhotography = get_field("director_of_photography");
$producedBy = get_field("produced_by");
$sound = get_field("sound");
$editor = get_field("editor");
$music = get_field("music");

get_header(); ?>



    <div class="col-span-6 flex flex-col gap-6 justify-center text-center px-6">
        <h1 class="font-oi text-4xl lg:text-7xl"><?php the_title(); ?></h1>
        <div class="font-sans"><?php the_content(); ?></div>
        <div> <?php the_field('trailer') ?></div>
        <div> 

            <?php 
            $image = get_field('image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ) {
                echo wp_get_attachment_image( $image, $size );
                
            }?>
           
            <p> Year: <?= $year ?> </p>
            <p> Director & Screenwriters: <?= $directorAndScreenwriters ?> </p>   <!-- Check for plural? -->
            <p> Director of Photography: <?= $directorOfPhotography ?> </p>
            <p> Produced by: <?=$producedBy ?> </p>
            <p> Sound: <?= $sound?> </p>
            <p> Editor: <?= $editor ?> </p>
            <p> Music: <?= $music ?> </p>


        </div>
    </div>

<?php get_footer(); ?>