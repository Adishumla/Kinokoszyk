<?php
$events_per_page = 6;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'event',
    'posts_per_page' => $events_per_page,
    'paged' => $paged,
);
$events = new WP_Query($args);

get_header();
?>

<section class="mt-24">
    <!-- <div class="grid grid-cols-3 gap-y-2 gap-x-4 py-6 pl-6 sm:pl-[88px] sm:py-[108px] overflow-x-hidden sm:gap-x-14 lg:gap-y-0 lg:pl-44 lg:pt-28 lg:pb-20"> -->


    <div class="grid grid-cols-3 gap-y-2 gap-x-4 py-6 pl-6 overflow-x-hidden sm:gap-x-14 sm:pl-20 lg:gap-y-0 lg:pl-44 lg:pt-28 lg:pb-20">
        <h1 class="col-span-2 col-start-1 text-2xl font-light text-wine lg:text-3xl">Exhibitions by Joanna Helander and Kino Koszyk</h1>
        <h2 class="col-span-2 col-start-1 text-5xl mb-4 font-prata p-0 sm:text-6xl lg:text-[148px]  lg:leading-[148px]">Events</h2>
        <img class="  row-start-2 justify-self-end h-28 sm:h-60 sm:row-start-1 col-start-3 row-span-3 object-fill" src="<?= get_template_directory_uri(); ?>/assets/events.svg" alt="">
        <p class="col-span-3 col-start-1 text-lg font-poppins sm:col-span-2 sm:text-xl">Here you'll find information on upcoming shows and exhibitions featuring the innovative work of this Kino Koszyk and Joanna Helander. They are visionary filmmakers and authors whose work has been widely recognized and celebrated for its creativity and originality. Stay tuned for updates on upcoming events and be sure to join us for an unforgettable experience.</p>
    </div>
</section>

<section class="bg-off-white flex flex-col lg:flex-row lg:justify-between lg:items-center py-12 lg:px-44 w-full lg:gap-[3%]">
    <div class="px-[24px] sm:px-[80px] lg:px-0">
        <h4 class="text-[28px] leading-[34px] lg:text-[38px] lg:leading-[40px] sm:mb-[20px] font-bold lg:pb-2">
            Looking for our latest events and exhibitions?
        </h4>
        <p class="text-size[18px] sm:text-xl font-poppins max-w-[600px] mt-[16px] sm:mb-[48px] mb-[32px] lg:mb-0">
            Look no further than our Facebook page! We post all the latest information and updates so you'll never miss a thing.
        </p>
    </div>
    <div class=" px-[24px] sm:px-[80px] lg:px-0 ">
        <a href="<?php echo get_permalink(get_page_by_path('photos')); ?>" class="btn-wine py-2.5 px-5 text-center flex items-center justify-center">Events on Facebook <img class="ml-2 rotate-180" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-white.svg" alt=""></a>
    </div>
</section>


<section class=" sm:pt-0 grid grid-cols-1 sm:gap-[10px] sm:grid sm:grid-cols-2  lg:flex lg:flex-col lg:justify-center lg:items-center bg-off-white lg:pt-40 lg:gap-0 pt-[48px] sm:pb-[48px] w-full">
    <?php if ($events->have_posts()) : ?>
        <?php while ($events->have_posts()) : $events->the_post(); ?>
            <?php
            $year = get_field("year");

            $image = get_field("image");
            $size = 'full'; // (thumbnail, medium, large, full or custom size)

            /*if( $image ) {
            echo wp_get_attachment_image( $image, $size );
            echo "<br>";
        }*/ ?>
            <div class="flex mx-auto flex-col max-w-[380px] mb-[48px] lg:gap-10 text-[20px] lg:mb-20 shadow-2xl lg:flex-row lg:mx-auto lg:max-w-none lg:w-3/4">
                <img class="w-[380px] h-[380px] lg:w-96 lg:h-auto object-cover aspect-square" src=<?= $image['url'] ?> alt="">
                <div class="flex flex-col justify-center items-start p-10 ">
                    <h2 class="text-4xl font-bold"><?= the_title() ?></h2>
                    <p class="text-2xl font-poppins pt-2">Year: <?= $year ?> </p>
                    <!-- just nu kan det bli en bugg när man skriver ett väldigt lång ord men detta går att fixa med  break-words men man behöver en satt width då vilket blev jobbigt -->
                    <div class="w-full h-auto">
                        <p class="text-xl font-poppins pt-8 break-words h-full"><?= the_content() ?></p>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif;
    wp_reset_query();
    // Pagination
    $big = 999999999; // need an unlikely integer
    echo '</section>';
    echo '<section class="bg-off-white">';
    echo '<div class=" pb-[64px] sm:pb-[80px]  lg:pb-[165px] flex justify-center align-center lg:pt-10">';
    $arrow = get_template_directory_uri() . '/assets/Arrow.svg';
    $current_page = max(1, get_query_var('paged'));
    $total_pages = $events->max_num_pages;
    if ($total_pages > 1) {
        echo '<div class="flex justify-center">';
        echo '<span class="screen-reader-text">' . __('Page', 'textdomain') . ' ' . $current_page . ' ' . __('of', 'textdomain') . ' ' . $total_pages . '</span>';
        echo '<a class="prev page-numbers" href="' . get_pagenum_link($current_page - 1) . '"><img src="' . $arrow . '" alt="arrow" class="transform inline-block"></a>';
        echo '<span class="self-center text-xl mx-5">' . __('Page ', 'textdomain') . $current_page . __(' of ', 'textdomain') . $total_pages . '</span>';
        if ($current_page == $total_pages) {
            echo '<a class="next page-numbers" href="' . get_pagenum_link($current_page) . '"><img src="' . $arrow . '" alt="arrow" class="inline-block rotate-180"></a>';
        } else {
            echo '<a class="next page-numbers" href="' . get_pagenum_link($current_page + 1) . '"><img src="' . $arrow . '" alt="arrow" class="inline-block rotate-180"></a>';
        }
        echo '</div>';
        paginate_links(array(
            'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'  => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total'   => $events->max_num_pages,
        ));
    }
    echo '</div>';
    ?>
</section>


<?php get_footer(); ?>