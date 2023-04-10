
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
    <?php while ( $films->have_posts() ) : $films->the_post();



        $year = get_field("year");
      
        $image = get_field('image');
        $size = '443px'; // (thumbnail, medium, large, full or custom size)
        # var_dump($image["alt"]);
        ?>
        <div class="shadow-2xl min-h-[760px]">
            <?php
            if( $image ): ?>
                <a class="hover:bg-off-white hover:opacity-30" href="<?= the_permalink();?>">
                    <img class="w-96 h-1/2 object-cover" src="<?= $image['url'] ?>" alt="<?= $image["alt"] ?>">
                </a>
            <?php endif ?>


            <div class="p-10 h-1/2 flex flex-col justify-between">
                <div>
                    <a href="<?= the_permalink();?>">
                        <h2 class="font-bold text-4xl max-w-fit mb-1 hover:underline"> <?php the_title(); ?> </h2>
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

<?php
    print_a($paged);
?>