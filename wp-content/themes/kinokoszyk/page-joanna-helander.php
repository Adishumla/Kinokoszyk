<header>
	<?php get_header(); ?>
</header>
<section class="w-full h-4/4 flex flex-row justify-center items-center bg-white-red font-poppins text-off-black mt-[72px] mb-20">
	<div class=" flex flex-col w-2/4">
		<h1 class="text-[88px] font-prata p-0 leading-[86px] align-center">Joanna Helander</h1>
		<div class="w-2/6 max-w-[600px] mt-4 w-full mr-4">
			<p class="text-xl flex flex-col gap-4 w-full">
                <span class="w-full">Learn about Joanna Helander, a photographer, writer, and filmmaker born in Ruda Slaska in 1948. Arrested for protesting the invasion of Czechoslovakia, she emigrated to Sweden in 1971 and became an accomplished photographer, receiving the Swedish "Photographer of the Year" award in 1983.
                </span>
				<span>
				Her early contacts with Poland's democratic opposition led her to direct a festival of independent Polish culture in Sweden in 1981, and she went on to publish books of photography and translations of Polish poetry. She has also directed and produced several films based on her own photographs. Joanna Helander's work has appeared in publications and television programs in Poland, Germany, and the U.S.A.
                </span>
			</p>
		</div>
        <div class="flex gap-6 mt-20 h-fit">
            <a href=# class="btn-white py-2.5 px-5 text-center flex items-center justify-center m-0">Read her biography</a>
            <a href="#interview-section" id="interview-button" class="btn-wine py-2.5 px-5 text-center flex items-center justify-center m-0">Read her interview</a>
        </div>
	</div>
    <div>
	<img class="h-full object-fill justify-self-end shadow-2xl" src="<?php echo get_template_directory_uri(); ?>/assets/Joanna-interview.jpg" alt="">
    </div>
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
<section id="interview-section" class="bg-black px-[180px] absolute top-0 left-0 w-full h-fit hidden z-50 mt-[72px] ">
    <div class="bg-off-white py-[102px] px-[180px] font-poppins">
        <div class="top-0 right-60 p-10 cursor-pointer absolute" id="close-interview">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-exit.svg" alt="">
        </div>
    <h1 class="text-[80px] font-bold text-start pt-20 font-prata">
        REALITY MIS EN SCENE
    </h1>
    <h2 class="text-[20px] leading-[20px] text-start pt-20">
        Interview with Joanna Helander by Jerzy Illg for Polish journal Naglos
    </h2>
    <div>
    <p class="text-[20px] flex flex-col gap-4">
        <span>
            <b>Jerzy Illg:</b> Tell me what it felt like to return to Poland after emigratingto Sweden.
        </span>
        <span>
        <b>Joanna Helander:</b> The first time I came back to Poland after living over five years in Sweden was in March 1976. I had trained as a photographer in Gothenburg, and now I wanted to take pictures of Ruda, my home town in southern Poland, where my parents, my brother, my aunt and my grandmother was still living.
        </span>
        <span>
        I was 28 and had begun to feel curious about the place I had once left with such enormous relief, well, fled from. I only had to get out at its railway station to be hit by a strange and surprising emotion. These cobblestones, these rusty hinges, the Karlik beerstand – all of it was all so familiar, yet utterly new, as if I was seeing it for the first time. The first old woman in traditional long skirts I met with recognised me instantly, the ironminer’s brass band the town was so proud of was marching down the main street in a funeral procession –suddenly everything gripped me, felt so close.
        </span>
        <span>
        Evidently it was this kind of aestehtic that, unbeknown to me, had shaped my nature! I felt a tremendous need to grab hold of what I was experiencing, fix it all in some way. And then, this immediate sense of belonging… The Silesian dialect, the humour, the jokes, the local place names; Godula, Bobrek, Orzegow…Yet all this – these allotments with their gooseberry bushes, blackcurrants and cherry trees – was so irremediably poisoned. These freshly painted doorways, the well-kept houses. And – right on their doorsteps – a coke refinery belching smoke that stifled you, stung your eyes. But I was surprised, too, by the resilience, the vitality, the irrepressible humour of individuals I ran into, realising to my amazement that somewhere deep down inside them their sense of personal dignity was fully intact, unbroken.
        </span>
        <span>
        <b>Jerzy Illg:</b> Let´s go back to your photos…Joanna Helander:I find it hard to describe or analyze my own photos, what I can´t express in words I express in pictures. But one thing I do think I see, clearly: the touch of darkness and melancholy in my Polish pictures is not to be found in my Swedish ones, not in the same way. They are lighter, in both senses. When I exhibited in Poland in 1979 a Katowice journalist said the Poland I had depicted didn´t exist in reality, it could only be a put up job, ordered by the CIA. I burst out laughing. It seems to me in spite of everything my pictures don´t lack humour… 
        </span>
        <span>
        <b>Jerzy Illg:</b> A lot of people have written that your books, exhibitions and films approach your subjects with tenderness.
        </span>
        <span>
        <b>Joanna Helander:</b> I take it as a compliment…
        </span>
        <span>
        <b>Jerzy Illg:</b> There is so much warmth in your pictures. It makes your photos into something more than documentaries.
        </span>
        <span>
        <b>Joanna Helander:</b> Because I am not just documenting, am I? Not limiting myself to mere facts. Purely documentary photos are not very exciting. Anyone who wants to mirror reality must first stage it. 
        </span>
        <span>
        <b>Jerzy Illg:</b> That is what turns photos into works of art. The people in your pictures, your Ruda, if you like, are raised to mythological status. Tell me, do you think your way of seeing the world is in some way connected with the blend of Polish, German and Jewish? With your being born in a border country, has that meant something?  Joanna Helander: There is something in that, certainly. Yet I must say the fact of my having emigrated and suddenly finding myself on another planet has been most important of all. It´s given me an extra dimension in life, the kind of detachment one needs if one is to see clearly.
        </span>
        <span>
        From a conversation published in the Polish journal Naglos, October 1994
        </span>
    </p>
    </div>
</div>
</section>
<footer>
    <?php get_footer() ?>
</footer>
<script>
    const interviewButton = document.getElementById('interview-button');
    const interviewSection = document.getElementById('interview-section');
    const closeInterview = document.getElementById('close-interview');
    const body = document.querySelector('body');

    interviewButton.addEventListener('click', () => {
        interviewSection.classList.remove('hidden');

    });

    closeInterview.addEventListener('click', () => {
        interviewSection.classList.add('hidden');
    });

</script>