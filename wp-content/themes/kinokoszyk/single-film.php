<?php 
$year = get_field("year");
$directorAndScreenwriters = get_field("director_and_screenwriters");
$directorOfPhotography = get_field("director_of_photography");
$producedBy = get_field("produced_by");
$sound = get_field("sound");
$editor = get_field("editor");
$music = get_field("music");
$image = get_field('image');
$language = get_field('language');

$trailer = get_field('trailer');

$awards = [];
if(get_field("award1")) $awards[] = get_field("award1");
if(get_field("award2")) $awards[] = get_field("award2");
if(get_field("award3")) $awards[] = get_field("award3");
if(get_field("award4")) $awards[] = get_field("award4");

get_header(); ?>



<main class="px-[10.4%] bg-off-white">
    
    <div class="mt-[8%] mb-[20%] w-full aspect-video [&>*]:w-full [&>*]:h-full "> 
    <div class="bg-red-50 w-[100%] h-[500px] left-0 absolute "></div>
        <?php  the_field('trailer') ?>  
    </div>

    <section class="flex gap-x-[5.8%]">
        <div class="flex flex-col w-[32%]">
            <span class="font-poppins text-[24px] leading-[28px] col-span-full"> Year: <?= $year ?> </span>
            <img class="w-full object-cover row-span-2 drop-shadow-[10px_14px_14px_rgba(0,0,0,0.25)]"  src="<?= $image['url'] ?>" alt="<?= $image["alt"] ?>">
        </div>
        <div class="flex flex-col gap-y-[21px]">
            <h2 class="font-prata text-[80px] leading-[86px]"><?php the_title(); ?></h2>
            <div class="font-poppins text-[20px] leading[28px]"><?php the_content(); ?></div>
        </div>
    </section>

    <section class="flex justify-between px-[2.3%] bg-white-red mt-[80px] pt-[40px] pb-[60px]">
        <div class="list-none">
            <p><b>Language:</b> <?= $language ?></li>
            <p><b>Director & Screenwriters:</b> <?= $directorAndScreenwriters ?></li>
            <p><b>Produced by:</b> <?= $producedBy ?></li>
        </div>
        <div class="flex flex-col justify-between h-[132px]">
                <button class="btn-wine text-center">
                    <a class="" href="<?= the_permalink();?>">Read more</a>
                </button>
                <button class="btn-wine text-center">
                    <a class="" href="<?= the_permalink();?>">Read more</a>
                </button>
        </div>
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