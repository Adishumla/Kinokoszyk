
<?php get_header() ?>

<section class="w-full h-2/3 flex flex-row justify-center items-center bg-white-red poppins text-off-black mt-[72px]">
    <div class="ml-28">
        <h1 class="text-3xl font-light text-wine">Kino Koszyk film</h1>
        <h2 class="text-[148px] font-prata p-0 leading-[148px]">Film</h2>
        <div class="w-3/6 min-w-[800px] mt-4">
            <p class="text-xl font-poppins">Escape into a world of captivating storytelling and stunning visuals. Our films offer an immersive experience that will leave you on the edge of your seat. From heartwarming dramas to pulse-pounding action, our collection has something for everyone. Come discover the magic of cinema with us.</p>
        </div>
    </div>
    <img class="h-full pr-4 object-fill justify-self-end" src="<?php echo get_template_directory_uri(); ?>/assets/photo-roll.svg" alt="">
</section>

<?php if (have_posts()) : ?>
    <section class="flex flex-wrap gap-24 px-44 py-40 bg-off-white ">
    <?php while (have_posts()) : the_post();



        $year = get_field("year");
      
        $image = get_field('image');
        $size = '443px'; // (thumbnail, medium, large, full or custom size)
        ?>
        <div class="shadow-2xl">
            <?php
            if( $image ): ?>
                <img class="w-96 h-96 object-cover" src="<?= wp_get_attachment_image_src( $image)[0] ?>" alt="">
            <?php endif ?>


            <div class="p-10">
                <h2 class="font-bold text-4xl mb-1"> <?php the_title(); ?> </h2>
    <!--            <p> --><?php //the_content(); ?><!-- <p>-->
                <p class="text-2xl mb-24"> Year: <?= $year ?> </p>
                <button class="btn-wine text-center">
                    <a class="" href="<?= the_permalink();?>">Read more</a>
                </button>
            </div>
        </div>


        <?php
    endwhile; ?>
    </section>

<?php endif; ?>

<?php get_footer() ?>

