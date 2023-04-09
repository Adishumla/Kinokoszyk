<?php

/**
 * get all images from media library
 */
//limit 20 images per page

$images_per_page = 15;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$offset = ($paged - 1) * $images_per_page;

$query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' => $images_per_page,
    'orderby'        => 'post_date',
    'order'          => 'DESC',
    'paged'          => $paged,
    'offset'         => $offset,
);
$query_images = new WP_Query($query_images_args);
$images = array();
?>

<header>
    <?php get_header(); ?>
</header>
<section class=" w-full h-2/3 flex flex-row justify-center items-center bg-white-red poppins text-off-black mt-[72px]">
    <div class="ml-28">
        <h1 class="text-3xl font-light text-wine">Kino Koszyk photography</h1>
        <h2 class="text-[148px] font-prata p-0 leading-[148px]">Photography</h2>
        <h2><?php the_field('photo_title'); ?></h2>
        <div class="w-3/6 min-w-[800px] mt-4">
            <p class="text-xl">Joanna Helander is known for her captivating black and white images that explore themes of identity, memory, and the human condition. Helander's work is characterized by a stark simplicity that draws the viewer in and invites contemplation.</p>
        </div>
    </div>
    <img class="h-full pr-4 object-fill justify-self-end" src="<?php echo get_template_directory_uri(); ?>/assets/photo-roll.svg" alt="">
</section>
<section class="bg-off-white">
    <div class="grid grid-cols-3 gap-[31px] p-[102px] bg-off-white pb-[48px]">
        <div class="col-span-1">
            <?php
            $i = 0;
            if ($query_images->have_posts()) {
                foreach ($query_images->posts as $image) {
                    $i++;
                    if ($i % 3 == 1) {
            ?>
                        <div class="w-full mb-[26px] overflow-hidden">
                            <a href="<?php echo wp_get_attachment_url($image->ID); ?>" target="_blank">
                                <img class="w-full hover:scale-110 transition duration-500 ease-in-out" src="<?php echo wp_get_attachment_url($image->ID); ?>" alt="">
                            </a>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
        <div class="col-span-1">
            <?php
            $i = 0;
            if ($query_images->have_posts()) {
                foreach ($query_images->posts as $image) {
                    $i++;
                    if ($i % 3 == 2) {
            ?>
                        <div class="w-full mb-[26px] overflow-hidden">
                            <a href="<?php echo wp_get_attachment_url($image->ID); ?>" target="_blank">
                                <img class="w-full hover:scale-110 transition duration-500 ease-in-out" src="<?php echo wp_get_attachment_url($image->ID); ?>" alt="">
                            </a>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
        <div class="col-span-1">
            <?php
            $i = 0;
            if ($query_images->have_posts()) {
                foreach ($query_images->posts as $image) {
                    $i++;
                    if ($i % 3 == 0) {
            ?>
                        <div class="w-full mb-[26px] overflow-hidden">
                            <a href="<?php echo wp_get_attachment_url($image->ID); ?>" target="_blank">
                                <img class="w-full hover:scale-110 transition duration-500 ease-in-out" src="<?php echo wp_get_attachment_url($image->ID); ?>" alt="">
                            </a>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>
    <?php
    wp_reset_postdata();
    // Pagination
    $big = 999999999; // need an unlikely integer
    echo '<div class="flex justify-center pb-10 align-center">';
    $arrow = get_template_directory_uri() . '/assets/Arrow.svg';
    $current_page = max(1, get_query_var('paged'));
    $total_pages = $query_images->max_num_pages;
    if ($total_pages > 1) {
        echo '<div class="flex justify-center mb-10">';
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
            'total'   => $query_images->max_num_pages,
        ));
    }
    echo '</div>';
    ?>
</section>

<?php get_footer(); ?>