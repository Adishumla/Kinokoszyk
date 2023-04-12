<?php get_header(); ?>

<section class="mt-24">
    <div class="grid grid-cols-3 gap-y-2 gap-x-4 py-6 pl-6 overflow-x-hidden sm:gap-x-14 md:pl-20 lg:gap-y-0 lg:pl-44 lg:pt-28 lg:pb-20">
        <h1 class="col-span-2 col-start-1 text-2xl font-light text-wine lg:text-3xl">Kino Koszyk books</h1>
        <h2 class="col-span-2 col-start-1 text-5xl mb-4 font-prata p-0 sm:text-6xl lg:text-[148px]  lg:leading-[148px]">Books</h2>
        <img class="row-start-2 justify-self-end h-28 sm:h-60 sm:row-start-1 col-start-3 row-span-3 object-fill" src="<?= get_template_directory_uri(); ?>/assets/books.svg" alt="">
        <p class="col-span-3 col-start-1 text-lg font-poppins sm:col-span-2 sm:text-xl">Here you can explore Kino Koszyk’s literary world and discover his captivating books. From award-winning novels to insightful essays, Kino Koszyk's works offer a unique perspective on life, love, and the human experience.</p>
    </div>
</section>

<section class="lg:w-4/4 lg:mt-[48px] flex justify-center">
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
            <div class="max-w-[380px] md:max-w-none flex flex-col lg:flex-row gap-10 text-lg lg:text-xl mx-4 mb-20 shadow-2xl md:shadow-none lg:shadow-none p-5 md:p-14">
                <?php
                if ($image) {
                ?>
                    <img class="w-full md:w-2/4 lg:w-96 h-auto object-cover" src=<?= $image['url'] ?> alt="">
                <?php } ?>
                <div class="flex flex-col gap-4 self-center md:self-start lg:self-center">
                    <h2 class="font-bold text-2xl lg:text-4xl"> <?php the_title(); ?> </h2>

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
        $current_page = max(1, get_query_var('paged'));
        $total_pages = $query->max_num_pages;
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
                'total'   => $query->max_num_pages,
            ));
        }
        echo '</div>';
        wp_reset_postdata();
    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif;
    ?>
</section>

<?php get_footer() ?>