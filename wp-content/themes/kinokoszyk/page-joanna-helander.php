<header>
	<?php get_header(); ?>
</header>
<section class="w-full h-4/4 flex flex-row justify-center items-center bg-white-red font-poppins text-off-black mt-[72px] mb-20">
	<div class=" flex flex-col w-2/4">
		<h1 class="text-[88px] font-prata p-0 leading-[86px] align-center">Joanna Helander</h1>
		<div class="w-2/6 min-w-[600px] mt-4">
			<p class="text-xl flex flex-col gap-4">
                <span class="">Learn about Joanna Helander, a photographer, writer, and filmmaker born in Ruda Slaska in 1948. Arrested for protesting the invasion of Czechoslovakia, she emigrated to Sweden in 1971 and became an accomplished photographer, receiving the Swedish "Photographer of the Year" award in 1983.
                </span>
				<span>
				Her early contacts with Poland's democratic opposition led her to direct a festival of independent Polish culture in Sweden in 1981, and she went on to publish books of photography and translations of Polish poetry. She has also directed and produced several films based on her own photographs. Joanna Helander's work has appeared in publications and television programs in Poland, Germany, and the U.S.A.
                </span>
			</p>
		</div>
        <div class="flex gap-6 mt-20 h-fit">
            <a href=# class="btn-white py-2.5 px-5 text-center flex items-center justify-center m-0">Read her biography</a>
            <a href=# class="btn-wine py-2.5 px-5 text-center flex items-center justify-center m-0">Read her interview</a>
        </div>
	</div>
	<img class="h-full object-fill justify-self-end shadow-2xl" src="<?php echo get_template_directory_uri(); ?>/assets/Joanna-interview.jpg" alt="">
