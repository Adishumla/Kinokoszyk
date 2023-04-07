<?php
$events_per_page = 1;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'event',
    'posts_per_page' => $events_per_page,
    'paged' => $paged,
);
$events = new WP_Query( $args );

get_header();
?>

    <section class="w-full h-2/3 flex flex-row justify-center items-center bg-white-red poppins text-off-black mt-[72px] mb-[72px]">
        <div class="ml-28">
            <h1 class="text-3xl font-light text-wine">Exhibitions by Joanna Helander and Kino Koszyk</h1>
            <h2 class="text-[148px] font-prata p-0 leading-[148px]">Events</h2>
            <div class="w-3/6 min-w-[800px] mt-4">
                <p class="text-xl font-poppins">Here you'll find information on upcoming shows and exhibitions featuring the innovative work of this Kino Koszyk and Joanna Helander. They are visionary filmmakers and authors whose work has been widely recognized and celebrated for its creativity and originality. Stay tuned for updates on upcoming events and be sure to join us for an unforgettable experience.</p>
            </div>
        </div>
        <img class="h-full pr-0 object-fill justify-self-end" src="<?= get_template_directory_uri(); ?>/assets/events.svg" alt="">
    </section>
<section class="bg-off-white flex flex-row-reverse justify-between items-center p-20">
    <div>
        <a href="<?php echo get_permalink( get_page_by_path( 'photos' ) ); ?>"class="btn-wine py-2.5 px-5 text-center flex items-center justify-center">Events on Facebook <img class="ml-2 rotate-180" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-white.svg" alt=""></a>
    </div>
    <div>
    <h4 class="text-[38px] font-bold pb-2">
        Looking for our latest events and exhibitions?
    </h4>
    <p class="text-xl font-poppins max-w-[600px]">
        Look no further than our Facebook page! We post all the latest information and updates so you'll never miss a thing.
    </p>
    </div>
</section>
<section class="flex flex-col justify-center items-center bg-off-white py-20">
<?php if ( $events->have_posts() ) : ?>
    <?php while ( $events->have_posts() ) : $events->the_post(); ?>
        <?php
        $year = get_field("year");

        $image = get_field("image");
        $size = 'full'; // (thumbnail, medium, large, full or custom size)

        /*if( $image ) {
            echo wp_get_attachment_image( $image, $size );
            echo "<br>";
        }*/?>
        <div class="flex flex-row gap-10 text-[20px] mb-20 shadow-2xl w-3/4 mx-auto">
            <img class="w-96 h-auto object-cover aspect-square" src=<?= $image['url'] ?> alt="">
            <div class="flex flex-col justify-center items-start p-10">
            <h2 class="text-3xl font-bold"><?= the_title() ?></h2>
            <p class="text-2xl font-poppins pb-2">Year: <?=$year?> </p>
        <p class="text-xl font-poppins"><?= the_content() ?></p>
            </div>
    </div>
        <?php endwhile;
    endif;
    wp_reset_query();
    // Pagination
$big = 999999999; // need an unlikely integer
echo '<div class="flex justify-center pb-10 align-center">';
$arrow = get_template_directory_uri() . '/assets/Arrow.svg';
$current_page = max( 1, get_query_var( 'paged' ) );
$total_pages = $events->max_num_pages;
if ( $total_pages > 1 ) {
	echo '<div class="flex justify-center mb-10">';
	echo '<span class="screen-reader-text">' . __( 'Page', 'textdomain' ) . ' ' . $current_page . ' ' . __( 'of', 'textdomain' ) . ' ' . $total_pages . '</span>';
	echo '<a class="prev page-numbers" href="' . get_pagenum_link( $current_page - 1 ) . '"><img src="' . $arrow . '" alt="arrow" class="transform inline-block"></a>';
	echo '<span class="self-center text-xl mx-5">' . __( 'Page ', 'textdomain' ) . $current_page . __( ' of ', 'textdomain' ) . $total_pages . '</span>';
	if ( $current_page == $total_pages ) {
		echo '<a class="next page-numbers" href="' . get_pagenum_link( $current_page ) . '"><img src="' . $arrow . '" alt="arrow" class="inline-block rotate-180"></a>';
	} else {
		echo '<a class="next page-numbers" href="' . get_pagenum_link( $current_page + 1 ) . '"><img src="' . $arrow . '" alt="arrow" class="inline-block rotate-180"></a>';
	}
	echo '</div>';
	paginate_links( array(
		'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format'  => '?paged=%#%',
		'current' => max( 1, get_query_var( 'paged' ) ),
		'total'   => $events->max_num_pages,
	) );
}
echo '</div>';
?>
</section>


<?php get_footer(); ?>

