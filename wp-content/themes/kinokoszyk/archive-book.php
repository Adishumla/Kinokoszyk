<?php get_header(); ?>

<section class="w-full h-2/3 flex flex-row justify-center items-center bg-white-red poppins text-off-black mt-[72px]">
    <div class="ml-28">
        <h1 class="text-3xl font-light text-wine">Kino Koszyk books</h1>
        <h2 class="text-[148px] font-prata p-0 leading-[148px]">Books</h2>
        <div class="w-3/6 min-w-[800px] mt-4">
            <p class="text-xl font-poppins">Here you can explore Kino Koszyk’s literary world and discover his captivating books. From award-winning novels to insightful essays, Kino Koszyk's works offer a unique perspective on life, love, and the human experience.</p>
        </div>
    </div>
    <img class="h-full pr-0 object-fill justify-self-end" src="<?= get_template_directory_uri(); ?>/assets/books.svg" alt="">
</section>
<section class="mx-44 mt-[48px]">
    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $query = new WP_Query(array(
	    'post_type' => 'book',
	    'posts_per_page' => 1,
	    'paged' => $paged,
    ));

    if ($query->have_posts()) :

        while ($query->have_posts()) : $query->the_post();


            $writers = get_field("writers");
            $publisher = get_field("publisher");
            $language = get_field("language");
            $releaseDate = get_field("release_date");
            $isbn = get_field("isbn");

            $image = get_field("image");
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
    ?>
            <div class="flex flex-row gap-10 text-[20px] mb-20">
                <?php
                if ($image) {
                ?>
                    <img class="w-96 h-auto object-cover" src=<?= $image['url'] ?> alt="">
                <?php
                    echo "<br>";
                } ?>
                <div class="flex flex-col gap-4 self-center">
                    <h2 class="font-bold text-[38px]"> <?php the_title(); ?> </h2>

                    <p> <b>Writers:</b> <?= $writers ?> </p> <!-- Check for plural? -->
                    <span>
                        <p><b>Description:</b> <?= the_content() ?> </p>
                    </span>
                    <p> <b>Publisher:</b> <?= $publisher ?> </p>
                    <p> <b>Language:</b> <?= $language ?> </p>
                    <p> <b>Release Data:</b> <?= $releaseDate ?> </p>
                    <p> <b>ISBN:</b> <?= $isbn ?> </p>

                </div>
                <?php

                ?>
            </div>
    <?php
        endwhile;

        // Pagination
	    $big = 999999999; // need an unlikely integer
	    echo '<div class="flex justify-center pb-10 align-center">';
	    $arrow = get_template_directory_uri() . '/assets/Arrow.svg';
        $current_page = max( 1, get_query_var( 'paged' ) );
	    $total_pages = $query->max_num_pages;
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
			    'total'   => $query->max_num_pages,
		    ) );
	    }
	    echo '</div>';
	    wp_reset_postdata();
    else :
	    _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif;
    ?>
</section>

<?php get_footer() ?>