</section>
<?php
$images_per_page = 15;
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$offset = ( $paged - 1 ) * $images_per_page;

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
$query_images = new WP_Query( $query_images_args );
$images = array();
?>
<section class="bg-off-white">
    <div class="grid grid-cols-3 gap-[31px] p-[102px] bg-off-white pb-[48px]">
        <h2 class="col-span-3 text-[56px] font-prata text-start">Photography by Joanna Helander</h2>
        <div class="col-span-1">
			<?php
			$i = 0;
			if ( $query_images->have_posts() ) {
				foreach ( $query_images->posts as $image ) {
					$i ++;
					if ( $i % 3 == 1 ) {
						?>
                        <div class="w-full mb-[26px] overflow-hidden">
                            <a href="<?php echo wp_get_attachment_url( $image->ID ); ?>" target="_blank">
                                <img class="w-full hover:scale-110 transition duration-500 ease-in-out" src="<?php echo wp_get_attachment_url( $image->ID ); ?>" alt="">
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
			if ( $query_images->have_posts() ) {
				foreach ( $query_images->posts as $image ) {
					$i ++;
					if ( $i % 3 == 2 ) {
						?>
                        <div class="w-full mb-[26px] overflow-hidden">
                            <a href="<?php echo wp_get_attachment_url( $image->ID ); ?>" target="_blank">
                                <img class="w-full hover:scale-110 transition duration-500 ease-in-out" src="<?php echo wp_get_attachment_url( $image->ID ); ?>" alt="">
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
			if ( $query_images->have_posts() ) {
				foreach ( $query_images->posts as $image ) {
					$i ++;
					if ( $i % 3 == 0 ) {
						?>
                        <div class="w-full mb-[26px] overflow-hidden">
                            <a href="<?php echo wp_get_attachment_url( $image->ID ); ?>" target="_blank">
                                <img class="w-full hover:scale-110 transition duration-500 ease-in-out" src="<?php echo wp_get_attachment_url( $image->ID ); ?>" alt="">
                            </a>

                        </div>
						<?php
					}
				}
			}
			?>
            <div class="flex justify-end">
                <a href="<?php echo get_permalink( get_page_by_path( 'photos' ) ); ?>"class="btn-wine py-2.5 px-5 text-center flex items-between justify-center">See more of her work <img class="ml-2 rotate-180" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-white.svg" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section class="flex flex-col items-center bg-off-white py-[102px]">
    <div class="w-4/5 flex flex-row justify-center h-fit shadow-2xl">
        <div class="w-1/3">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/square.jpg" alt="">
        </div>
        <div class="w-2/3 flex flex-col justify-between p-[40px]">
            <div>
        <h3 class="text-[38px] leading-[38px] font-bold">Film made by Joanna</h3>
        <p class="text-[26px] flex align-self-start pt-1">Year 2008</p>
            </div>
        <div>
            <p class="text-[20px]">På Emigranternas Hus i Göteborg invigdes den 22 november en utställning"Mars 68 – att skiljas och åter förenas" arrangerad av AdamMickiewiczinstitutet. Polska Institutet och Stiftelsen Emigranternas Hus.</p>
        </div>
            <div class="flex justify-end">
                <a href="<?php echo get_permalink( get_page_by_path( 'photos' ) ); ?>"class="btn-wine py-2.5 px-5 text-center flex items-center justify-center">More work <img class="ml-2 rotate-180" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-white.svg" alt=""></a>
            </div>
        </div>
    </div>
    <div class="w-4/5 flex flex-row justify-center h-fit shadow-2xl mt-[48px]">
        <div class="w-1/3">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/assets/square.jpg" alt="">
        </div>
        <div class="w-2/3 flex flex-col justify-between p-[40px]">
            <div>
                <h3 class="text-[38px] leading-[38px] font-bold">Film made by Joanna</h3>
                <p class="text-[26px] flex align-self-start pt-1">Year 2008</p>
            </div>
            <div>
                <p class="text-[20px]">På Emigranternas Hus i Göteborg invigdes den 22 november en utställning"Mars 68 – att skiljas och åter förenas" arrangerad av AdamMickiewiczinstitutet. Polska Institutet och Stiftelsen Emigranternas Hus.</p>
            </div>
            <div class="flex justify-end">
                <a href="<?php echo get_permalink( get_page_by_path( 'photos' ) ); ?>"class="btn-wine py-2.5 px-5 text-center flex items-center justify-center">More work <img class="ml-2 rotate-180" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-white.svg" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section class="grid grid-cols-2 gap-20 flex-row justify-center items-start bg-off-white py-[102px] px-[180px] bg-white-red">
    <div>
        <h3 class="text-[38px] leading-[38px] font-bold mb-4">Scholarship</h3>
        <p class="text-[26px] flex justify-between align-self-start pt-1 flex-col gap-4">
            <span>
            Sveriges Författarfond: Multiple times.
            </span>
            <span>
            Bildkonstnärsfonden: Multiple times.
            </span>
            <span>
            Konstnärsnämnden: 10-year scholarship as a filmmaker in 2001. 2-year scholarship in 2017 and 2020.
            </span>
            <span>
            Svenska Filminstitutet: Scholarship 2003.
            </span>
            <span>
            Stiftelsen Gnistan: Göteborg 2019.
            </span>
            <span>
            Residensstipendium: Paris 2022, Svenska Fotografers Förbund.
            </span>
            <span>
            Stiftelsens Katz Stipendium: Göteborg 2022.
            </span>
        </p>
    </div>
    <div>
        <h3 class="text-[38px] leading-[38px] font-bold">Awards</h3>
        <p class="text-[26px] flex justify-between align-self-start pt-1 flex-col gap-4">
            <span>
                John Cassavetes Prize from the publishing house Korpen (together with Tommy Berggren) 1995.
                </span>
                <span>
                Polish Foreign Minister's Grand Prize in 2001 (together with Bo Persson).
                </span>
                <span>
                Commemorative Medal of Solidarity, Poland 2005.
                </span>
                <span>
                Freedom and Solidarity Medal, Poland President Bronislaw Komorowski, 2012.
                </span>
                <span>
                City of Prague Medal for the Defense of Human Rights, Prague 2013.
                </span>
                <span>
                Czech Senate Award for Defense of Human Rights, 2018.
            </span>
        </p>
    </div>
</section>
<footer>
    <?php get_footer() ?>
</footer>