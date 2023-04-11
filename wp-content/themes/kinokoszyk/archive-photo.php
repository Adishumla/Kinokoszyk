<?php

/**
 * get all images from media library
 */
//limit 20 images per page

$images_per_page = 15;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$offset = ($paged - 1) * $images_per_page;

$query_images_args = array(
    'post_type' => 'photo',
    'posts_per_page' => $images_per_page,
    'paged' => $paged,
    'offset' => $offset,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'size' => 'full',
);

$query_images = new WP_Query($query_images_args);

?>
<?php get_header(); ?>

<section class=" w-full h-2/3 flex flex-row justify-center items-center bg-white-red poppins text-off-black mt-[72px]">
    <div class="ml-28">
        <h1 class="text-3xl font-light text-wine">Kino Koszyk photography</h1>
        <h2 class="text-[148px] font-prata p-0 leading-[148px] md:text-5xl">Photography</h2>
        <h2><?php the_field('photo_title'); ?></h2>
        <div class="w-3/6 min-w-[800px] mt-4 md:min-w-[500px]">
            <p class="text-xl">Joanna Helander is known for her captivating black and white images that explore themes of identity, memory, and the human condition. Helander's work is characterized by a stark simplicity that draws the viewer in and invites contemplation.</p>
        </div>
    </div>
    <img class="h-full pr-4 object-fill justify-self-end" src="<?php echo get_template_directory_uri(); ?>/assets/photo-roll.svg" alt="">
</section>
<?php
$first = [];
$second = [];
$third = [];
?>
<section class="bg-off-white">
    <div class="w-auto flex flex-col justify-center items-center">
        <div class="masonry text-center bg-off-white w-screen p-[8%]">
            <?php
			$images_per_page = 15;
			$paged = get_query_var('paged') ? get_query_var('paged') : 1;
			$offset = ($paged - 1) * $images_per_page;

			$query_images_args = array(
				'post_type' => 'photo',
				'posts_per_page' => $images_per_page,
				'paged' => $paged,
				'offset' => $offset,
				'orderby' => 'post_date',
				'order' => 'DESC',
				'post_status' => 'publish',
				'size' => 'full',
			);

			$query_images = new WP_Query($query_images_args);

			$image_urls = array(); // Initialize the array

			while ($query_images->have_posts()) {
				$query_images->the_post();
				$post_content = get_the_content();
				preg_match_all('/<img[^>]+>/', $post_content, $matches);
				$images = $matches[0];
				foreach ($images as $image) {
					preg_match('/src="([^"]+)"/i', $image, $image_src);
					$image_url = $image_src[1];
					$image_urls[] = $image_url;
				}
			}
			foreach ($image_urls as $image_url) { ?>
                <div class="inline-block align-top overflow-hidden masonry-item w-full w-[39%] md:w-[26.5%] lg:w-[26.8%] mb-4">
                    <a href="<?php echo $image_url; ?>" target="_blank">
                        <img class="w-full hover:scale-110 transition duration-500 ease-in-out h-auto object-cover object-center" src="<?php echo $image_url; ?>" alt="">
                    </a>
                </div>
			<?php } ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>


<script>
    var masonry = new Masonry('.masonry', {
        itemSelector: '.masonry-item',
        columnWidth: '.masonry-item',
        percentPosition: true,
        gutter: 20,
        horizontalOrder: true,
    });

</script>
