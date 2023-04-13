
<?php get_header() ?>
<?php
$Films_per_page = 12;
$paged          = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args           = array(
    'post_type' => 'film',
    'posts_per_page' => $Films_per_page,
    'paged' => $paged,
);
$films = new WP_Query( $args );

get_header();
?>

<section class="mt-16">
    <div class="grid grid-cols-3 gap-y-2 pl-6 overflow-x-hidden md:pl-20 md:py-0 lg:gap-y-0 lg:pl-44 lg:pr-12">
        <h1 class="col-span-2 col-start-1 text-2xl font-light text-wine md:pt-28 lg:text-3xl lg:pt-28">Kino Koszyk film</h1>
        <h2 class="col-span-2 col-start-1 text-5xl mb-4 font-prata p-0 sm:text-6xl lg:text-[148px]  lg:leading-[148px]">Film</h2>
        <img class="row-start-1 self-center justify-self-end col-start-3 row-span-4 translate-x-1/2 object-fill sm:row-start-1 lg:translate-x-0" src="<?= get_template_directory_uri(); ?>/assets/photo-roll.svg" alt="">
        <p class="col-span-2 col-start-1 text-lg font-poppins sm:col-span-2 sm:h-56 sm:text-xl">Escape into a world of captivating storytelling and stunning visuals. Our films offer an immersive experience that will leave you on the edge of your seat. From heartwarming dramas to pulse-pounding action, our collection has something for everyone. Come discover the magic of cinema with us.</p>
    </div>
</section>

<?php if (have_posts()) : ?>
    <section class="flex flex-wrap gap-y-12 px-6 py-12 md:gap-x-2 md:px-8 lg:gap-24 lg:px-44 lg:py-40 bg-off-white ">
    <?php while ( $films->have_posts() ) : $films->the_post();



        $year = get_field("year");
      
        $image = get_field('image');
        $size = '443px'; // (thumbnail, medium, large, full or custom size)
        ?>
        <div class="shadow-2xl max-w-min min-h-[760px]">
            <?php
            if( $image ): ?>
                <div class="h-1/2 overflow-hidden  transition-opacity duration-400">
                    <a href="<?= the_permalink(); ?>">
                        <img class="w-96 h-full object-cover transform transition-transform hover:scale-125 duration-300" src="<?= $image['url'] ?>" alt="<?= $image["alt"] ?>">
                    </a>
                </div>
            <?php endif ?>


            <div class="p-10 h-1/2 flex flex-col justify-between">
                <div>
                    <a href="<?= the_permalink();?>">
                        <h2 class="font-bold text-4xl  mb-1 hover:underline duration-200"> <?php the_title(); ?> </h2>
                    </a>
                    <p class="text-2xl"> Year: <?= $year ?> </p>
                </div>
                <button class="btn-wine">
                    <a class="flex justify-center gap-5" href="<?= the_permalink();?>">More information<img class="rotate-180" src="<?= get_template_directory_uri() ?>/assets/arrow-white.svg" alt=""></a>
                </button>
            </div>
        </div>


        <?php
    endwhile; ?>
    </section>
<?php
    wp_reset_query();
    // Pagination
    $big = 999999999; // need an unlikely integer
    $arrow = get_template_directory_uri() . '/assets/Arrow.svg';
    $current_page = max( 1, get_query_var( 'paged' ) );
    $total_pages = $films->max_num_pages; ?>

    <?php if( $total_pages > 1 ): ?>
    <div class="flex justify-center align-center pt-10 pb-40 bg-off-white">
        <?php if ( $total_pages > 1 ): ?>
            <div class="flex justify-center mb-10">
            <span class="screen-reader-text"><?= __( 'Page', 'textdomain' ) . ' ' . $current_page . ' ' . __( 'of', 'textdomain' ) . ' ' . $total_pages ?></span>'
            <a class="prev page-numbers" href="<?= get_pagenum_link( $current_page - 1 ) ?>"><img src="<?=  $arrow ?>" alt="arrow" class="transform inline-block"></a>
            <span class="self-center text-xl mx-5"><?= __( 'Page ', 'textdomain' ) . $current_page . __( ' of ', 'textdomain' ) . $total_pages ?></span>

                <?php if ( $current_page == $total_pages ): ?>
                    <a class="next page-numbers" href="<?= get_pagenum_link( $current_page ) ?>"><img src="<?= $arrow ?>" alt="arrow" class="inline-block rotate-180"></a>;
                <?php else: ?>
                    <a class="next page-numbers" href="<?= get_pagenum_link( $current_page + 1 ) ?>">
                        <img src="<?= $arrow ?>" alt="arrow" class="inline-block rotate-180">
                    </a>
        <?php endif ?>
            </div>
        <?php
            paginate_links( array(
                'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format'  => '?paged=%#%',
                'current' => max( 1, get_query_var( 'paged' ) ),
                'total'   => $films->max_num_pages,
            ) );
            endif; ?>
    </div>

<?php endif; ?>
<?php endif; ?>

<?php get_footer() ?>