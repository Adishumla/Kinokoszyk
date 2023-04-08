<?php 
$year = get_field("year");
$directorAndScreenwriters = get_field("director_and_screenwriters");
$directorOfPhotography = get_field("director_of_photography");
$producedBy = get_field("produced_by");
$sound = get_field("sound");
$editor = get_field("editor");
$music = get_field("music");
$image = get_field('image');

$awards = [];
if(get_field("award1")) $awards[] = get_field("award1");
if(get_field("award2")) $awards[] = get_field("award2");
if(get_field("award3")) $awards[] = get_field("award3");
if(get_field("award4")) $awards[] = get_field("award4");

get_header(); ?>



<main class="px-44">
    <?php the_field('trailer') ?>

    <section class="grid grid-cols-3 gap-x-20">
        <span class="text-2xl col-span-full"> Year: <?= $year ?> </span>
        <img class="object-cover row-span-2" src="<?= $image['url'] ?>" alt="<?= $image["alt"] ?>">
        <h2 class="col-span-2 font-prata font-bold text-7xl"><?php the_title(); ?></h2>
        <div class="col-span-2 flex flex-col gap-4 font-poppins text-xl list-disc"><?php the_content(); ?></div>
    </section>

    <section>
        <ul class="list-none">
            <li><b>Director & Screenwriters:</b> <?= $directorAndScreenwriters ?></li>
            <li><b>Produced by:</b> <?= $producedBy ?></li>

        </ul>
    </section>
    <?php
        if(array_key_exists(0, $awards)): ?>  
          
        <section id="Awards">
            <h2 class="font-poppins text-[28px] leading-[37px]">Awards</h2>
            <div class="flex justify-center gap-x-[2%]">
            <?php foreach($awards as $award):?>
                <div class="w-[18.6vw] h-[18.6vw] flex object-contain " >
            
                <img class="object-contain w-full" src=<?=$award["url"]?> alt="<?=$award["alt"]?>"  srcset="<?= wp_get_attachment_image_srcset($award["id"])?>" sizes="15vw">
        </div>
            
            <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>
   

</main>


<!--    <div class="col-span-6 flex flex-col gap-6 justify-center text-center px-6">-->
<!--        <h1 class="font-oi text-4xl lg:text-7xl">--><?php //the_title(); ?><!--</h1>-->
<!--        <div class="font-sans">--><?php //the_content(); ?><!--</div>-->
<!--        <div> --><?php //the_field('trailer') ?><!--</div>-->
<!--        <div>-->
<!---->
<!--            --><?php
//            $image = get_field('image');
//            $size = 'full'; // (thumbnail, medium, large, full or custom size)
//            if( $image ) {
//                echo wp_get_attachment_image( $image, $size );
//
//            }?>
<!---->
<!--            <p> Year: --><?php //= $year ?><!-- </p>-->
<!--            <p> Director & Screenwriters: --><?php //= $directorAndScreenwriters ?><!-- </p>   <!-- Check for plural? -->-->
<!--            <p> Director of Photography: --><?php //= $directorOfPhotography ?><!-- </p>-->
<!--            <p> Produced by: --><?php //=$producedBy ?><!-- </p>-->
<!--            <p> Sound: --><?php //= $sound?><!-- </p>-->
<!--            <p> Editor: --><?php //= $editor ?><!-- </p>-->
<!--            <p> Music: --><?php //= $music ?><!-- </p>-->
<!---->
<!---->
<!--        </div>-->
<!--    </div>-->

<?php get_footer(); ?>